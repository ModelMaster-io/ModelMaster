<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Contact;
use Event; 
use App\Events\ContactSend;
use Mail;
use App\User;
use Auth;

class ContactUs extends Controller
{
    public function __construct(){
        
    }


    public function sendContact(Contact $contact, Request $request) {

    	$val = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact->name = $request->get('username');
        $contact->email = $request->get('email');
        $contact->message = $request->get('message'); 

        $contact->save();

        event(new ContactSend($contact));

        if (Auth::check()){

            return response()->json(['status'=>1,  'success'=>'Message Sent Successfully!', 'user_id'=>Auth::id()]);

        } else{

            return response()->json(['status'=>1,  'success'=>'Message Sent Successfully!', 'email'=>$contact->email]);
        }


    }


}
