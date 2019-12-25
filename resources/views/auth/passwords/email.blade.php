@extends('app_login_register')

@section('content')
<div class="wapper login_page f-pass">

<div class="main_login_content">
    <div class="sign_in_block">

        <div class="header-in">
            <div class="header-in-left">
                <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" /></a>
            </div>
    </div>
    <div class="sign_inner">
        <h1>forgot password</h1>
        <div class="social_icon">
            <ul>
                <li><a href="{{ url('auth/facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('auth/google') }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('auth/linkedin') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="sign_in_feild">
              @if (session('status'))
                        <div class="success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

             <form method="POST" action="{{ route('password.email') }}">
                        @csrf
            <label>or use your email account:</label>
              <div class="form-group form-check email_feild">
                <img src="{{ asset('images/email.png') }}"/>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback err" role="alert">
                                    {{ $message }}
                                    </span>
                                @enderror
 
              </div>
              <!-- <div class="button">send</div> -->
               <button type="submit" class="button">
                                    {{ __('Reset Password') }}
                                </button>
              </form>
        </div>
    </div>
    </div>
    <div class="sign_in_side_block">
        <h1>Hello</h1>
        <p>Enter your personal details<br> and start learn with us</p>
        <div class="button"><a href="{{ route('register') }}">sign up</a></div>
    </div>
</div>
</div>
@endsection