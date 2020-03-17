jQuery(document).ready(function () {


	jQuery(".lcltc1-mm").niceScroll();
	// analytics.track("Opened Lesson", {"lesson": "3-Statement Model"});

	toastr.options = {
	  "positionClass": "toast-bottom-right"
	}

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

    /*var lesson_steps;

    jQuery.ajax({
        url: '/get_lesson_steps',
        type: 'POST',
        data: { "_token": jQuery('meta[name="csrf-token"]').attr('content')},
        async: false,
        success: function(response) {

          if(response.status == 1){

    		lesson_steps = response.data;

          }

        },
        error: function (jqXHR, textStatus, errorThrown) {
        },
        complete: function(){
        } 

    }); */


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


		//console.log(lesson_steps);

		//console.log('parent_step='+parent_step);
		//console.log(current_sub_step);
		//console.log('parent_step_number='+parent_step_number);
		//console.log('current_sub_step_number='+current_sub_step_number);

		//console.log(mm_simple_3_statement(jsonString, parent_step, parent_step_number, current_sub_step_number));

		//if(mm_simple_3_statement(jsonString, parent_step, parent_step_number, current_sub_step_number))
		//{

		//var emptyjson = '{"version":"13.0.4","customList":[],"sheetCount":2,"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"columns":[null,{"size":212}],"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0},"Sheet2":{"name":"Sheet2","theme":"Office","data":{"dataTable":{}},"rowHeaderData":{},"colHeaderData":{},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":0,"rowCount":1,"col":0,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"index":1}}}';

		var data = {
				"_token": jQuery('meta[name="csrf-token"]').attr('content'),
				'lesson': jsonString,
				'lesson_id': 1,
				'screen': parent_step_number,
				'step': current_sub_step_number
		};
		
		//analytics.track("Lesson Step", {"lesson": "3-Statement Model", "Parent Step": parent_step_number, "Sub-Step": current_sub_step_number, "Correct": true});
		
        jQuery.ajax({
            url: '/save_spreadsheet',
            type: 'POST',
            data: data,
            async: false,
            beforeSend: function(){},
            success: function(response) {

              if(response.status == 0){
                  toastr.error(response.error_msg);
                  return false;
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
				//analytics.track("Finished Lesson", {"lesson": "3-Statement Model"});
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

	//}


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

	/*var testobj = '';

	//Test Json Object
	var json_obj1 = '{"version":"13.0.4","customList":[],"sheetCount":2,"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{"1":{"1":{"value":"FakeSoftwareCo Income Statement"}}},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"columns":[null,{"size":212}],"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0},"Sheet2":{"name":"Sheet2","theme":"Office","data":{"dataTable":{}},"rowHeaderData":{},"colHeaderData":{},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":0,"rowCount":1,"col":0,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"index":1}}}';
	var json_obj2 = '{"version":"13.0.0","customList":[],"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{"1":{"1":{"value":"FakeSoftwareCo Income Statement"}}},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0}}}';

	json_obj1 = JSON.parse(json_obj1);
	json_obj2 = JSON.parse(json_obj2);



	console.log('before loop');
	console.log(json_obj1['sheets'].Sheet1.data.dataTable[1][1].value);
	console.log('after loop');

	var JSONItems = [];
	$.get( "js/lesson_json/simple3-statement/1-2.ssjson", function( data){
	  JSONItems = JSON.parse(data);
	  console.log('before json read');
	  console.log(JSONItems);
	  console.log('after json read');
	});

	//var array1 = JSON.parse(json_obj1);
	//console.log(array1);

	var sheet = spread.getActiveSheet();
	sheet.setText(1, 1, 'FakeSoftwareCo Income Statement');
	sheet.setValue(2, 2, 10);

	sheet.getCell(2, 2).formatter("0.00_);(0.00)");*/
	//sheet.getText(1, 0) ;
	 //sheet.getValue(1, 1));

	/*spread.options.highlightInvalidData = true;
	//The formula validator is valid if the formula condition returns true.
	var dv = GC.Spread.Sheets.DataValidation.createFormulaValidator("A1>0");
	dv.showInputMessage(true);
	dv.inputMessage("Enter a value greater than 0 in A1.");
	dv.inputTitle("Tip");
	spread.getActiveSheet().setDataValidator(0, 0, dv);*/


    //console.log(sheet.getCell(1, 1).text());
	
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

function mm_simple_3_statement(jsonString, parent_step, parent_step_number, current_sub_step_number){

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

	}


	function mm_simple_3_statement_conditions(datatblData, json_file_obj, parent_step_number, current_sub_step_number){

		var sheet = spread.getActiveSheet();

		switch (parent_step_number+'-'+current_sub_step_number) {

						case '1-2':

							var cell_11 = sheet.getCell(1, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[1] === "undefined" || typeof datatblData[1][1].value === "undefined" || typeof datatblData[1][1].value != "string" || (datatblData[1][1].value.toLowerCase() != json_file_obj[1][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_11);
							    return false;
							} else {
								removeCellBorder(cell_11);
							}

							break;

						case '1-4': 

							var cell_31 = sheet.getCell(3, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][1].value === "undefined" || typeof datatblData[3][1].value != "string" || (datatblData[3][1].value.toLowerCase() != json_file_obj[3][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_31);
							    return false;
							} else {
								removeCellBorder(cell_31);
							}

							break;

						case '1-5':

							var cell_32 = sheet.getCell(3, 2, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][2] === "undefined" || typeof datatblData[3][2].value === "undefined" || !jQuery.isNumeric(datatblData[3][2].value) || (datatblData[3][2].value != json_file_obj[3][2].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_32);
							    return false;
							} else {
								removeCellBorder(cell_32);
							}

							var cell_33 = sheet.getCell(3, 3, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][3] === "undefined" || typeof datatblData[3][3].value === "undefined" || !jQuery.isNumeric(datatblData[3][3].value) || (datatblData[3][3].value != json_file_obj[3][3].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_33);
							    return false;
							} else {
								removeCellBorder(cell_33);
							}

							var cell_34 = sheet.getCell(3, 4, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][4] === "undefined" || typeof datatblData[3][4].value === "undefined" || !jQuery.isNumeric(datatblData[3][4].value) || (datatblData[3][4].value != json_file_obj[3][4].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_34);
							    return false;
							} else {
								removeCellBorder(cell_34);
							}

							var cell_35 = sheet.getCell(3, 5, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][5] === "undefined" || typeof datatblData[3][5].value === "undefined" || !jQuery.isNumeric(datatblData[3][5].value) || (datatblData[3][5].value != json_file_obj[3][5].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_35);
							    return false;
							} else {
								removeCellBorder(cell_35);
							}

							var cell_36 = sheet.getCell(3, 6, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][6] === "undefined" || typeof datatblData[3][6].value === "undefined" || !jQuery.isNumeric(datatblData[3][6].value) || (datatblData[3][6].value != json_file_obj[3][6].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_36);
							    return false;
							} else {
								removeCellBorder(cell_36);
							}

							var cell_37 = sheet.getCell(3, 3, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][7] === "undefined" || typeof datatblData[3][7].value === "undefined" || !jQuery.isNumeric(datatblData[3][7].value) || (datatblData[3][7].value != json_file_obj[3][7].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_37);
							    return false;
							} else {
								removeCellBorder(cell_37);
							}

							var cell_38 = sheet.getCell(3, 8, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][8] === "undefined" || typeof datatblData[3][8].value === "undefined" || !jQuery.isNumeric(datatblData[3][8].value) || (datatblData[3][8].value != json_file_obj[3][8].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_38);
							    return false;
							} else {
								removeCellBorder(cell_38);
							}

							var cell_39 = sheet.getCell(3, 9, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[3] === "undefined" || typeof datatblData[3][9] === "undefined" || typeof datatblData[3][9].value === "undefined" || !jQuery.isNumeric(datatblData[3][9].value) || (datatblData[3][9].value != json_file_obj[3][9].value)) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_39);
							    return false;
							} else {
								removeCellBorder(cell_39);
							}

							break;


						case '2-1':

							var cell_41 = sheet.getCell(4, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[4] === "undefined" || typeof datatblData[4][1] === "undefined" || typeof datatblData[4][1].value != "string" || (datatblData[4][1].value.toLowerCase() != json_file_obj[4][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_41);
							    return false;
							} else {
								removeCellBorder(cell_41);
							}


							var cell_51 = sheet.getCell(5, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[5] === "undefined" || typeof datatblData[5][1] === "undefined" || typeof datatblData[5][1].value != "string" || (datatblData[5][1].value.toLowerCase() != json_file_obj[5][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_51);
							    return false;
							} else {
								removeCellBorder(cell_51);
							}


							var cell_61 = sheet.getCell(6, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[6] === "undefined" || typeof datatblData[6][1] === "undefined" || typeof datatblData[6][1].value != "string" || (datatblData[6][1].value.toLowerCase() != json_file_obj[6][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_61);
							    return false;
							} else {
								removeCellBorder(cell_61);
							}

							break;

						case '2-2':

							var cell_81 = sheet.getCell(8, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[8] === "undefined" || typeof datatblData[8][1] === "undefined" || typeof datatblData[8][1].value != "string" || (datatblData[8][1].value.toLowerCase() != json_file_obj[8][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_81);
							    return false;
							} else {
								removeCellBorder(cell_81);
							}


							var cell_91 = sheet.getCell(9, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[9] === "undefined" || typeof datatblData[9][1] === "undefined" || typeof datatblData[9][1].value != "string" || (datatblData[9][1].value.toLowerCase() != json_file_obj[9][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_91);
							    return false;
							} else {
								removeCellBorder(cell_91);
							}

							break;

						case '2-3':

							var cell_111 = sheet.getCell(11, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[11] === "undefined" || typeof datatblData[11][1] === "undefined" || typeof datatblData[11][1].value != "string" || (datatblData[11][1].value.toLowerCase() != json_file_obj[11][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_111);
							    return false;
							} else {
								removeCellBorder(cell_111);
							}


							var cell_121 = sheet.getCell(12, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[12] === "undefined" || typeof datatblData[12][1] === "undefined" || typeof datatblData[12][1].value != "string" || (datatblData[12][1].value.toLowerCase() != json_file_obj[12][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_121);
							    return false;
							} else {
								removeCellBorder(cell_121);
							}

							break;

						case '2-4':

							var cell_141 = sheet.getCell(14, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[14] === "undefined" || typeof datatblData[14][1] === "undefined" || typeof datatblData[14][1].value != "string" || (datatblData[14][1].value.toLowerCase() != json_file_obj[14][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_141);
							    return false;
							} else {
								removeCellBorder(cell_141);
							}


							var cell_151 = sheet.getCell(15, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[15] === "undefined" || typeof datatblData[15][1] === "undefined" || typeof datatblData[15][1].value != "string" || (datatblData[15][1].value.toLowerCase() != json_file_obj[15][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_151);
							    return false;
							} else {
								removeCellBorder(cell_151);
							}

							break;

						case '2-5':

							var cell_171 = sheet.getCell(17, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[17] === "undefined" || typeof datatblData[17][1] === "undefined" || typeof datatblData[17][1].value != "string" || (datatblData[17][1].value.toLowerCase() != json_file_obj[17][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_171);
							    return false;
							} else {
								removeCellBorder(cell_171);
							}


							var cell_181 = sheet.getCell(18, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[18] === "undefined" || typeof datatblData[18][1] === "undefined" || typeof datatblData[18][1].value != "string" || (datatblData[18][1].value.toLowerCase() != json_file_obj[18][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_181);
							    return false;
							} else {
								removeCellBorder(cell_181);
							}

							var cell_201 = sheet.getCell(20, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[20] === "undefined" || typeof datatblData[20][1] === "undefined" || typeof datatblData[20][1].value != "string" || (datatblData[20][1].value.toLowerCase() != json_file_obj[20][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_201);
							    return false;
							} else {
								removeCellBorder(cell_201);
							}


							var cell_211 = sheet.getCell(21, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[21] === "undefined" || typeof datatblData[21][1] === "undefined" || typeof datatblData[21][1].value != "string" || (datatblData[21][1].value.toLowerCase() != json_file_obj[21][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_211);
							    return false;
							} else {
								removeCellBorder(cell_211);
							}

							break;

						case '3-1':

							var cell_231 = sheet.getCell(23, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[23] === "undefined" || typeof datatblData[23][1] === "undefined" || typeof datatblData[23][1].value != "string" || (datatblData[23][1].value.toLowerCase() != json_file_obj[23][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_231);
							    return false;
							} else {
								removeCellBorder(cell_231);
							}

							break;


						case '3-2':

							var cell_271 = sheet.getCell(27, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[27] === "undefined" || typeof datatblData[27][1] === "undefined" || typeof datatblData[27][1].value != "string" || (datatblData[27][1].value.toLowerCase() != json_file_obj[27][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_271);
							    return false;
							} else {
								removeCellBorder(cell_271);
							}


							var cell_281 = sheet.getCell(28, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[28] === "undefined" || typeof datatblData[28][1] === "undefined" || typeof datatblData[28][1].value != "string" || (datatblData[28][1].value.toLowerCase() != json_file_obj[28][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_281);
							    return false;
							} else {
								removeCellBorder(cell_281);
							}


							var cell_291 = sheet.getCell(29, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[29] === "undefined" || typeof datatblData[29][1] === "undefined" || typeof datatblData[29][1].value != "string" || (datatblData[29][1].value.toLowerCase() != json_file_obj[29][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_291);
							    return false;
							} else {
								removeCellBorder(cell_291);
							}


							var cell_301 = sheet.getCell(30, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[30] === "undefined" || typeof datatblData[30][1] === "undefined" || typeof datatblData[30][1].value != "string" || (datatblData[30][1].value.toLowerCase() != json_file_obj[30][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_301);
							    return false;
							} else {
								removeCellBorder(cell_301);
							}

							break;


						case '3-3':


							var cell_321 = sheet.getCell(32, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[32] === "undefined" || typeof datatblData[32][1] === "undefined" || typeof datatblData[32][1].value != "string" || (datatblData[32][1].value.toLowerCase() != json_file_obj[32][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_321);
							    return false;
							} else {
								removeCellBorder(cell_321);
							}

							var cell_331 = sheet.getCell(33, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[33] === "undefined" || typeof datatblData[33][1] === "undefined" || typeof datatblData[33][1].value != "string" || (datatblData[33][1].value.toLowerCase() != json_file_obj[33][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_331);
							    return false;
							} else {
								removeCellBorder(cell_331);
							}


							var cell_341 = sheet.getCell(34, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[34] === "undefined" || typeof datatblData[34][1] === "undefined" || typeof datatblData[34][1].value != "string" || (datatblData[34][1].value.toLowerCase() != json_file_obj[34][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_341);
							    return false;
							} else {
								removeCellBorder(cell_341);
							}


							var cell_351 = sheet.getCell(35, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[35] === "undefined" || typeof datatblData[35][1] === "undefined" || typeof datatblData[35][1].value != "string" || (datatblData[35][1].value.toLowerCase() != json_file_obj[35][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_351);
							    return false;
							} else {
								removeCellBorder(cell_351);
							}


							var cell_361 = sheet.getCell(36, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[36] === "undefined" || typeof datatblData[36][1] === "undefined" || typeof datatblData[36][1].value != "string" || (datatblData[36][1].value.toLowerCase() != json_file_obj[36][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_361);
							    return false;
							} else {
								removeCellBorder(cell_361);
							}


							break;


						case '3-4':

							var cell_381 = sheet.getCell(38, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[38] === "undefined" || typeof datatblData[38][1] === "undefined" || typeof datatblData[38][1].value != "string" || (datatblData[38][1].value.toLowerCase() != json_file_obj[38][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_381);
							    return false;
							} else {
								removeCellBorder(cell_381);
							}


							var cell_391 = sheet.getCell(39, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[39] === "undefined" || typeof datatblData[39][1] === "undefined" || typeof datatblData[39][1].value != "string" || (datatblData[39][1].value.toLowerCase() != json_file_obj[39][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_391);
							    return false;
							} else {
								removeCellBorder(cell_391);
							}


							var cell_401 = sheet.getCell(40, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[40] === "undefined" || typeof datatblData[40][1] === "undefined" || typeof datatblData[40][1].value != "string" || (datatblData[40][1].value.toLowerCase() != json_file_obj[40][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_401);
							    return false;
							} else {
								removeCellBorder(cell_401);
							}


							var cell_411 = sheet.getCell(41, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[41] === "undefined" || typeof datatblData[41][1] === "undefined" || typeof datatblData[41][1].value != "string" || (datatblData[41][1].value.toLowerCase() != json_file_obj[41][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_411);
							    return false;
							} else {
								removeCellBorder(cell_411);
							}



							var cell_421 = sheet.getCell(42, 1, GC.Spread.Sheets.SheetArea.viewport);
							if (typeof datatblData[42] === "undefined" || typeof datatblData[42][1] === "undefined" || typeof datatblData[42][1].value != "string" || (datatblData[42][1].value.toLowerCase() != json_file_obj[42][1].value.toLowerCase())) {
							    toastr.error('One of the cells is not showing the expected value. Double check the cells with red borders to ensure they match the instructions');
							    addCellBorder(cell_421);
							    return false;
							} else {
								removeCellBorder(cell_421);
							}



							break;

						default:
							//console.log('default case is called!');
			}

			return true;

	}


		/*spread.options.highlightInvalidData = true;
		var dv = GC.Spread.Sheets.DataValidation.createFormulaValidator("A1=Test");
		dv.showInputMessage(true);
		dv.inputMessage("Enter a value greater than 0 in A1.");
		dv.inputTitle("Tip");
		dv.showErrorMessage(true);
		dv.errorMessage("Enter a value greater than 0 in A1.");
		spread.getActiveSheet().setDataValidator(1, 1, dv);*/


		//This example validates the cell data.
		/*spread.options.highlightInvalidData = true;
		var dv = new GC.Spread.Sheets.DataValidation.createTextLengthValidator(GC.Spread.Sheets.ConditionalFormatting.ComparisonOperators.greaterThan, 3);
		dv.showInputMessage(true);
		dv.inputMessage("Number of characters must be greater than 3.");
		dv.inputTitle("tip");
		spread.getActiveSheet().setDataValidator(0, 0, 1, 1, dv, GC.Spread.Sheets.SheetArea.viewport);*/
		//spread.getActiveSheet().setValue(0, 0, "");

		/*var dv1 = new GC.Spread.Sheets.DataValidation.createListValidator('Fruit,Vegetable,Food');
		dv1.highlightStyle({
		    type: GC.Spread.Sheets.DataValidation.HighlightType.circle,
		    color: 'red'
		});
		var sheet = spread.getActiveSheet()
		dv1.ignoreBlank(false);
		sheet.setDataValidator(1, 1, dv1);
		spread.options.highlightInvalidData = true;*/

			/*console.log(datatblData[1][1]);
		    for (var k in datatblData) {
		    	console.log(json_file_obj[k][1]);
			console.log(datatblData[k][1]);
		}*/

		//Test Json Object
		/*var json_obj1 = '{"version":"13.0.4","customList":[],"sheetCount":2,"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{"1":{"1":{"value":"FakeSoftwareCo Income Statement"}}},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"columns":[null,{"size":212}],"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0},"Sheet2":{"name":"Sheet2","theme":"Office","data":{"dataTable":{}},"rowHeaderData":{},"colHeaderData":{},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":0,"rowCount":1,"col":0,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"index":1}}}';
		var json_obj2 = '{"version":"13.0.0","customList":[],"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{"1":{"1":{"value":"FakeSoftwareCo Income Statement"}}},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0}}}';

		json_obj1 = JSON.parse(json_obj1);
		json_obj2 = JSON.parse(json_obj2);

	*/


function addCellBorder(cell) {
   cell.borderLeft(new GC.Spread.Sheets.LineBorder("Red", GC.Spread.Sheets.LineStyle.thick));
   cell.borderTop(new GC.Spread.Sheets.LineBorder("Red", GC.Spread.Sheets.LineStyle.thick));
   cell.borderRight(new GC.Spread.Sheets.LineBorder("Red", GC.Spread.Sheets.LineStyle.thick));
   cell.borderBottom(new GC.Spread.Sheets.LineBorder("Red", GC.Spread.Sheets.LineStyle.thick));
}

function removeCellBorder(cell) {
	cell.borderLeft(new GC.Spread.Sheets.LineBorder("Transparent", GC.Spread.Sheets.LineStyle.none));
   cell.borderTop(new GC.Spread.Sheets.LineBorder("Transparent", GC.Spread.Sheets.LineStyle.none));
   cell.borderRight(new GC.Spread.Sheets.LineBorder("Transparent", GC.Spread.Sheets.LineStyle.none));
   cell.borderBottom(new GC.Spread.Sheets.LineBorder("Transparent", GC.Spread.Sheets.LineStyle.none));
}