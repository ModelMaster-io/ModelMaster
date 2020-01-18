<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;
use Hash;

class UserProfile extends Controller
{
    //

    public function __construct(){
        //$this->middleware('auth');
    }

	public function changePassword(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            //return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");

            return response()->json(['status'=>0,  'error'=>'Your current password does not matches with the password you provided. Please try again.']);
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            //return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");

            return response()->json(['status'=>0,  'error'=>'New Password cannot be same as your current password. Please choose a different password.']);
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        //return redirect()->back()->with("success","Password changed successfully !");

        return response()->json(['status'=>1,  'success'=>'Password changed successfully!']);
    }

}