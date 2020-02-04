jQuery(document).ready(function () {

	jQuery(".lcltc1-mm").niceScroll();

	//var GridID = 'model_master_spreadsheet';
	//jQuery('#'+GridID).ip_CellInput({ valueRAW:'1', range:[{ startRow:1, startCol:1, endRow:3, endCol:1 }] });

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

		var GridID = 'model_master_spreadsheet';

   		//$('#' + GridID).ip_FormatCell({ style: (fn_obj ? style_key+':;' : style_key+':'+fontStyle+';') });

		var parent_step = jQuery('.spread_steps_clk li a.active').data('step');

		var current_sub_step = jQuery('#'+parent_step+' .spread_sub_steps_clk li a.active');

		if(jQuery('#'+parent_step+' .spread_sub_steps_clk li:last-child').find('a').hasClass('active')){

			if(jQuery('.spread_steps_clk li:last-child').find('a').hasClass('active')){
				jQuery('#'+parent_step+' .next_btn').attr('disabled', 'disabled');
				jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
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

		//console.log(current_sub_step_data);


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
	
});
	