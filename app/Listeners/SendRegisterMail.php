<?php

namespace App\Listeners;

use App\Events\UsersMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use App\Mail\RegisteredMail;
use App\Mail\RegisteredMailToAdmin;
use App\User;

class SendRegisterMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UsersMail  $event
     * @return void
     */
    public function handle(UsersMail $event)
    {


        $email = $event->user;
        Mail::to($email)->send(new RegisteredMail($event->user));

        $admin_email = config('app.admin_email');
        Mail::to($admin_email)->send(new RegisteredMailToAdmin($event->user));
    }
}
