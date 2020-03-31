<?php

namespace App\Listeners;

use App\Events\UserPasswordChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ChangedPasswordMail;
use Mail;
use App\User;

class SendChangedPasswordMail
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
     * @param  UserPasswordChanged  $event
     * @return void
     */
    public function handle(UserPasswordChanged $event)
    {

        $email = $event->user->email;
        Mail::to($email)->send(new ChangedPasswordMail($event->user));
    }
}
