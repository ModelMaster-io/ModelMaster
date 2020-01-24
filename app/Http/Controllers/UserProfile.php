<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use File;
use App\User;
use Auth;
use Hash;
use Image;

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



    public function updateuser(User $user, Request $request)
    { 


        if((Auth::user()->email == $request->get('email')) && (Auth::user()->service_provider == 'normal')) {

       $val = $request->validate([
            'email' => 'required|email|unique:users,email,'.$request->segment(2),
            'image' => 'image|mimes:jpeg,png,jpg|max:10240'
        ]);

        } else if((Auth::user()->service_provider != 'normal') && (Auth::user()->provider_id == $request->get('provider_id'))){
            // code for social users
            $user->password = '';
        }


        //$user = User::findOrFail(auth()->user()->id);

        $first_name = !empty($request->get('first_name')) ? $request->get('first_name') : '';
        $last_name = !empty($request->get('last_name')) ? $request->get('last_name') : '';
        $user->name = trim($first_name.' '.$last_name);
        //$user->email = $request->get('email');
        $user->website = $request->get('website');
        $user->cellphone = $request->get('cellphone');
        $user->officephone = $request->get('officephone'); 

        if ($request->file('profile_image') && Auth::user()->service_provider == 'normal') {

            $files = $request->file('profile_image');
            $flnm = str_replace(' ', '', $files->getClientOriginalName());
            $filename = 'mm_'.uniqid().'_'.$flnm;

            //$extension = Input::file('profile_image')->getClientOriginalExtension();

            $destinationPath = storage_path('app/public/profile_images');

            //Input::file('profile_image')->move($destinationPath, $filename);
   
            /* insert watermark at bottom-right corner with 10px offset
            $img->insert(public_path('images/logo.png'), 'center', 10, 10);*/

            /* Code for upload user image of 150 * 150 */
            Image::make($files)
            ->fit(150, 150)
            ->save($destinationPath.'/'.$filename, 80);

            //update model
            $oldAvatar = isset($user->image) ? $user->image : '';

            $user->image = $filename;

            // delete old image
            if($oldAvatar != '') {

                unlink($destinationPath.'/'.$oldAvatar);

            }


        }

        $user->save();

            return response()->json(['status'=>1,  'success'=>'Profile Updated successfully!']);
                    
        }
        


}