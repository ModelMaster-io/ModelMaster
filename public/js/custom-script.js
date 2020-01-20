jQuery(document).ready(function() {
    // Code for comman JS for all pages

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

        jQuery.ajax({
            url: form.action,
            type: form.method,
            data: jQuery(form).serialize(),
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
            	if(err.errors.email != undefined) {
	            	toastr.error(err.errors.email);
	            }
                jQuery('.update-usr-submit').find('i').hide();
                jQuery('.update-usr-submit').prop('disabled', false);
            },
            complete: function(){
            } 

        });
    }

    });



});

// Function for top bar menu links
function myFunction() {
    var x_top = document.getElementById("myLinks");
    if (x_top.style.display === "block") {
        x_top.style.display = "none";
    } else {
        x_top.style.display = "block";
    }
}