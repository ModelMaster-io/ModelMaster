jQuery(document).ready(function() {
    // Code for comman JS for all pages

if(jQuery('#frm-contact').length > 0) {

    jQuery("#frm-contact").validate({
        rules: {
        	username: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
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
                jQuery('.contact-usr-submit').prop('disabled', true);
                jQuery('.contact-usr-submit').find('i').show();
            },
            success: function(response) {
              
              jQuery('.contact-usr-submit').find('i').hide();
              jQuery('.contact-usr-submit').prop('disabled', false);

              if(response.status == 1){
                  toastr.success(response.success);
                  jQuery("#frm-contact")[0].reset()
              } else {
                  toastr.error(response.error);
              }

            },
            error: function (jqXHR, textStatus, errorThrown) {
   
                jQuery('.contact-usr-submit').find('i').hide();
                jQuery('.contact-usr-submit').prop('disabled', false);
            },
            complete: function(){
            } 

        });
    }

    });

}


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