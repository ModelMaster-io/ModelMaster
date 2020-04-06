<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use App\Events\ContactSend;
use App\Events\UsersMail;
use App\Events\UserPasswordChanged;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        \App\Events\ContactSend::class => [
            \App\Listeners\SendContactMail::class,
        ],

        \App\Events\UsersMail::class => [
            \App\Listeners\SendRegisterMail::class,
        ],

        \App\Events\UserPasswordChanged::class => [
            \App\Listeners\SendChangedPasswordMail::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
