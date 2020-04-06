<?php namespace GeneaLabs\LaravelMixpanel\Http\Requests;

use GeneaLabs\LaravelMixpanel\Events\MixpanelEvent;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class RecordStripeEvent extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules() : array
    {
        return [
            //
        ];
    }

    public function process()
    {
        $data = $this->json()->all();

        if (! $data || ! ($data['data'] ?? false)) {
            return;
        }

        $transaction = $data['data']['object'];
        $originalValues = array_key_exists('previous_attributes', $data['data'])
            ? $data['data']['previous_attributes']
            : [];
        $stripeCustomerId = $this->findStripeCustomerId($transaction);
        $authModel = config('auth.providers.users.model') ?? config('auth.model');
        $user = app($authModel)->where('stripe_id', $stripeCustomerId)->first();

        if (! $user) {
            return;
        }

        app('mixpanel')->identify($user->id);

        if ($transaction['object'] === 'charge' && ! count($originalValues)) {
            $this->recordCharge($transaction, $user);
        }

        if ($transaction['object'] === 'subscription') {
            $this->recordSubscription($transaction, $user, $originalValues);
        }
    }

    private function recordCharge(array $transaction, $user)
    {
        $charge = 0;
        $amount = $transaction['amount'] / 100;
        $status = 'Failed';

        if ($transaction['paid']) {
            $status = 'Authorized';

            if ($transaction['captured']) {
                $status = 'Successful';

                if ($transaction['refunded']) {
                    $status = 'Refunded';
                }
            }
        }

        $trackingData = [
            'Payment' => [
                'Status' => $status,
                'Amount' => $amount,
            ],
        ];

        event(new MixpanelEvent($user, $trackingData, $charge));
    }

    private function recordSubscription(array $transaction, $user, array $originalValues = [])
    {
        $profileData = [];
        $trackingData = [];
        $planStatus = array_key_exists('status', $transaction) ? $transaction['status'] : null;
        $planName = isset($transaction['plan']['name']) ? $transaction['plan']['name'] : null;
        $planStart = array_key_exists('start', $transaction) ? $transaction['start'] : null;
        $planAmount = isset($transaction['plan']['amount']) ? $transaction['plan']['amount'] : null;
        $oldPlanName = isset($originalValues['plan']['name']) ? $originalValues['plan']['name'] : null;
        $oldPlanAmount = isset($originalValues['plan']['amount']) ? $originalValues['plan']['amount'] : null;

        if ($planStatus === 'canceled') {
            $profileData = [
                'Subscription' => 'None',
                'Churned' => (new Carbon)
                    ->createFromTimestamp($transaction['canceled_at'])
                    ->format('Y-m-d\Th:i:s'),
                'Plan When Churned' => $planName,
                'Paid Lifetime' => (new Carbon)
                    ->createFromTimestampUTC($planStart)
                    ->diffInDays((new Carbon)->createFromTimestamp($transaction['ended_at'])
                    ->timezone('UTC')) . ' days'
            ];
            $trackingData = [
                'Subscription' => ['Status' => 'Canceled', 'Upgraded' => false],
                'Churn! :-(' => [],
            ];
        }

        if (count($originalValues)) {
            if ($planAmount && $oldPlanAmount) {
                if ($planAmount < $oldPlanAmount) {
                    $profileData = [
                        'Subscription' => $planName,
                        'Churned' => (new Carbon($transaction['ended_at']))
                            ->timezone('UTC')
                            ->format('Y-m-d\Th:i:s'),
                        'Plan When Churned' => $oldPlanName,
                    ];
                    $trackingData = [
                        'Subscription' => [
                            'Upgraded' => false,
                            'FromPlan' => $oldPlanName,
                            'ToPlan' => $planName,
                        ],
                        'Churn! :-(' => [],
                    ];
                }

                if ($planAmount > $oldPlanAmount) {
                    $profileData = [
                        'Subscription' => $planName,
                    ];
                    $trackingData = [
                        'Subscription' => [
                            'Upgraded' => true,
                            'FromPlan' => $oldPlanName,
                            'ToPlan' => $planName,
                        ],
                        'Unchurn! :-)' => [],
                    ];
                }
            } else {
                if ($planStatus === 'trialing' && ! $oldPlanName) {
                    $profileData = [
                        'Subscription' => $planName,
                    ];
                    $trackingData = [
                        'Subscription' => [
                            'Upgraded' => true,
                            'FromPlan' => 'Trial',
                            'ToPlan' => $planName,
                        ],
                        'Unchurn! :-)' => [],
                    ];
                }
            }
        } else {
            if ($planStatus === 'active') {
                $profileData = [
                    'Subscription' => $planName,
                ];
                $trackingData = [
                    'Subscription' => ['Status' => 'Created'],
                ];
            }

            if ($planStatus === 'trialing') {
                $profileData = [
                    'Subscription' => 'Trial',
                ];
                $trackingData = [
                    'Subscription' => ['Status' => 'Trial'],
                ];
            }
        }

        event(new MixpanelEvent($user, $trackingData, 0, $profileData));
    }

    private function findStripeCustomerId(array $transaction)
    {
        if (array_key_exists('customer', $transaction)) {
            return $transaction['customer'];
        }

        if (array_key_exists('object', $transaction) && $transaction['object'] === 'customer') {
            return $transaction['id'];
        }

        if (array_key_exists('subscriptions', $transaction)
            && array_key_exists('data', $transaction['subscriptions'])
            && array_key_exists(0, $transaction['subscriptions']['data'])
            && array_key_exists('customer', $transaction['subscriptions']['data'][0])
        ) {
            return $transaction['subscriptions']['data'][0]['customer'];
        }
    }
}
