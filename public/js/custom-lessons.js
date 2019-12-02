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

	jQuery.contextMenu({
		selector: '.ip_grid_cell', 
		callback: function(key, options) {
			var m = "clicked: " + key;
			window.console && console.log(m) || alert(m); 
		},
		items: {
			"edit": {name: "Edit", icon: "edit"},
			"cut": {name: "Cut", icon: "cut"},
		   copy: {name: "Copy", icon: "copy"},
			"paste": {name: "Paste", icon: "paste"},
			"delete": {name: "Delete", icon: "delete"},
			"sep1": "---------",
			"quit": {name: "Quit", icon: function(){
				return 'context-menu-icon context-menu-icon-quit';
			}}
		}
	});

	// jQuery('.ip_grid_cell').on('click', function(e){
	// 		console.log('clicked', this);
	// });
	
	
});
	