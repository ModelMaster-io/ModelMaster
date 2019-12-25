@extends('app_login_register')

@section('content')
<div class="wapper login_page">

<div class="main_login_content">
    <div class="sign_in_block">

        <div class="header-in">
            <div class="header-in-left">
                <a href="{{ url('/') }}"><img src="images/logo.png" /></a>
            </div>
    </div>
    <div class="sign_inner">
        <h1>Sign in to ModelMaster</h1>
        <div class="social_icon">
            <ul>
                <li><a href="{{ url('auth/facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('auth/google') }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('auth/linkedin') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="sign_in_feild">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <label>or use your email account:</label>
              <div class="form-group form-check email_feild">
                <img src="images/email.png"/>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
               
            </div>
              <div class="form-group form-check">
                <img src="images/lock.png"/>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
              
                @error('email')
                <span class="invalid-feedback err" role="alert">
                    {{ $message }} 
                </span>
            @enderror 

                @error('password')
                <span class="invalid-feedback err" role="alert">
                    {{ $message }}
                </span>
            @enderror
              </div>
              <div class="forgot_password"><a href="{{ route('password.request') }}">Forgot your password?</a></div>
              {{-- <div class="forgot_password"><a href="{{ route('password.request') }}">Forgot your password?</a></div> --}}
              <div class="button" ><button type="submit" >
                {{ __('Sign in') }}
            </button></div>
                          {{-- <div class="button" ><a href="#">sign in</a></div> --}}
            </form>
        </div>


      
    </div>
    </div>
    <div class="sign_in_side_block">
        <h1>Hello</h1>
        <p>Enter your personal details<br> and start learn with us</p>
    <div class="button" ><a href="{{ route('register') }}">sign up</a></div>
    </div>
</div>
</div>

@endsection