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
        <h1>Reset Password</h1>
      
        <div class="sign_in_feild">
              @if (session('status'))
                        <div class="success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                 <input type="hidden" name="token" value="{{ $token }}">
              <div class="form-group form-check email_feild">
                <img src="{{ asset('images/email.png') }}"/>
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="E-mail address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback err" role="alert">
                                    {{ $message }}
                                    </span>
                                @enderror
 
              </div>
              <div class="form-group form-check">
                <img src="{{ asset('images/lock.png') }}"/>
               <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback err" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>

                <div class="form-group form-check">
                <img src="{{ asset('images/lock.png') }}"/>

                 <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

             </div>
              <!-- <div class="button">send</div> -->
               <button type="submit" class="button" style="background: #29B473">
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