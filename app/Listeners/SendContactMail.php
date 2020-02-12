<?php

namespace App\Listeners;

use App\Events\ContactSend;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ContactUs;
use App\Mail\ContactUsAdmin;
use Mail;
use App\Contact;

class SendContactMail
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
     * @param  PlaylisterRegisterd  $event
     * @return void
     */
    public function handle(ContactSend $event)
    {
        //$data = array('name'=>"NNC Infotech", 'email' => $event->user->email);
   
        /*Mail::send(['emails.mail'], $data, function($message) {
            $message->to('nnc.sendbox@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
            $message->from('ss.sendbox@gmail.com','NNC Infotech');
        });*/

        $email = $event->contact->email;
        Mail::to($email)->send(new ContactUs($event->contact));

        $admin_email = config('app.admin_email');
        Mail::to($admin_email)->send(new ContactUsAdmin($event->contact));

    }
}
