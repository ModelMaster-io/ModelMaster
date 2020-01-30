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


		//console.log(current_sub_step);

		switch(current_sub_step) {
		  case 'sub1-step1':
	    	// code block
	    	console.log('first step is called...');
		    break;

		  case 'sub1-step2':
		    console.log('second step is called...');
		  break;

		  default:
		    // code block
		}


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

	
	
	/* JS code for spreadsheet */
	$('#model_master_spreadsheet').ip_Grid({ rows: 10000,  cols: 26 });

	// Trigger action when the contexmenu is about to be shown
	jQuery('.gridContainer').bind("contextmenu", function (event) {
		
		// Avoid the real one
		event.preventDefault();

		var x = jQuery('.gridContainer').offset();
		// Show contextmenu

		menuWidth = jQuery('.spreadsheet-context-menu').width();
    	menuHeight = jQuery('.spreadsheet-context-menu').height();

	    var left = 0;
	    var top = 0;

		//positionMenu(event);
		//jQuery(".spreadsheet-context-menu").show();

		
		windowWidth = window.innerWidth;
	    windowHeight = window.innerHeight;

	    if ( (windowWidth - event.pageX) < menuWidth ) {
	      left = windowWidth - (menuWidth + 35);
	    } else {
	      left = event.pageX;
	    }

	    if ( (windowHeight - event.pageY) < menuHeight ) {
	      top = windowHeight - (menuHeight + 35);
	    } else {
	      top = event.pageY;
	    }

		jQuery(".spreadsheet-context-menu").finish().toggle(100).
		css({
			top: (top - x.top) + 'px',
			left: (left - x.left) + 'px'
		});

		// jQuery(".spreadsheet-context-menu").show();
		
		// jQuery(".spreadsheet-context-menu").css({
		// 	top: top + "px",
		// 	left: left + "px"
		// });


		
	});

	setTimeout(function() {
		/* JS code for color picker */
		const pickr = Pickr.create({
			el: '.color-picker',
			theme: 'nano', // or 'monolith', or 'nano'
			appClass: 'rgfnclrcls',
			swatches: [
				'rgba(244, 67, 54, 1)',
				'rgba(233, 30, 99, 0.95)',
				'rgba(156, 39, 176, 0.9)',
				'rgba(103, 58, 183, 0.85)',
				'rgba(63, 81, 181, 0.8)',
				'rgba(33, 150, 243, 0.75)',
				'rgba(255, 255, 255, 1)',
				'rgba(0, 188, 212, 0.7)',
				'rgba(0, 150, 136, 0.75)',
				'rgba(76, 175, 80, 0.8)',
				'rgba(139, 195, 74, 0.85)',
				'rgba(205, 220, 57, 0.9)',
				'rgba(255, 235, 59, 0.95)',
				'rgba(255, 193, 7, 1)'
			],
		
			components: {
		
				// Main components
				preview: true,
				opacity: true,
				hue: true,
		
				// Input / output Options
				interaction: {
					hex: false,
					rgba: false,
					hsla: false,
					hsva: false,
					cmyk: false,
					input: true,
					clear: false,
					save: false
				}
			}
		});


		const bg_pickr = Pickr.create({
			el: '.bg-color-picker',
			theme: 'nano', // or 'monolith', or 'nano'
			appClass: 'rgbgcellcls',
			swatches: [
				'rgba(244, 67, 54, 1)',
				'rgba(233, 30, 99, 0.95)',
				'rgba(156, 39, 176, 0.9)',
				'rgba(103, 58, 183, 0.85)',
				'rgba(63, 81, 181, 0.8)',
				'rgba(33, 150, 243, 0.75)',
				'rgba(255, 255, 255, 1)',
				'rgba(0, 188, 212, 0.7)',
				'rgba(0, 150, 136, 0.75)',
				'rgba(76, 175, 80, 0.8)',
				'rgba(139, 195, 74, 0.85)',
				'rgba(205, 220, 57, 0.9)',
				'rgba(255, 235, 59, 0.95)',
				'rgba(255, 193, 7, 1)'
			],
		
			components: {
		
				// Main components
				preview: true,
				opacity: true,
				hue: true,
		
				// Input / output Options
				interaction: {
					hex: false,
					rgba: false,
					hsla: false,
					hsva: false,
					cmyk: false,
					input: true,
					clear: false,
					save: false
				}
			}
		});
		
		pickr.on('change', (color, instance) => {
			var fntclr = $('.rgfnclrcls').find('.pcr-result').val();
			var GridID = 'model_master_spreadsheet';
			var formatObject = ip_EnabledFormats(GridID);
			$('#' + GridID).ip_FormatCell({ style: (formatObject.color ? 'color:;' : 'color:'+fntclr+';') });
		});

		bg_pickr.on('change', (color, instance) => {
			var fntbgclr = $('.rgbgcellcls').find('.pcr-result').val();
			var GridID = 'model_master_spreadsheet';
			var formatObject = ip_EnabledFormats(GridID);
			$('#' + GridID).ip_FormatCell({ style: (formatObject.backgroundcolor ? 'background-color:;' : 'background-color:'+fntbgclr+';') });
			var brdclr = (fntbgclr == '#FFFFFF') ? '#e5e5e5' : 'transparent';
			$('#' + GridID).ip_FormatCell({ style: (formatObject.bordercolor ? 'border-color:;' : 'border-color:'+brdclr+';') });
		});

	}, 500);


	// If the document is clicked somewhere
	jQuery('.gridContainer').bind("mousedown", function (e) {
		
		// If the clicked element is not the menu
		if (!jQuery(e.target).parents(".spreadsheet-context-menu").length > 0) {
			
			// Hide it
			jQuery(".spreadsheet-context-menu").hide(100);
		}
	});
	
});
	