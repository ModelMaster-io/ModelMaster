jQuery(document).ready(function () {


	jQuery(".lcltc1-mm").niceScroll();
	// analytics.track("Opened Lesson", {"lesson": "3-Statement Model"});

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
		});*/


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

		//console.log('parent_step='+parent_step);
		//console.log(current_sub_step);
		//console.log('parent_step_number='+parent_step_number);
		//console.log('current_sub_step_number='+current_sub_step_number);

		if(checkUserCorrectValue(jsonString, parent_step, parent_step_number, current_sub_step_number))
		{



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


/*function diff_jsonstep(obj1, obj2) {
    const result = {};
    if (Object.is(obj1, obj2)) {
   			return undefined;
    }
    if (!obj2 || typeof obj2 !== 'object') {
    		return obj2;
    }
    Object.keys(obj1 || {}).concat(Object.keys(obj2 || {})).forEach(key => {
        if(obj2[key] !== obj1[key] && !Object.is(obj1[key], obj2[key])) {
		        result[key] = obj2[key];
        }
        if(typeof obj2[key] === 'object' && typeof obj1[key] === 'object') {
        		const value = diff_jsonstep(obj1[key], obj2[key]);
            if (value !== undefined) {
            		result[key] = value;
            }
        }
    });
    return result;
}
*/

function checkUserCorrectValue(jsonString, parent_step, parent_step_number, current_sub_step_number){

		console.log(jsonString);

		console.log('parent_step='+parent_step);
		console.log('parent_step_number='+parent_step_number);
		console.log('current_sub_step_number='+current_sub_step_number);

		var json_user_obj = JSON.parse(jsonString);

		var datatblData = json_user_obj['sheets'].Sheet1.data.dataTable;

		var json_f_obj = [];

		$.get( "js/lesson_json/simple3-statement/1-2.ssjson", function(data){
 		    json_f_obj = JSON.parse(data);

 		    var json_file_obj = json_f_obj['sheets'].Sheet1.data.dataTable;

			// console.log(json_file_obj);

 			/*if (typeof datatblData === "undefined") {
			    toastr.error('In cell B2, type "FakeSoftwareCo Income Statement"');
			    return false;
			} else if (datatblData[1][1].value.toLowerCase() != json_file_obj[1][1].value.toLowerCase()) {
				toastr.error('Please type "FakeSoftwareCo Income Statement" in cell B2');
				return false;
			}*/


			/*var dv = GcSpread.Sheets.DefaultDataValidator.createNumberValidator(GcSpread.Sheets.ComparisonOperator.Between, "5", "20", true);  
			dv.showInputMessage = true;  
			dv.inputMessage = "Value must be between 5 and 20.";  
			dv.inputTitle = "tip";  
			activeSheet.setDataValidator(1, 1, dv); 
			spread.highlightInvalidData(true);   */
			
			/*var sheet = spread.getActiveSheet();
			//var dv = GC.Spread.Sheets.DataValidation.DefaultDataValidator(B2='FakeSoftwareCo Income Statement');
			var dv = GC.Spread.Sheets.DataValidation.DefaultDataValidator('A1>0');
			dv.showInputMessage(true);
			dv.inputMessage('In cell B2, type "FakeSoftwareCo Income Statement"');
			dv.inputTitle("Tip");
			sheet.getActiveSheet().setDataValidator(1, 1, dv);
			sheet.highlightInvalidData(true);*/

			spread.options.highlightInvalidData = true;
			var dv = GC.Spread.Sheets.DataValidation.createFormulaValidator("A1=Test");
			dv.showInputMessage(true);
			dv.inputMessage("Enter a value greater than 0 in A1.");
			dv.inputTitle("Tip");
			dv.showErrorMessage(true);
			dv.errorMessage("Enter a value greater than 0 in A1.");
			spread.getActiveSheet().setDataValidator(1, 1, dv);


			/*spread.getActiveSheet().setDataValidator(2, 2, createTextLengthValidator(0));
			
			function createTextLengthValidator(length) {
			  var dv2 = GC.Spread.Sheets.DataValidation.createTextLengthValidator(GC.Spread.Sheets.ConditionalFormatting.ComparisonOperators.greaterThan, length);
			  dv2.errorMessage('Please enter the value in cell');
			  dv2.showInputMessage(true);
			  dv2.inputTitle("tip");	
			  return dv2;
			}*/


			spread.options.highlightInvalidData = true ;
			var dv3 = GC.Spread.Sheets.DataValidation.createTextLengthValidator(GC.Spread.Sheets.ConditionalFormatting.ComparisonOperators.equalsTo, "My Test");
			dv3.showInputMessage ( true );
			dv3.inputMessage ( "Enter the proper value in cell" );
			dv3.inputTitle ( "Tip" );
			spread.getActiveSheet().setDataValidator(3, 3, dv3);

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

		  	//console.log(json_file_obj);
		});

		

		//jQuery.each(json_user_obj['sheets'].Sheet1.data.dataTable, function (i) {
		    /*jQuery.each(json_user_obj['sheets'].Sheet1.data.dataTable, function (element) {
	        	console.log(element);
		    });*/

		    //console.log(i);
		//});

		//Test Json Object
		/*var json_obj1 = '{"version":"13.0.4","customList":[],"sheetCount":2,"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{"1":{"1":{"value":"FakeSoftwareCo Income Statement"}}},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"columns":[null,{"size":212}],"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0},"Sheet2":{"name":"Sheet2","theme":"Office","data":{"dataTable":{}},"rowHeaderData":{},"colHeaderData":{},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":0,"rowCount":1,"col":0,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"index":1}}}';
		var json_obj2 = '{"version":"13.0.0","customList":[],"sheets":{"Sheet1":{"name":"Sheet1","activeRow":1,"activeCol":1,"theme":"Office","data":{"dataTable":{"1":{"1":{"value":"FakeSoftwareCo Income Statement"}}},"defaultDataNode":{"style":{"themeFont":"Body"}}},"rowHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"colHeaderData":{"defaultDataNode":{"style":{"themeFont":"Body"}}},"leftCellIndex":0,"topCellIndex":0,"selections":{"0":{"row":1,"rowCount":1,"col":1,"colCount":1},"length":1},"cellStates":{},"outlineColumnOptions":{},"autoMergeRangeInfos":[],"printInfo":{"paperSize":{"width":850,"height":1100,"kind":1}},"index":0}}}';

		json_obj1 = JSON.parse(json_obj1);
		json_obj2 = JSON.parse(json_obj2);




		//console.log('before loop');
		console.log(json_obj1['sheets'].Sheet1.data.dataTable[1][1].value);
		//console.log('after loop');

		var JSONItems = [];
		$.get( "js/lesson_json/simple3-statement/1-2.ssjson", function( data){
		  JSONItems = JSON.parse(data);
		  //console.log('before json read');
		  console.log(JSONItems);
		  //console.log('after json read');
		});*/


	return true;

}