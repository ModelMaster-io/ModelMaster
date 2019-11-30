jQuery(document).ready(function () {
	
	jQuery(document).on('click', '.spread_steps_clk li a', function() {
		var stp = jQuery(this).data('step');
		jQuery('.spread_steps_clk li a').removeClass('active');
		jQuery(this).addClass('active');
	
		jQuery('.lesson-contant-left-tab-contant .lcltc1').hide();
		jQuery('.lesson-contant-left-tab-contant #'+stp).show();
	});
	
	if(jQuery('.spread_steps_clk li:first-child a').hasClass('active')){
		jQuery('.previous-btn').addClass('disabled');
	}
	
	if(jQuery('.spread_steps_clk li:last-child a').hasClass('active')){
		jQuery('.next-btn').addClass('disabled');
	}
	
	jQuery(document).on('click', '.next-btn', function() {
	
		if(jQuery('.spread_steps_clk li:last-child').prev('li').find('a').hasClass('active')){
			jQuery('.next-btn').addClass('disabled');
			jQuery('.previous-btn').removeClass('disabled');
		} else {
			jQuery('.next-btn').removeClass('disabled');
			jQuery('.previous-btn').removeClass('disabled');
		}
	
		var curr_active = jQuery('.spread_steps_clk li .active');
		jQuery(curr_active).closest('li').next('li').find('a').trigger('click');
	});
	
	
	jQuery(document).on('click', '.previous-btn', function() {
		if(jQuery('.spread_steps_clk li:nth-child(2) a').hasClass('active')){
			jQuery('.previous-btn').addClass('disabled');
			jQuery('.next-btn').removeClass('disabled');
		} else {
			jQuery('.previous-btn').removeClass('disabled');
			jQuery('.next-btn').removeClass('disabled');
		}
	
		var curr_active = jQuery('.spread_steps_clk li .active');
		jQuery(curr_active).closest('li').prev('li').find('a').trigger('click');
	});
	
	
	
		/* JS code for spreadsheet */
		$('#model_master_spreadsheet').ip_Grid({ rows: 10000,  cols: 26 });
	
	});
	