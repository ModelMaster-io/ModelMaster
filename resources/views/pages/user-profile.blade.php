@extends('app')
@section('scripts_and_styles')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script type="text/javascript">

function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#user_profile_preview').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
  }

  jQuery(document).ready(function () {
     $("#profile_image").change(function() {
            readURL(this);
    });
  });
  
jQuery(document).ready(function() {

  jQuery("#frm_changeuserpassword").validate({
        rules: {
            current_password: {
                required: true
            },
            new_password: {
                required: true,
                minlength: 8
            },
            new_password_confirmation: {
                required: true,
                equalTo: "#new_password"
            }
        },
        messages: {
             password: {
                required: "Please enter Password",
                minlength: "Please enter at least 8 characters."
            }
        },
        submitHandler: function(form) {

        jQuery.ajax({
            url: form.action,
            type: form.method,
            data: jQuery(form).serialize(),
            beforeSend: function(){
                jQuery('.change-pwd-submit').prop('disabled', true);
                jQuery('.change-pwd-submit').find('i').show();
            },
            success: function(response) {
              
              jQuery('.change-pwd-submit').find('i').hide();
              jQuery('.change-pwd-submit').prop('disabled', false);

              if(response.status == 1){
                  toastr.success(response.success);
                  jQuery("#frm_changeuserpassword")[0].reset()
              } else {
                  toastr.error(response.error);
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                toastr.error('Something Goes Wrong!');

                jQuery('.change-pwd-submit').find('i').hide();
                jQuery('.change-pwd-submit').prop('disabled', false);
            },
            complete: function(){
            } 

        });
    }

    });


    jQuery("#frm_udpateuser").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        },

        submitHandler: function(form) {

        var formData = new FormData(form);

        jQuery.ajax({
            url: form.action,
            type: form.method,
            cache:false,
            contentType: false,
            processData: false,
            data: formData,
            beforeSend: function(){
                jQuery('.update-usr-submit').prop('disabled', true);
                jQuery('.update-usr-submit').find('i').show();
            },
            success: function(response) {
              
              jQuery('.update-usr-submit').find('i').hide();
              jQuery('.update-usr-submit').prop('disabled', false);

              if(response.status == 1){
                  toastr.success(response.success);
              } else {
                  toastr.error(response.error);
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              var err = jQuery.parseJSON(jqXHR.responseText);
              /*if(err.errors.email != undefined) {
                toastr.error(err.errors.email);
              }*/
                jQuery('.update-usr-submit').find('i').hide();
                jQuery('.update-usr-submit').prop('disabled', false);
            },
            complete: function(){
            } 

        });
    }

    });

  //toastr.error('Please select an artist');
  //toastr.success('Please select an artist');

});

</script>

@endsection

@php
  $user_id = \Auth::user()->id;

  $img_path = '';
  
  if($user->service_provider == 'normal') {

    $img_path = asset('storage/profile_images');

  }

@endphp

@section('content')
  <div class="wapper user_profile">
    <div class="title_main">user profile</div>
    <div class="main_login_content">

      <div class="user-sidebar">

        <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
          <li class="nav-item ">
            <img src="../images/my_profile.png"/><a  id="my-profile-md" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile" aria-selected="false" class="active">my profile</a>
          </li>  
          @if(\App\User::getUserProvider($user_id) == 'normal')
          <li class="nav-item">
            <img src="../images/change_pass.png"/><a  id="change-password-md" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">change password</a>
          </li> 
          @endif

        </ul>

      </div>



      <div class="tab-content card" id="myTabContentMD">

        <div class="tab-pane fade show active" id="my-profile" role="tabpanel" aria-labelledby="my-profile-md">
          <div class="sign_inner">
            <div class="sign_in_feild">

              <form id="frm_udpateuser" class="form-horizontal" method="POST" action="{{ route('userprofile.update', $user) }}">
              {{ method_field('patch') }}
              <div class="user-img">
                
                @if(\App\User::getUserProvider($user_id) == 'normal')
                  <img id="user_profile_preview" src="{{ ( ! empty($user->image) ? $img_path.'/'.$user->image : URL::asset('images/profile-default.jpg')) }}"/>
                  <input type="file" name="profile_image" id="profile_image">
                @else

                <img src="{{ ( ! empty($user->image) ? $user->image : URL::asset('images/profile-default.jpg')) }}"/>

                @endif

              </div>
              <div class="user-detail ft">

                <div class="form-block">
                  @php

                  $user_data = !empty($user->name) ? explode(' ', $user->name) : array();
                  $first_name = !empty($user_data[0]) ? $user_data[0] : '';
                  $last_name = !empty($user_data[1]) ? $user_data[1] : '';

                  @endphp
                  <div class="form-group form-check">
                    <label>first name:</label>
                    <div class="user-input"><img src="../images/user.png"/><input type="text" name="first_name" value="{{ $first_name }}"></div>
                  </div>

                  <div class="form-group form-check">
                    <label>last name:</label>
                    <div class="user-input"><img src="../images/user.png"/><input type="text" name="last_name" value="{{ $last_name }}"></div>
                  </div>
                </div>

                <div class="form-block">
                  <div class="form-group form-check">
                    <label>email address:</label>
                    <div class="user-input email"><img src="../images/email.png"/><input disabled="" type="text" name="email" value="{{ ( ! empty($user->email) ? $user->email : '') }}"></div>
                  </div>
                  <div class="form-group form-check">
                    <label>web site:</label>
                    <div class="user-input"><img src="../images/website.png"/><input type="text" name="website" value="{{ ( ! empty($user->website) ? $user->website : '') }}"></div>
                  </div>
                </div>


                <div class="form-block">
                  <div class="form-group form-check">
                    <label>cell phone:</label>
                    <div class="user-input"><img src="../images/call.png"/><input type="number" name="cellphone" value="{{ ( ! empty($user->cellphone) ? $user->cellphone : '') }}"><input type="hidden" name="provider_id" value="{{ ( ! empty($user->provider_id) ? $user->provider_id : '') }}"></div>
                  </div>
                  <div class="form-group form-check">
                    <label>office phone:</label>
                    <div class="user-input"><img src="../images/call.png"/><input type="number" name="officephone" value="{{ ( ! empty($user->officephone) ? $user->officephone : '') }}"></div>
                  </div>
                </div>

              </div>

              <div class="form-group form-check">
                <button class="button update-usr-submit">Update<i class="fa fa-spinner fa-spin" style="font-size:18px;display:none;"></i></button>
            </div>

          </form>

            </div>
          </div>
        </div>
        @if(\App\User::getUserProvider($user_id) == 'normal')
        <div class="tab-pane fade " id="change-password" role="tabpanel" aria-labelledby="change-password-md">
          <div class="sign_inner">
            <div class="sign_in_feild">

              <form id="frm_changeuserpassword" class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
              
              <div class="form-group form-check">
                <label>old Password:</label>
                <div class="user-input"><img src="../images/lock.png"/><input type="password" id="current_password" name="current_password"></div>
              </div>
              <div class="form-group form-check">
                <label>Password:</label>
                <div class="user-input"><img src="../images/lock.png"/><input type="password" id="new_password" name="new_password"></div>
              </div>
              <div class="form-group form-check">
                <label>Confirm Password:</label>
                <div class="user-input"><img src="../images/lock.png"/><input type="password" id="new_password_confirmation" name="new_password_confirmation"></div>
              </div>
              
              <div class="form-group form-check">
                <button class="button change-pwd-submit">Submit<i class="fa fa-spinner fa-spin" style="font-size:18px;display:none;"></i></button>
              </div>

            </form>
             
            </div>
          </div>
        </div>
        @endif

    </div>
  </div>

@endsection