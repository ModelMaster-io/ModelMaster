@extends('app_login_register')

@section('content')
<div class="wapper login_page registration_page">

<div class="main_login_content">
    <div class="sign_in_side_block registration_back">

        <div class="header-in">
            <div class="header-in-left">
                <a href="{{ url('/') }}"><img src="images/white_logo.png" /></a>
            </div>
    </div>
    <div class="registration_back_inner">
        <h1>Welcome Back</h1>
        <p>To keep connected with us please <br> login with your personal info</p>
        <div class="button" ><a href="{{ route('login') }}">sign in</a></div>
    </div>
</div>
    <div class="sign_in_block">

        
    <div class="sign_inner">
        <h1>Create Account</h1>
        <div class="social_icon">
            <ul>
                <li><a href="{{ url('auth/facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('auth/google') }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('auth/linkedin') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="sign_in_feild">
            <form method="POST" action="{{ route('register') }}">
                @csrf

            <label>or use your email for registration</label>
              <div class="form-group form-check email_feild">
                <img src="images/form-user.png"/>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                @error('name')
                    <span class="invalid-feedback err" role="alert">
                        {{ $message }}
                    </span>
                @enderror

              </div>
              <div class="form-group form-check email_feild">
                <img src="images/email.png"/>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback err" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
              </div>
              <div class="form-group form-check">
                <img src="images/lock.png"/>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback err" role="alert">
                        {{ $message }}
                    </span>
                @enderror
              </div>
              <div class="form-group form-check">
                <img src="images/lock.png"/>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
              </div>
              <div class="button" >
                <button type="submit" class="btn btn-primary">
                    {{ __('sign up') }}
                </button>  
                </div>
            </form>
        </div>

    </div>
    </div>
    
</div>
</div>
@endsection
