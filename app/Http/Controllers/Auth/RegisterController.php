<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Socialite;
use Newsletter;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if ( ! Newsletter::isSubscribed($data['email']) ) {

            $mc_name = (!empty($data['name'])) ? explode(' ', trim($data['name'])) : array();
            $mc_fname = isset($mc_name[0]) ? $mc_name[0] : '';
            $mc_lname = isset($mc_name[1]) ? $mc_name[1] : '';

            Newsletter::subscribe($data['email'], ['FNAME'=>$mc_fname, 'LNAME'=>$mc_lname]);

        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'service_provider' => 'normal',
        ]);
    }


    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {

        try {
            
        $user = Socialite::driver('facebook')->stateless()->user();
            
        $isUserLogin = User::where(['provider_id' => $user->getId()])->first();
         
        if(!$isUserLogin) {

        $users = new User;
        $users->name = $user->getName();
        $users->email = (($user->getEmail() != null) ? $user->getEmail() : '');
        $users->provider_id = $user->getId();
        $users->service_provider ='facebook';
        $users->password = '';
        $users->image = (isset($user->avatar_original) ? $user->avatar_original : '');
        $users->save();

        if(!empty($user->getEmail())) {

            if (! Newsletter::isSubscribed($user->getEmail()) ) {

                $mc_name = (!empty($user->getName())) ? explode(' ', trim($user->getName())) : array();
                $mc_fname = isset($mc_name[0]) ? $mc_name[0] : '';
                $mc_lname = isset($mc_name[1]) ? $mc_name[1] : '';

                Newsletter::subscribe($user->getEmail(), ['FNAME'=>$mc_fname, 'LNAME'=>$mc_lname]);

            }

        }

        if(!isset($users->id)) {
           return redirect('/');

        }

        $login_user = User::where(['id' => $users->id])->first();
          \Auth::login($login_user);
          

        } else {
           
        $login_user = User::where(['provider_id' => $user->getId()])->first();
         
            \Auth::login($login_user);
        }    


            return redirect('/');


        } catch (Exception $e) {


            return redirect('auth/facebook');


        }
    }



    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {

        try {

        $user = Socialite::driver('google')->user();

        // $isUserLogin = User::where(['provider_id' => $user->getId()])->first();
        $isUserLogin = User::where(['provider_id' => $user->getId(),'service_provider' => 'google'])->first();

        if(!$isUserLogin) {

        $users = new User;
        $users->name = $user->getName();
        $users->email = $user->getEmail();
        $users->provider_id = $user->getId();
        $users->service_provider ='google';
        $users->password = '';
        $users->image = (isset($user->avatar_original) ? $user->avatar_original : '');
        $users->save();

        if(!empty($user->getEmail())) {

            if (! Newsletter::isSubscribed($user->getEmail()) ) {

                $mc_name = (!empty($user->getName())) ? explode(' ', trim($user->getName())) : array();
                $mc_fname = isset($mc_name[0]) ? $mc_name[0] : '';
                $mc_lname = isset($mc_name[1]) ? $mc_name[1] : '';

                Newsletter::subscribe($user->getEmail(), ['FNAME'=>$mc_fname, 'LNAME'=>$mc_lname]);

            }

        }

        if(!isset($users->id)) {

           return redirect('/');

        }

        $login_user = User::where(['id' => $users->id])->first();
          \Auth::login($login_user);


        } else {
             
        $login_user = User::where(['provider_id' => $user->getId()])->first();
         
            \Auth::login($login_user);
        }    

     
         

        return redirect('/');


        } catch (Exception $e) {


        return redirect('auth/google');


        }
    }



        public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleLinkedinCallback()
    {
        
        try {
            
        $user = Socialite::driver('linkedin')->user();

           // echo '<pre>'; print_r($user);die;
        $isUserLogin = User::where(['provider_id' => $user->getId()])->first();

        if(!$isUserLogin) {

        $users = new User;
        $users->name = $user->first_name.' ' . $user->last_name;
        $users->email = (($user->email != null) ? $user->email : '');
        $users->provider_id = $user->id;
        $users->service_provider ='linkedin';
        $users->password = '';
        $users->image = (isset($user->avatar_original) ? $user->avatar_original : '');
        $users->save();

        if(!empty($user->email)) {

            if (! Newsletter::isSubscribed($user->email) ) {

                Newsletter::subscribe($user->email, ['FNAME'=>$user->first_name, 'LNAME'=>$user->last_name]);

            }

        }

        if(!isset($users->id)) {

           return redirect('/');

        }

        $login_user = User::where(['id' => $users->id])->first();
          \Auth::login($login_user);
          

        } else {
             
        $login_user = User::where(['provider_id' => $user->getId()])->first();
         
            \Auth::login($login_user);
        }    

     
         

        return redirect('/');


        } catch (Exception $e) {


            return redirect('auth/google');


        }
    }



    public function userProfile(){
        
       return view('userprofile');
    }


}
