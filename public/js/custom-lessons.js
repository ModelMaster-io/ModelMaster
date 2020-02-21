jQuery(document).ready(function () {


	jQuery(".lcltc1-mm").niceScroll();
	analytics.track("Opened Lesson", {"lesson": "3-Statement Model"});

    Tipped.create('.mm-tooltip', {
    	  skin: 'light',
		  position: 'topleft',
		  close: true,
		  hideOn: false,
		  onShow: function(content, element) {
		    jQuery(element).addClass('highlight');
		  },
		  afterHide: function(content, element) {
		    jQuery(element).removeClass('highlight');
		  }
    });


    setTimeout(function() {

		var curr = jQuery(this);

		var data = {
			"_token": jQuery('meta[name="csrf-token"]').attr('content')
		}

		jQuery.ajax({
	        url: '/get_spreadsheet',
	        type: 'POST',
	        data: data,
	        beforeSend: function(){
	        },
	        success: function(response) {

	          if(response.status == 1){

	    		var spread1 = GC.Spread.Sheets.findControl(document.getElementById('ss'));
	          	spread1.fromJSON(JSON.parse(response['spreadsheetData']));

	          	var screen = response['screen'];
	          	var step = response['step'];

	          	jQuery('.spread_steps_clk li a').removeClass('active');
	          	jQuery(".spread_steps_clk li:nth-child("+screen+") a").addClass('active');

	          	jQuery('.lesson-contant-left-tab-contant > .lcltc1').hide();
	          	jQuery("#step"+screen).show();

	          	jQuery("#step"+screen+" .spread_sub_steps_clk li a").removeClass('active');
	          	jQuery("#step"+screen+" .spread_sub_steps_clk li:nth-child("+step+") a").addClass('active');
                        
                        
				screen_element = jQuery('#step'+screen+'.lcltc1 .sub-lesson-step-contant');
				screen_element.hide()
				
				step_element = jQuery('#step'+screen+'.lcltc1 #sub'+screen+'-step'+step)
				step_element.scrollTop(0).show();
				jQuery(".lcltc1-mm").getNiceScroll().show().onResize();

	          }

	        },
	        error: function (jqXHR, textStatus, errorThrown) {
	        },
	        complete: function(){
	        } 

	    });

    }, 100);

	//JS for top of the spreadsheet option panel
	jQuery(document).on('click', '.spread_steps_clk li a', function() {
		var stp = jQuery(this).data('step');
		jQuery('.spread_steps_clk li a').removeClass('active');
		jQuery(this).addClass('active');
	
		jQuery('.lesson-contant-left-tab-contant .lcltc1').hide();
		jQuery('.lesson-contant-left-tab-contant #'+stp).show();
		jQuery(".lcltc1-mm").getNiceScroll().show().onResize();
	});
	
	if(jQuery('.spread_steps_clk li:first-child a').hasClass('active')){
		jQuery('.previous-btn').addClass('disabled');
	}
	
	if(jQuery('.spread_steps_clk li:last-child a').hasClass('active')){
		jQuery('.next-btn').addClass('disabled');
	}

	
	jQuery(document).on('click', '.next_btn', function() {

		var serializationOption = {
	       ignoreStyle: false, // indicate to ignore the style when convert workbook to json, default value is false
	       ignoreFormula: false, // indicate to ignore the formula when convert workbook to json, default value is false
	       rowHeadersAsFrozenColumns: false, // indicate to treat the row headers as frozen columns when convert workbook to json, default value is false
	       columnHeadersAsFrozenRows: false // indicate to treat the column headers as frozen rows when convert workbook to json, default value is false
	    };

	    var spread1 = GC.Spread.Sheets.findControl(document.getElementById('ss'));
	    var jsonString = JSON.stringify(spread1.toJSON(serializationOption));

		var curr = jQuery(this);

		
		var parent_step = jQuery('.spread_steps_clk li a.active').data('step');

		var current_sub_step = jQuery('#'+parent_step+' .spread_sub_steps_clk li a.active');
		
		var parent_step_number = parseInt(parent_step.split("step").pop());
		
		var current_sub_step_number = parseInt(current_sub_step.text());
				
		var data = {
				'lesson': jsonString,
				'lesson_id': 1,
				'screen': parent_step_number,
				'step': current_sub_step_number,
				"_token": jQuery('meta[name="csrf-token"]').attr('content')
		};
		
		analytics.track("Lesson Step", {"lesson": "3-Statement Model", "Parent Step": parent_step_number, "Sub-Step": current_sub_step_number, "Correct": true});
		
        jQuery.ajax({
            url: '/save_spreadsheet',
            type: 'POST',
            data: data,
            beforeSend: function(){
            	/*jQuery('.spread_loader').show();
                curr.prop('disabled', true);*/
            },
            success: function(response) {
              
              /*jQuery('.spread_loader').hide();
              curr.prop('disabled', false);*/

              if(response.status == 1){
                  /*toastr.success(response.success);*/
              } else {
                  toastr.error(response.error);
              }

            },
            error: function (jqXHR, textStatus, errorThrown) {
                jQuery('.spread_loader').hide();
                curr.prop('disabled', false);
            },
            complete: function(){
            } 

        });

		if(jQuery('#'+parent_step+' .spread_sub_steps_clk li:last-child').find('a').hasClass('active')){

			if(jQuery('.spread_steps_clk li:last-child').find('a').hasClass('active')){
				jQuery('#'+parent_step+' .next_btn').attr('disabled', 'disabled');
				jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
				analytics.track("Finished Lesson", {"lesson": "3-Statement Model"});
			} else {
				jQuery('.spread_steps_clk li .active').closest('li').next('li').find('a').trigger('click');
			}
			
		} else {
			jQuery('#'+parent_step+' .next_btn').removeAttr('disabled');
			jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
		}

		jQuery(current_sub_step).closest('li').next('li').find('a').trigger('click');

		jQuery(".lcltc1-mm").getNiceScroll().show().onResize();

		var current_sub_step_data = jQuery('#'+parent_step+' .spread_sub_steps_clk li a.active').data('step');


	});
	
	
	jQuery(document).on('click', '.previous_btn', function() {


		var parent_step = jQuery('.spread_steps_clk li a.active').data('step');

		var current_sub_step = jQuery('#'+parent_step+' .spread_sub_steps_clk li a.active');

		if(jQuery('#'+parent_step+' .spread_sub_steps_clk li:nth-child(1)').find('a').hasClass('active')){

			if(jQuery('.spread_steps_clk li:nth-child(1)').find('a').hasClass('active')){
				jQuery('#'+parent_step+' .previous_btn').attr('disabled', 'disabled');
				jQuery('#'+parent_step+' .next_btn').removeAttr('disabled');
			} else {
				jQuery('.spread_steps_clk li .active').closest('li').prev('li').find('a').trigger('click');
				jQuery('#'+parent_step).prev('.lcltc1').find('.spread_sub_steps_clk li:last-child').find('a').trigger('click');
			}

		} else {
			jQuery('#'+parent_step+' .next_btn').removeAttr('disabled');
			jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
		}

		jQuery(current_sub_step).closest('li').prev('li').find('a').trigger('click');

		jQuery(".lcltc1-mm").getNiceScroll().show().onResize();

	});


	/* JS code for sub steps on spreadsheet */
	jQuery(document).on('click', '.spread_sub_steps_clk li a', function() {
		var stp = jQuery(this).data('step');
		var parent_step = jQuery('.spread_steps_clk li a.active').data('step');
		
		jQuery('#'+parent_step+' .spread_sub_steps_clk li a').removeClass('active');
		jQuery(this).addClass('active');

		jQuery('#'+parent_step+'.lcltc1 .sub-lesson-step-contant').hide();
		jQuery('#'+parent_step+'.lcltc1 #'+stp).scrollTop(0).show();
		jQuery(".lcltc1-mm").getNiceScroll().show().onResize();
		
	});
	
	/* JS code for adding historical values */
	jQuery(document).on('click', '.add-historical-values', function() {
		var sheet = spread.getActiveSheet();
		sheet.setArray(4,2, [[160,182.04,195.36],[40,39.96,48.84]]);
		sheet.setArray(8,2, [[46,48.8,56.2]]);
		sheet.setArray(11,2, [[80,91,102.6]]);
		sheet.setArray(14,2, [[0.9,1.058823529,1]]);
		sheet.setArray(17,2, [[12,11.94059406,11.82237036]]);
		sheet.setArray(20,2, [[17.04,18.68415725,19.59596]]);
		sheet.setArray(27,2, [[27,74.93052875,123.2910036],[17.26027397,18.85479452,21.40931507],[3.6,4.218,4.3956]]);
		sheet.setArray(32,2, [[4,4.939176471,6.136976471],[150,150,150],[19,19,19],[38,37,38]]);
		sheet.setArray(38,2, [[0.882191781,0.935890411,1.077808219],[7.176, 7.2224, 8.4862],[10, 11.3775, 12.21],[0.322, 0.3904, 0.4215]]);
		sheet.setArray(44,2, [[0,0,0],[200, 198.019802, 196.0592099]]);
		sheet.setArray(48,2, [[40.48008219,90.99650735,143.978177]]);
		
	});
	
});