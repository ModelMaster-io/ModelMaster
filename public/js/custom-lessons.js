jQuery(document).ready(function () {

	var lessonid = jQuery('.lessonid').val();

	analytics.track("Start a lesson", {"lesson": lessonid});

	/*Remove local storage data when lesson page load*/
	localStorage.removeItem("mm_forward_step_recent_data");
    localStorage.removeItem("mm_user_id");
    localStorage.removeItem("mm_lesson_id");
    localStorage.removeItem("mm_has_backward");

	toastr.options = {
	  "positionClass": "toast-bottom-right"
	}

   var lesson_steps;

    jQuery.ajax({
        url: '/get_lesson_steps',
        type: 'POST',
        data: { 
        	"_token": jQuery('meta[name="csrf-token"]').attr('content'),
        	"lesson_id": lessonid
    	},
        async: false,
        success: function(response) {

          if(response.status == 1){

    		jQuery('.lesson-contant-left-tab-contant').html(response.stepsHtml);

    		jQuery(".lcltc1-mm").niceScroll();

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


          }

        },
        error: function (jqXHR, textStatus, errorThrown) {
        },
        complete: function(){
        } 

    });


    setTimeout(function() {

		var curr = jQuery(this);

		var data = {
			"_token": jQuery('meta[name="csrf-token"]').attr('content'),
			"lesson_id": lessonid
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
		
		var current_sub_step_number = parseInt(current_sub_step[0].firstChild.data);

		var is_backward_step = 0;

		is_backward_step = localStorage.getItem("mm_has_backward");

		//var emptyjson = '{"version":"13.0.4","customList":[],"sheetCount":2,"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"columns":[null,{"size":212}],"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0},"Sheet2":{"name":"Sheet2","theme":"Office","data":{"dataTable":{}},"rowHeaderData":{},"colHeaderData":{},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":0,"rowCount":1,"col":0,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"index":1}}}';

		var data = {
				"_token": jQuery('meta[name="csrf-token"]').attr('content'),
				'lesson': jsonString,
				'lesson_id': lessonid,
				'screen': parent_step_number,
				'step': current_sub_step_number,
				'is_backward_step': is_backward_step
		};
		
        jQuery.ajax({
            url: '/save_spreadsheet',
            type: 'POST',
            data: data,
            async: false,
            beforeSend: function(){},
            success: function(response) {

          	if(response.status == 2){

          		toastr.success(response.success);
          		jQuery('#'+parent_step+' .next_btn').attr('disabled', 'disabled');
          		jQuery('#'+parent_step+' .next_btn').css({'pointer-events': 'none','background': '#343642'});
          	
          	} else {

              var sheet = spread.getActiveSheet();
              //var instance = new GC.Spread.Sheets.Comments.CommentManager(sheet);
              var rgt_cells = JSON.parse(response.right_cells);

              if(rgt_cells.length > 0){

              		var correct_cells;
              		
              		jQuery.each(rgt_cells, function(ind, rg_value) {

						  jQuery.each(rg_value, function(rw, cl) {

								sheet.comments.remove(parseInt(rw), cl);
								//sheet.comments.add(parseInt(rw), cl, response.error_msg);
					  			//correct_cells = sheet.getCell(parseInt(rw), cl, GC.Spread.Sheets.SheetArea.viewport);
						  		//correct_cells.setBorder(new GC.Spread.Sheets.LineBorder("Transparent", GC.Spread.Sheets.LineStyle.none), { all:true });

						  });
					  
					});

              }


              if(response.status == 0){

              	analytics.track("Lesson Step", {"lesson": lessonid, "Screen": parent_step_number, "Step": current_sub_step_number, "Correct": false});

          	  	var wrong_cells = JSON.parse(response.wrong_cells);

          	  	var error_cells;

          	  	jQuery.each(wrong_cells, function(index, rc_value) {

					  jQuery.each(rc_value, function(rw, cl) {
					  	var comment = sheet.comments.add(parseInt(rw), cl, response.error_msg);
					  	//comment.backColor("red");
					  	//comment.foreColor("white");
					  	comment.displayMode(GC.Spread.Sheets.Comments.DisplayMode.hoverShown);
				  			//error_cells = sheet.getCell(parseInt(rw), cl, GC.Spread.Sheets.SheetArea.viewport);
							//error_cells.setBorder(new GC.Spread.Sheets.LineBorder("Red", GC.Spread.Sheets.LineStyle.thick), { all:true });
			  				//error_cells.setBorder(new GC.Spread.Sheets.LineBorder("Red", GC.Spread.Sheets.LineStyle.double), { all:true });
			  			return false;

					  });
				  
				});

                  toastr.error(response.error_msg);
                  return false;

	              } else {

	              		analytics.track("Lesson Step", {"lesson": lessonid, "Parent Step": parent_step_number, "Sub-Step": current_sub_step_number, "Correct": true});


	          			if(jQuery('#'+parent_step+' .spread_sub_steps_clk li:last-child').find('a').hasClass('active')){

						if(jQuery('.spread_steps_clk li:last-child').find('a').hasClass('active')){
							jQuery('#'+parent_step+' .next_btn').attr('disabled', 'disabled');
							jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
							analytics.track("Finished Lesson", {"lesson": lessonid});
						} else {
							jQuery('.spread_steps_clk li .active').closest('li').next('li').find('a').trigger('click');
						}
					
						} else {
							jQuery('#'+parent_step+' .next_btn').removeAttr('disabled');
							jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
						}

						var spread1 = GC.Spread.Sheets.findControl(document.getElementById('ss'));

						if(response.status == 3){
			          		
		          			var spread1 = GC.Spread.Sheets.findControl(document.getElementById('ss'));
		          			spread1.fromJSON(JSON.parse(localStorage.getItem("mm_forward_step_recent_data")));

			          	} else {
			          		if(response.dss != ''){
		          				spread1.fromJSON(JSON.parse(response['dss']));
							} else if(response.prev_lsn != ''){
			          			spread1.fromJSON(JSON.parse(response['prev_lsn']));
							}
			          	}

			          	if(localStorage.getItem("mm_has_backward") == 1){

			          		jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
          					jQuery('#'+parent_step+' .previous_btn').css({'pointer-events': 'inherit','background': '#29b473'});

			          	}

			          	/*Remove local storage data when lesson page load*/
						localStorage.removeItem("mm_forward_step_recent_data");
					    localStorage.removeItem("mm_user_id");
					    localStorage.removeItem("mm_lesson_id");
					    localStorage.removeItem("mm_has_backward");

						jQuery(current_sub_step).closest('li').next('li').find('a').trigger('click');

						jQuery(".lcltc1-mm").getNiceScroll().show().onResize();

						var current_sub_step_data = jQuery('#'+parent_step+' .spread_sub_steps_clk li a.active').data('step');

	              }

	          }

            },
            error: function (jqXHR, textStatus, errorThrown) {
                jQuery('.spread_loader').hide();
                curr.prop('disabled', false);
            },
            complete: function(){
            } 

        });


	});
	
	
	jQuery(document).on('click', '.previous_btn', function() {

		var curr = jQuery(this);

		var serializationOption = {
	       ignoreStyle: false, // indicate to ignore the style when convert workbook to json, default value is false
	       ignoreFormula: false, // indicate to ignore the formula when convert workbook to json, default value is false
	       rowHeadersAsFrozenColumns: false, // indicate to treat the row headers as frozen columns when convert workbook to json, default value is false
	       columnHeadersAsFrozenRows: false // indicate to treat the column headers as frozen rows when convert workbook to json, default value is false
	    };

	    var spread1 = GC.Spread.Sheets.findControl(document.getElementById('ss'));
	    var jsonString = JSON.stringify(spread1.toJSON(serializationOption));

	    localStorage.setItem("mm_forward_step_recent_data", jsonString);
	    localStorage.setItem("mm_user_id", user_id);
	    localStorage.setItem("mm_lesson_id", lessonid);
	    localStorage.setItem("mm_has_backward", 1);

		var parent_step = jQuery('.spread_steps_clk li a.active').data('step');

		var current_sub_step = jQuery('#'+parent_step+' .spread_sub_steps_clk li a.active');

		var parent_step_number = parseInt(parent_step.split("step").pop());
		
		var current_sub_step_number = parseInt(current_sub_step.text());

		var dsbl = parent_step_number;

		/* Commented code working on */
		var l_data = {
				"_token": jQuery('meta[name="csrf-token"]').attr('content'),
				'lesson_id': lessonid,
				'screen': parent_step_number,
				'step': current_sub_step_number
		};

		jQuery.ajax({
            url: '/get_user_backward_step',
            type: 'POST',
            data: l_data,
            async: false,
            beforeSend: function(){},
            success: function(res) {

            	var spread1 = GC.Spread.Sheets.findControl(document.getElementById('ss'));
            	if(res.status == 1){

            		spread1.fromJSON(JSON.parse(res.prevSpreadsheetData));

					if(jQuery('#'+parent_step+' .spread_sub_steps_clk li:nth-child(1)').find('a').hasClass('active')){

						if(jQuery('.spread_steps_clk li:nth-child(1)').find('a').hasClass('active')){
							jQuery('#'+parent_step+' .previous_btn').attr('disabled', 'disabled');
							jQuery('#'+parent_step+' .next_btn').removeAttr('disabled');
						} else {
							dsbl = dsbl-1;
							//prev_sec_stp = jQuery('#'+parent_step).prev('.lcltc1').find('.spread_sub_steps_clk li:last-child').find('a').data('step');
							jQuery('.spread_steps_clk li .active').closest('li').prev('li').find('a').trigger('click');
							jQuery('#'+parent_step).prev('.lcltc1').find('.spread_sub_steps_clk li:last-child').find('a').trigger('click');
						}

					} else {
						jQuery('#'+parent_step+' .next_btn').removeAttr('disabled');
						jQuery('#'+parent_step+' .previous_btn').removeAttr('disabled');
					}

					//prev_sec_stp = jQuery(current_sub_step).closest('li').prev('li').find('a').data('step');
					jQuery(current_sub_step).closest('li').prev('li').find('a').trigger('click');


					jQuery('#step'+dsbl+' .previous_btn').attr('disabled', 'disabled');
          			jQuery('#step'+dsbl+' .previous_btn').css({'pointer-events': 'none','background': '#343642'});


					jQuery(".lcltc1-mm").getNiceScroll().show().onResize();

            	} else if(res.status == 0){

            		toastr.error(response.msg);

            	}

            },
            error: function (jqXHR, textStatus, errorThrown) {
            },
            complete: function(){
            }

        });

        //var prev_sec_stp = '';

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

	/*spread.options.highlightInvalidData = true;
	//The formula validator is valid if the formula condition returns true.
	var dv = GC.Spread.Sheets.DataValidation.createFormulaValidator("A1>0");
	dv.showInputMessage(true);
	dv.inputMessage("Enter a value greater than 0 in A1.");
	dv.inputTitle("Tip");
	spread.getActiveSheet().setDataValidator(0, 0, dv);*/
	
	/* JS code for adding historical values */
	jQuery(document).on('click', '.add-historical-values', function() {

		var parent_step = jQuery('.spread_steps_clk li a.active').data('step');

		var current_sub_step = jQuery('#'+parent_step+' .spread_sub_steps_clk li a.active');
		
		var parent_step_number = parseInt(parent_step.split("step").pop());
		
		var current_sub_step_number = parseInt(current_sub_step.text());

		//var emptyjson = '{"version":"13.0.4","customList":[],"sheetCount":2,"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"columns":[null,{"size":212}],"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0},"Sheet2":{"name":"Sheet2","theme":"Office","data":{"dataTable":{}},"rowHeaderData":{},"colHeaderData":{},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":0,"rowCount":1,"col":0,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"index":1}}}';

		var data = {
				"_token": jQuery('meta[name="csrf-token"]').attr('content'),
				'lesson_id': lessonid,
				'screen': parent_step_number,
				'step': current_sub_step_number
		};

		jQuery.ajax({
		    type: "POST",
		    url: '/get_historical_data',
		    data: data,
		    async: false,
		    dataType: "json",
		    success: function(historical_obj) {
		    var sheet = spread.getActiveSheet();

	    	if(historical_obj.status == 1){

    			//console.log(historical_obj.hData.automatic_values);

	    			if(historical_obj.hData != ''){

		    			var hstdata = historical_obj.hData;

		    			var automaic_data = JSON.parse(hstdata);

		    			jQuery.each(automaic_data, function(row, value) {

							  jQuery.each(value, function(col, data) {

							  		sheet.setArray(parseInt(row), parseInt(col), automaic_data[row][col]);

							  });
						  
						});



			    	}

			    }

		    },

		    error: function(){}
		});

		/*var sheet = spread.getActiveSheet();
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
		sheet.setArray(48,2, [[40.48008219,90.99650735,143.978177]]);*/
		
	});
	
});

/*function mm_simple_3_statement(jsonString, parent_step, parent_step_number, current_sub_step_number){

		var json_user_obj = JSON.parse(jsonString);

		var datatblData = json_user_obj['sheets'].Sheet1.data.dataTable;

		var json_f_obj = [];

		var flname = parent_step_number+'-'+current_sub_step_number+'.ssjson';

		var json_file_obj;

			jQuery.ajax({
			    type: "Get",
			    url: window.location.origin+"/js/lesson_json/simple3-statement/"+flname,
			    async: false,
			    dataType: "json",
			    success: function(json_f_obj) {
			    	//json_f_obj = JSON.parse(json_f_obj);
			    	json_file_obj = json_f_obj['sheets'].Sheet1.data.dataTable;

			    },
			    error: function(){}
			});

			if (typeof json_file_obj != "undefined") {	
				return mm_simple_3_statement_conditions(datatblData, json_file_obj, parent_step_number, current_sub_step_number);
			}

	}*/
