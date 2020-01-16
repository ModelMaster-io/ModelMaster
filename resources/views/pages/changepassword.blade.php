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
         <p>To keep connected with us please <br> enter your new password details</p>
         <div class="button" ><a href="{{ url('/') }}">Back</a></div>
      </div>
   </div>
   <div class="sign_in_block">
      <div class="sign_inner">
         <h1>Change Password</h1>
         <div class="sign_in_feild">
            @if (session('error'))
            <div class="alert alert-danger">
               {{ session('error') }}
            </div>
            @endif
            @if (session('success')) 
            <div class="alert alert-success">
               {{ session('success') }}
            </div>
            @endif
            <form id="frm_changeuserpassword" class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
               @csrf
               <div class="form-group form-check">
                  <img src="images/lock.png"/>
                  <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Current Password" name="current_password" required>
                  @if ($errors->has('current_password'))
                  <span class="invalid-feedback err" role="alert">{{ $errors->first('current_password') }}</span>
                  @endif
               </div>
               <div class="form-group form-check">
                  <img src="images/lock.png"/>
                  <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password" name="new_password" required>
                  @if ($errors->has('new_password'))
                  <span class="invalid-feedback err" role="alert">{{ $errors->first('new_password') }}</span>
                  @endif
               </div>
               <div class="form-group form-check">
                  <img src="images/lock.png"/>
                  <input id="new_password_confirm" type="password" class="form-control @error('new_password_confirm') is-invalid @enderror" placeholder="Confirm New Password" name="new_password_confirmation" required>
               </div>
               <div class="button" >
                  <button type="submit" class="btn btn-primary">
                  {{ __('Change Password') }}
                  </button>  
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
@endsection