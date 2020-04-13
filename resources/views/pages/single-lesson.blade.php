@extends('app')

@section('scripts_and_styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/> <!-- 'nano' theme -->
<link href="https://cdn.jsdelivr.net/tipped/4.0.10/css/tipped/tipped.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

<!-- CSS for spreadsheet -->
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/gc.spread.sheets.excel2013white.13.0.0.css') }}" title="spread-theme"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/inspector.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/insp-table-format.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/insp-slicer-format.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/colorpicker/colorPicker.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/widgets/chartColorPicker/chart-colorPicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/widgets/addChartElement/chartAddChartElement.css') }}">
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/widgets/chartLayoutPicker/chartLayoutPicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/borderpicker.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/sample.css') }}"/>
<link type="text/css" href="{{ URL::asset('CustomToolbars/widgets/richText/richTextWithRichEditor.css') }}" rel="stylesheet"/>

<link href="{{ URL::asset('CustomToolbars/fileMenu/fileMenu.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('CustomToolbars/css/excel2013.css') }}" rel="stylesheet"/>
<link rel="stylesheet" href="{{ URL::asset('CustomToolbars/css/shapes.css') }}">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/tipped/4.0.10/js/tipped/tipped.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- Scripts for spreadsheet -->
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/gc.spread.sheets.all.13.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/gc.spread.sheets.charts.13.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/gc.spread.sheets.barcode.13.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/gc.spread.excelio.13.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/gc.spread.sheets.print.13.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/gc.spread.sheets.pdf.13.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/gc.spread.sheets.shapes.13.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/license.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/FileSaver.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/util.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/resources.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/ribbon-data.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/widgets/richText/richTextEditor.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/ribbon.js') }}"></script>

<script src="{{ URL::asset('CustomToolbars/fileMenu/fileMenu.js') }}"></script>
<script src="{{ URL::asset('CustomToolbars/colorpicker/colorPicker.js') }}"></script>
<script src="{{ URL::asset('CustomToolbars/widgets/chartColorPicker/chart-colorPicker.js') }}"></script>
<script src="{{ URL::asset('CustomToolbars/widgets/addChartElement/chartAddChartElement.js') }}"></script>
<script src="{{ URL::asset('CustomToolbars/widgets/chartLayoutPicker/chartLayoutPicker.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/spreadActions.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('CustomToolbars/scripts/sample.js') }}"></script>


<!-- JS for lesson page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="{{ URL::asset('js/custom-lessons.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js" integrity="sha256-LJkWYMcB83+zN8VO3EnSoNYHiBo93miOF47ZfsPSNDQ=" crossorigin="anonymous"></script>

<script type="text/javascript">
        //var spread, activeSheet;


        //var spread = new GcSpread.Sheets.Spread($("#ss").get(0),{sheetCount:1});
        //var sheet = spread.getActiveSheet();
        //sheet.getCell(0, 0).formatter("0.00_);(0.00)");
        
        //sheet.getCell(1, 1).text("FakeSoftwareCo Income Statement");


         //Set values by calling SetText method
         //var spread = new GcSpread.Sheets.Spread($("#ss").get(0),{sheetCount:3});
         //var sheet = spread.getActiveSheet();
         //sheet.setText(1, 1, 'FakeSoftwareCo Income Statement');

        /*window.onload = function () {
            spread = new GC.Spread.Sheets.Workbook(document.getElementById("ss"));
            activeSheet = spread.getActiveSheet();
            activeSheet.setValue(1, 1, "FakeSoftwareCo Income Statement");
            var nCondition = new GC.Spread.Sheets.ConditionalFormatting.Condition(GC.Spread.Sheets.ConditionalFormatting.ConditionType.textCondition);
            nCondition.compareType(GC.Spread.Sheets.ConditionalFormatting.TextCompareType.contains);
            nCondition.expected("te?t");
            nCondition.ignoreBlank(true);
            nCondition.ignoreCase(true);
            nCondition.useWildCards(true);
            var validator = new GC.Spread.Sheets.DataValidation.DefaultDataValidator(nCondition);
            validator.type(GC.Spread.Sheets.DataValidation.CriteriaType.custom);
            activeSheet.getCell(-1, 0, GC.Spread.Sheets.SheetArea.viewport).validator(validator);
            activeSheet.getCell(-1, 1, GC.Spread.Sheets.SheetArea.viewport).validator(validator);
            spread.options.highlightInvalidData = true;
            activeSheet.bind("ValidationError", vError);
            activeSheet.bind("LeaveCell", checkError);
    
        } 
        function vError(sender, args) {
            alert("please enter- Test");
        }
        function checkError(sender, args) {
            var rowCount = activeSheet.getRowCount(), colCount = activeSheet.getColumnCount();
            for (var i = 0; i < rowCount; i++) {
                for (var j = 0; j < colCount; j++) {
                    if (!sheet.isValid(i, j, sheet.getValue(i, j))) {
                        sheet.setActiveCell(i, j);
                    }
                }
            }
           
        }*/

    </script>

<style>
    #ssvp_vp, #ss_tabStrip{
        width: 100% !important;
        float: right;
    }
</style>

@endsection


@section('content')

@php

    $lesson_name = App\Lesson::where(['id' => decrypt(Request::segment(3))])->pluck('name')->first();
    $lesson_name = isset($lesson_name) ? $lesson_name : '';

@endphp

<div class="title">{{$lesson_name}}</div> 

<div class="lesson">
    <div class="lesson-contant">
        <div class="lesson-contant-left">
            <div class="lesson-contant-left-tab">
                <input type="hidden" class="lessonid" value="{{ decrypt(Request::segment(3)) }}">
                <div class="lesson-contant-left-tab-menu">
                    <ul class="lesson-menu spread_steps_clk">
                        <li><a href="javascript:void(0)" class="active" data-step="step1">1</a></li>
                        <li><a href="javascript:void(0)" data-step="step2">2</a></li>
                        <li><a href="javascript:void(0)" data-step="step3">3</a></li>
                        <li><a href="javascript:void(0)" data-step="step4">4</a></li>
                        <li><a href="javascript:void(0)" data-step="step5">5</a></li>
                        <li><a href="javascript:void(0)" data-step="step6">6</a></li>
                        <li><a href="javascript:void(0)" data-step="step7">7</a></li>
                        <li><a href="javascript:void(0)" data-step="step8">8</a></li>
                        <li><a href="javascript:void(0)" data-step="step9">9</a></li>
                        <li><a href="javascript:void(0)" data-step="step10">10</a></li>
                        <li><a href="javascript:void(0)" data-step="step11">11</a></li>
                    </ul>
                </div> 

                <div class="lcltc-in">
                    <div class="lesson-contant-left-tab-contant">
                        
                    </div>
                </div>

            </div>
        </div> 
        <div class="lesson-contant-right">

            <div class="spread_loader" style="display: none;"><i class="fa fa-spinner fa-spin" style="font-size:60px"></i></div>

            <div class="toolbar" id="toolbar">
            </div>
            <input type="hidden" name="last_err_msg" class="last_err_msg">
            <div class="content-container">
                <div id="inner-content-container">
                    <table id="formulaBar" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="vertical-align:top;">
                                    <span id="positionbox"></span>
                                </td>
                                <td style="width: 100%; border-left: 1px solid #ccc;">
                                    <div id="formulabox" contenteditable="true" spellcheck="false"
                                         style="overflow: hidden; height: 36px; width: 100%; padding: 9px;"></div>
                                    <div class="vertical-splitter ui-draggable" id="verticalSplitter"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="spread-container" id="controlPanel" style="height: 600px; bottom: 0;">
                        <div id="ss" style="height: 100%; border: 1px solid #ddd;"></div>
                    </div>
                    <div id="statusBar" style="bottom: 0;height: 25px;width: 100%;position: relative;"></div>
                </div>
                <div class="setting-pane setting-container" id="setting-pane">
                    <div class="pane-header">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="pane-title">Title</h4>
                    </div>
                    <div class="pane-content">
                        <div id="borderSetting" class="hidden move-right">
                            <div class="pane-row border-line-style">
                                <label class="pane-label narrow-width localize">@cellTab.border.rangeBorderLine@</label>
                                <div class="btn-group" data-name="border-line-style">
                                    <button type="button"
                                            class="btn btn-default dropdown-toggle btn-pane-dropdown border-line-style"
                                            data-toggle="dropdown" aria-expanded="false">
                                        <span class="line-style-thin"></span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu line-style">
                                        <li data-value="none"><a class="localize">@cellTab.border.noBorder@</a></li>
                                        <li data-value="hair"><a>
                                                <div class="line-style-hair"></div>
                                            </a></li>
                                        <li data-value="dotted"><a>
                                                <div class="line-style-dotted"></div>
                                            </a></li>
                                        <li data-value="dash-dot-dot"><a>
                                                <div class="line-style-dash-dot-dot"></div>
                                            </a></li>
                                        <li data-value="dash-dot"><a>
                                                <div class="line-style-dash-dot"></div>
                                            </a></li>
                                        <li data-value="dashed"><a>
                                                <div class="line-style-dashed"></div>
                                            </a></li>
                                        <li data-value="thin" class="selected"><a>
                                                <div class="line-style-thin"></div>
                                            </a></li>
                                        <li data-value="medium-dash-dot-dot"><a>
                                                <div class="line-style-medium-dash-dot-dot"></div>
                                            </a></li>
                                        <li data-value="slanted-dash-dot"><a>
                                                <div class="line-style-slanted-dash-dot"></div>
                                            </a></li>
                                        <li data-value="medium-dash-dot"><a>
                                                <div class="line-style-medium-dash-dot"></div>
                                            </a></li>
                                        <li data-value="medium-dashed"><a>
                                                <div class="line-style-medium-dashed"></div>
                                            </a></li>
                                        <li data-value="medium"><a>
                                                <div class="line-style-medium"></div>
                                            </a></li>
                                        <li data-value="thick"><a>
                                                <div class="line-style-thick"></div>
                                            </a></li>
                                        <li data-value="double"><a>
                                                <div class="line-style-double"></div>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pane-row border-line-color">
                                <label class="pane-label narrow-width localize">@cellTab.border.rangeBorderColor@</label>
                                <div class="btn-group pane-color-picker" data-name="border-line-color">
                                    <button type="button" class="btn btn-default btn-pane-dropdown">
                                        <div class="color-picker" style="background-color: black"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="pane-row">
                                <label class="pane-label narrow-width localize">@cellTab.border.label@</label>
                                <div class="border-type-items">
                                    <div class="text-center">
                                        <div class="border-type-item localize-tooltip" data-name="outside"
                                             title="@tooltips.border.outsideBorder@">
                                            <div class="border-type-image sprite BorderOutside"></div>
                                        </div>
                                        <div class="border-type-item localize-tooltip" data-name="inside"
                                             title="@tooltips.border.insideBorder@">
                                            <div class="border-type-image sprite BorderInside"></div>
                                        </div>
                                        <div class="border-type-item localize-tooltip" data-name="all"
                                             title="@tooltips.border.allBorder@">
                                            <div class="border-type-image sprite BordersAll"></div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="border-type-item localize-tooltip" data-name="left"
                                             title="@tooltips.border.leftBorder@">
                                            <div class="border-type-image sprite BorderLeft"></div>
                                        </div>
                                        <div class="border-type-item localize-tooltip" data-name="innerVertical"
                                             title="@tooltips.border.innerVertical@">
                                            <div class="border-type-image sprite BorderInsideVertical"></div>
                                        </div>
                                        <div class="border-type-item localize-tooltip" data-name="right"
                                             title="@tooltips.border.rightBorder@">
                                            <div class="border-type-image sprite BorderRight"></div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="border-type-item localize-tooltip" data-name="top"
                                             title="@tooltips.border.topBorder@">
                                            <div class="border-type-image sprite BorderTop"></div>
                                        </div>
                                        <div class="border-type-item localize-tooltip" data-name="innerHorizontal"
                                             title="@tooltips.border.innerHorizontal@">
                                            <div class="border-type-image sprite BorderInsideHorizontal"></div>
                                        </div>
                                        <div class="border-type-item localize-tooltip" data-name="bottom"
                                             title="@tooltips.border.bottomBorder@">
                                            <div class="border-type-image sprite BorderBottom"></div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="border-type-item localize-tooltip" data-name="none"
                                             title="@tooltips.border.noBorder@">
                                            <div class="border-type-image sprite BorderNone"></div>
                                        </div>

                                        <div class="border-type-item localize-tooltip" data-name="borderDiagonalUp"
                                             title="@tooltips.border.diagonalUpLine@">
                                            <div class="border-type-image sprite BorderDiagonalUp"></div>
                                        </div>
                                        <div class="border-type-item localize-tooltip" data-name="borderDiagonalDown"
                                             title="@tooltips.border.diagonalDownLine@">
                                            <div class="border-type-image sprite BorderDiagonalDown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="cellTypeSetting" class="hidden">
                            <div id="buttonCellTypeSetting" class="group-celltype" data-name="button">
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.buttonCellType.values.marginTop@</label>
                                    <input type="number" class="pane-input" data-name="buttonCellTypeMarginTop" value="2">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.buttonCellType.values.marginRight@</label>
                                    <input type="number" class="pane-input" data-name="buttonCellTypeMarginRight" value="4">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.buttonCellType.values.marginBottom@</label>
                                    <input type="number" class="pane-input" data-name="buttonCellTypeMarginBottom" value="2">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.buttonCellType.values.marginLeft@</label>
                                    <input type="number" class="pane-input" data-name="buttonCellTypeMarginLeft" value="4">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.buttonCellType.values.text@</label>
                                    <input type="text" class="pane-input" data-name="buttonCellTypeText" value="Button">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.buttonCellType.values.backColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="buttonCellTypeBackColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(242, 242, 242);"></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="checkboxCellTypeSetting" class="group-celltype" data-name="checkbox">
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.checkBoxCellType.values.caption@</label>
                                    <input type="text" class="pane-input localize-value" data-name="checkboxCellTypeCaption"
                                           value="@defaultTexts.checkCaption@">
                                </div>

                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.checkBoxCellType.values.textTrue@</label>
                                    <input type="text" class="pane-input" data-name="checkboxCellTypeTextTrue">
                                </div>

                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.checkBoxCellType.values.textIndeterminate@</label>
                                    <input type="text" class="pane-input" data-name="checkboxCellTypeTextIndeterminate">
                                </div>

                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.checkBoxCellType.values.textFalse@</label>
                                    <input type="text" class="pane-input" data-name="checkboxCellTypeTextFalse">
                                </div>

                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.checkBoxCellType.values.textAlign.title@</label>
                                    <div class="btn-group" data-name="checkboxCellTypeTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li>
                                                <a class="text localize" data-value="0">@cellTypes.checkBoxCellType.values.textAlign.values.top@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="1">@cellTypes.checkBoxCellType.values.textAlign.values.bottom@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="2">@cellTypes.checkBoxCellType.values.textAlign.values.left@</a>
                                            </li>
                                            <li class="default">
                                                <a class="text localize" data-value="3">@cellTypes.checkBoxCellType.values.textAlign.values.right@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="checkboxCellTypeIsThreeState">
                                        <input type="checkbox">
                                        <span class="localize">@cellTypes.checkBoxCellType.values.isThreeState@</span>
                                    </label>
                                </div>
                            </div>
                            <div id="comboboxCellTypeSetting" class="group-celltype" data-name="combobox">
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.comboBoxCellType.values.editorValueType.title@</label>
                                    <div class="btn-group" data-name="comboboxCellTypeEditorValueType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="0">@cellTypes.comboBoxCellType.values.editorValueType.values.text@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@cellTypes.comboBoxCellType.values.editorValueType.values.index@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="2">@cellTypes.comboBoxCellType.values.editorValueType.values.value@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.comboBoxCellType.values.itemsText@</label>
                                    <input type="text" placeholder="(eg:123,456,789)" class="pane-input localize-value"
                                           data-name="comboboxCellTypeItemsText"
                                           value="@defaultTexts.comboText@">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.comboBoxCellType.values.itemsValue@</label>
                                    <input type="text" placeholder="(eg:abc,def,ghi)" class="pane-input localize-value"
                                           data-name="comboboxCellTypeItemsValue"
                                           value="@defaultTexts.comboValue@">
                                </div>
                            </div>
                            <div id="hyperlinkCellTypeSetting" class="group-celltype" data-name="hyperlink">
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.hyperlinkCellType.values.linkColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="hyperlinkCellTypeLinkColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 102, 204);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.hyperlinkCellType.values.visitedLinkColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="hyperlinkCellTypeVisitedLinkColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(51, 153, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.hyperlinkCellType.values.address@</label>
                                    <input type="text" class="pane-input localize-value" data-name="hyperlinkCellTypeAddress"
                                           value="@defaultTexts.hyperlinkAddress@">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.hyperlinkCellType.values.text@</label>
                                    <input type="text" class="pane-input localize-value" data-name="hyperlinkCellTypeText"
                                           value="@defaultTexts.hyperlinkText@">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@cellTypes.hyperlinkCellType.values.linkToolTip@</label>
                                    <input type="text" class="pane-input localize-value" data-name="hyperlinkCellTypeLinkToolTip"
                                           value="@defaultTexts.hyperlinkToolTip@">
                                </div>
                            </div>

                            <div class="group-item-divider"></div>

                            <div class="pane-row">
                                <button type="button" class="btn btn-primary pane-set-button localize" id="setCellTypeButton">
                                    @cellTypes.setButton@
                                </button>
                            </div>
                        </div>

                        <div id="commentSetting" class="hidden">
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@commentTab.general.title@</span></span>
                                </div>
                                <div class="pane-group-content move-right">
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="commentDynamicSize"><input type="checkbox"
                                                                                                             checked><span
                                                                                                             class="localize">@commentTab.general.dynamicSize@</span></label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="commentDynamicMove"><input type="checkbox"
                                                                                                             checked><span
                                                                                                             class="localize">@commentTab.general.dynamicMove@</span></label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="commentLockText"><input type="checkbox"
                                                                                                          checked><span
                                                                                                          class="localize">@commentTab.general.lockText@</span></label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="commentShowShadow"><input type="checkbox"><span
                                                class="localize">@commentTab.general.showShadow@</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@commentTab.font.title@</span></span>
                                </div>
                                <div class="pane-group-content move-left">
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.font.fontFamily@</label>
                                        <div class="btn-group" data-name="commentFontFamily">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li class="default"><a>Arial</a></li>
                                                <li><a>Arial Black</a></li>
                                                <li><a>Calibri</a></li>
                                                <li><a>Cambria</a></li>
                                                <li><a>Century</a></li>
                                                <li><a>Courier New</a></li>
                                                <li><a>Comic Sans MS</a></li>
                                                <li><a>Garamond</a></li>
                                                <li><a>Georgia</a></li>
                                                <li><a>Malgun Gothic</a></li>
                                                <li><a>Mangal</a></li>
                                                <li><a>Meiryo</a></li>
                                                <li><a>MS Gothic</a></li>
                                                <li><a>MS Mincho</a></li>
                                                <li><a>MS PGothic</a></li>
                                                <li><a>MS PMincho</a></li>
                                                <li><a>Roboto</a></li>
                                                <li><a>Tahoma</a></li>
                                                <li><a>Times</a></li>
                                                <li><a>Times New Roman</a></li>
                                                <li><a>Trebuchet MS</a></li>
                                                <li><a>Verdana</a></li>
                                                <li><a>Wingdings</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.font.fontSize@</label>
                                        <div class="btn-group" data-name="commentFontSize">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li><a>8</a></li>
                                                <li class="default"><a>9</a></li>
                                                <li><a>10</a></li>
                                                <li><a>11</a></li>
                                                <li><a>12</a></li>
                                                <li><a>13</a></li>
                                                <li><a>14</a></li>
                                                <li><a>15</a></li>
                                                <li><a>16</a></li>
                                                <li><a>18</a></li>
                                                <li><a>20</a></li>
                                                <li><a>22</a></li>
                                                <li><a>24</a></li>
                                                <li><a>26</a></li>
                                                <li><a>28</a></li>
                                                <li><a>36</a></li>
                                                <li><a>48</a></li>
                                                <li><a>72</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.font.fontStyle.title@</label>
                                        <div class="btn-group" data-name="commentFontStyle">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a>
                                                </li>
                                                <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a>
                                                </li>
                                                <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a>
                                                </li>
                                                <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.font.fontWeight.title@</label>
                                        <div class="btn-group" data-name="commentFontWeight">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontWeight.values.normal@</a>
                                                </li>
                                                <li><a class="text localize" data-value="bold">@commentTab.font.fontWeight.values.bold@</a>
                                                </li>
                                                <li><a class="text localize" data-value="bolder">@commentTab.font.fontWeight.values.bolder@</a>
                                                </li>
                                                <li><a class="text localize" data-value="lighter">@commentTab.font.fontWeight.values.lighter@</a>
                                                </li>
                                                <li><a class="text">100</a></li>
                                                <li><a class="text">200</a></li>
                                                <li><a class="text">300</a></li>
                                                <li><a class="text">400</a></li>
                                                <li><a class="text">500</a></li>
                                                <li><a class="text">600</a></li>
                                                <li><a class="text">700</a></li>
                                                <li><a class="text">800</a></li>
                                                <li><a class="text">900</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.font.textDecoration.title@</label>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-comment-decoration"
                                                    data-name="comment-underline" data-value="1"><span
                                                    style="text-decoration: underline;">U</span></button>
                                            <button type="button" class="btn btn-default btn-comment-decoration"
                                                    data-name="comment-overline" data-value="4"><span
                                                    style="text-decoration: overline;">O</span></button>
                                            <button type="button" class="btn btn-default btn-comment-decoration"
                                                    data-name="comment-strikethrough" data-value="2"><span
                                                    style="text-decoration: line-through;">S</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@commentTab.border.title@</span></span>
                                </div>
                                <div class="pane-group-content move-left">
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.border.width@</label>
                                        <input type="number" class="pane-input" data-name="commentBorderWidth" value="1">
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.border.style.title@</label>
                                        <div class="btn-group" data-name="commentBorderStyle">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li><a class="text localize"
                                                       data-value="none">@commentTab.border.style.values.none@</a></li>
                                                <li><a class="text localize" data-value="hidden">@commentTab.border.style.values.hidden@</a>
                                                </li>
                                                <li><a class="text localize" data-value="dotted">@commentTab.border.style.values.dotted@</a>
                                                </li>
                                                <li><a class="text localize" data-value="dashed">@commentTab.border.style.values.dashed@</a>
                                                </li>
                                                <li class="default"><a class="text localize" data-value="solid">@commentTab.border.style.values.solid@</a>
                                                </li>
                                                <li><a class="text localize" data-value="double">@commentTab.border.style.values.double@</a>
                                                </li>
                                                <li><a class="text localize" data-value="groove">@commentTab.border.style.values.groove@</a>
                                                </li>
                                                <li><a class="text localize" data-value="ridge">@commentTab.border.style.values.ridge@</a>
                                                </li>
                                                <li><a class="text localize" data-value="inset">@commentTab.border.style.values.inset@</a>
                                                </li>
                                                <li><a class="text localize" data-value="outset">@commentTab.border.style.values.outset@</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.border.color@</label>
                                        <div class="btn-group pane-color-picker" data-name="commentBorderColor">
                                            <button type="button" class="btn btn-default btn-pane-dropdown">
                                                <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@commentTab.appearance.title@</span></span>
                                </div>
                                <div class="pane-group-content move-left">
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.appearance.horizontalAlign.title@</label>
                                        <div class="btn-group" data-name="commentHorizontalAlign">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li class="default"><a class="text localize" data-value="0">@commentTab.appearance.horizontalAlign.values.left@</a>
                                                </li>
                                                <li><a class="text localize" data-value="1">@commentTab.appearance.horizontalAlign.values.center@</a>
                                                </li>
                                                <li><a class="text localize" data-value="2">@commentTab.appearance.horizontalAlign.values.right@</a>
                                                </li>
                                                <li><a class="text localize" data-value="3">@commentTab.appearance.horizontalAlign.values.general@</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.appearance.displayMode.title@</label>
                                        <div class="btn-group" data-name="commentDisplayMode">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li><a class="text localize" data-value="1">@commentTab.appearance.displayMode.values.alwaysShown@</a>
                                                </li>
                                                <li class="default"><a class="text localize" data-value="2">@commentTab.appearance.displayMode.values.hoverShown@</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.appearance.foreColor@</label>
                                        <div class="btn-group pane-color-picker" data-name="commentForeColor">
                                            <button type="button" class="btn btn-default btn-pane-dropdown">
                                                <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.appearance.backColor@</label>
                                        <div class="btn-group pane-color-picker" data-name="commentBackColor">
                                            <button type="button" class="btn btn-default btn-pane-dropdown">
                                                <div class="color-picker" style="background-color: rgb(255, 255, 225);"></div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.appearance.padding@</label>
                                        <input type="text" class="pane-input" data-name="commentPadding">
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@commentTab.appearance.opacity@</label>
                                        <br/>
                                        <input type="number" class="pane-input input-width-md" data-name="commentOpacity"><span
                                            class="center-align span-fixed-block">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="cellFormatSetting" class="hidden">
                            <div class="pane-row">
                                <div class="btn-group pane-item-fullwidth" data-name="commonFormat">
                                    <button type="button"
                                            class="btn btn-default dropdown-toggle btn-pane-dropdown pane-item-fullwidth"
                                            data-toggle="dropdown" aria-expanded="false">
                                        <span class="content"></span>
                                        <span class="caret fixed"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    </ul>
                                </div>
                            </div>
                            <div class="group-item-divider"></div>
                            <div class="pane-row">
                                <label class="pane-label narrow-width localize">@cellTab.format.custom@</label>
                                <input type="text" class="pane-input wide-input" data-name="customFormat">
                            </div>
                            <div class="pane-row">
                                <button type="button" class="btn btn-primary pane-set-button localize" id="setCustomFormat">
                                    @cellTab.format.setButton@
                                </button>
                            </div>
                        </div>
                        <div id="sparklineSetting" class="hidden">
                            <div class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.sparklineExType.title@</label>
                                    <div class="btn-group" data-name="sparklineExType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu sparklineExType">
                                            <li>
                                                <a class="text localize" data-value="line">@sparklineDialog.sparklineExType.values.line@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="column">@sparklineDialog.sparklineExType.values.column@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="winloss">@sparklineDialog.sparklineExType.values.winLoss@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="pie">@sparklineDialog.sparklineExType.values.pie@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="area">@sparklineDialog.sparklineExType.values.area@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="scatter">@sparklineDialog.sparklineExType.values.scatter@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="spread">@sparklineDialog.sparklineExType.values.spread@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="stacked">@sparklineDialog.sparklineExType.values.stacked@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="bullet">@sparklineDialog.sparklineExType.values.bullet@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="hbar">@sparklineDialog.sparklineExType.values.hbar@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="vbar">@sparklineDialog.sparklineExType.values.vbar@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="vari">@sparklineDialog.sparklineExType.values.variance@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="boxplot">@sparklineDialog.sparklineExType.values.boxplot@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="cascade">@sparklineDialog.sparklineExType.values.cascade@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="pareto">@sparklineDialog.sparklineExType.values.pareto@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="group-item-divider"></div>
                            <div id="lineContainer" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.lineSparkline.dataRange@</label>
                                    <input type="text" class="pane-input" data-name="txtLineDataRange">
                                </div>
                                <div class="pane-row">
                                    <label class="error localize"
                                           id="dataRangeError">@sparklineDialog.lineSparkline.dataRangeError@</label>
                                </div>
                                <div class="pane-row">
                                    <label class="error localize" id="singleDataRangeError">@sparklineDialog.lineSparkline.singleDataRange@</label>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.lineSparkline.locationRange@</label>
                                    <input type="text" class="pane-input" data-name="txtLineLocationRange">
                                </div>
                                <div class="pane-row">
                                    <label class="error localize" id="locationRangeError">@sparklineDialog.lineSparkline.locationRangeError@</label>
                                </div>
                            </div>
                            <div id="bulletContainer" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.measure@</label>
                                    <input type="text" class="pane-input" data-name="txtBulletMeasure">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.target@</label>
                                    <input type="text" class="pane-input" data-name="txtBulletTarget">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.maxi@</label>
                                    <input type="text" class="pane-input" data-name="txtBulletMaxi">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.good@</label>
                                    <input type="text" class="pane-input" data-name="txtBulletGood">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.bad@</label>
                                    <input type="text" class="pane-input" data-name="txtBulletBad">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.forecast@</label>
                                    <input type="text" class="pane-input" data-name="txtBulletForecast">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.tickunit@</label>
                                    <input type="text" class="pane-input" data-name="txtBulletTickunit">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.bulletSparkline.colorScheme@</label>
                                    <div class="btn-group pane-color-picker" data-name="colorBulletColorScheme">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(160, 160, 160);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="checkboxBulletVertial">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineDialog.bulletSparkline.vertical@</span>
                                    </label>
                                </div>
                            </div>
                            <div id="hbarContainer" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.hbarSparkline.value@</label>
                                    <input type="text" class="pane-input" data-name="txtHbarValue">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.hbarSparkline.colorScheme@</label>
                                    <div class="btn-group pane-color-picker" data-name="colorHbarColorScheme">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(160, 160, 160);"></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="varianceContainer" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.variance@</label>
                                    <input type="text" class="pane-input" data-name="txtVariance">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.reference@</label>
                                    <input type="text" class="pane-input" data-name="txtVarianceReference">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.mini@</label>
                                    <input type="text" class="pane-input" data-name="txtVarianceMini">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.maxi@</label>
                                    <input type="text" class="pane-input" data-name="txtVarianceMaxi">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.mark@</label>
                                    <input type="text" class="pane-input" data-name="txtVarianceMark">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.tickunit@</label>
                                    <input type="text" class="pane-input" data-name="txtVarianceTickUnit">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.colorPositive@</label>
                                    <div class="btn-group pane-color-picker" data-name="colorVariancePositive">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 128, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineDialog.varianceSparkline.colorNegative@</label>
                                    <div class="btn-group pane-color-picker" data-name="colorVarianceNegative">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline" data-name="checkboxVarianceLegend" style="padding-left: 60px;">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineDialog.varianceSparkline.legend@</span>
                                    </label>
                                    <label class="checkbox-inline pane-right" data-name="checkboxVarianceVertical">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineDialog.varianceSparkline.vertical@</span>
                                    </label>
                                </div>
                            </div>
                            <div class="group-item-divider"></div>
                            <div class="pane-row">
                                <button type="button" class="btn btn-primary pane-set-button localize" id="setSparklineButton">
                                    @sparklineExTab.setButton@
                                </button>
                            </div>
                        </div>

                        <div id="barCodeSetting" class="hidden">
                            <div class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeDialog.barCodeType.title@</label>
                                    <div class="btn-group" data-name="barCodeExType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu barCodeExType">
                                            <li>
                                                <a class="text localize" data-value="qrCode">@barCodeDialog.barCodeType.values.qrCode@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="dataMatrix">@barCodeDialog.barCodeType.values.dataMatrix@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="codabar">@barCodeDialog.barCodeType.values.codaBar@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="pdf417">@barCodeDialog.barCodeType.values.pdf417@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="ean8">@barCodeDialog.barCodeType.values.ean8@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="ean13">@barCodeDialog.barCodeType.values.ean13@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="gs1_128">@barCodeDialog.barCodeType.values.gs1_128@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="code39">@barCodeDialog.barCodeType.values.code39@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="code49">@barCodeDialog.barCodeType.values.code49@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="code93">@barCodeDialog.barCodeType.values.code93@</a>
                                            </li>
                                            <li>
                                                <a class="text localize" data-value="code128">@barCodeDialog.barCodeType.values.code128@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="group-item-divider"></div>
                            <div id="ean8Container" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeDialog.ean8.dataRange@</label>
                                    <input type="text" class="pane-input" data-name="txtEAN8DataRange">
                                </div>
                                <div class="pane-row">
                                    <label class="error localize"
                                           id="dataRangeErrorBarCode">@barCodeDialog.ean8.dataRangeError@</label>
                                </div>
                                <div class="pane-row">
                                    <label class="error localize" id="singleDataRangeErrorBarCode">@barCodeDialog.ean8.singleDataRange@</label>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeDialog.ean8.locationRange@</label>
                                    <input type="text" class="pane-input" data-name="txtEAN8LocationRange">
                                </div>
                                <div class="pane-row">
                                    <label class="error localize" id="locationRangeErrorBarCode">@barCodeDialog.ean8.locationRangeError@</label>
                                </div>
                            </div>
                            <div class="group-item-divider"></div>
                            <div class="pane-row">
                                <button type="button" class="btn btn-primary pane-set-button localize" id="setBarCodeButton">
                                    @barCodeDialog.setButton@
                                </button>
                            </div>
                        </div>

                        <div id="barCodeDetailSetting" class="hidden">
                            <div id="ean8Setting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="ean8Data">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="ean8Color">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="ean8BackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="ean8ShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="ean8LabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="ean8FontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="ean8FontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="ean8FontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="ean8FontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="ean8FontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="ean8FontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="ean8Left">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="ean8Right">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="ean8Top">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="ean8Bottom">
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setEAN8">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="gs1Setting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="gsData">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="gsColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="gsBackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="gsShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="gsLabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="gsFontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="gsFontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="gsFontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="gsFontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="gsFontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="gsFontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="gsLeft">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="gsRight">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="gsTop">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="gsBottom">
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setGS">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="ean13Setting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="ean13Data">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="ean13Color">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="ean13BackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="ean13ShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="ean13LabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.ean13.values.addOn@</label>
                                    <input type="text" class="pane-input" data-name="ean13AddOn">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.ean13.values.addOnLabelPosition@</label>
                                    <div class="btn-group" data-name="ean13AddOnLabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.addOnLabelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.addOnLabelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="ean13FontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="ean13FontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="ean13FontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="ean13FontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="ean13FontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="ean13FontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="ean13Left">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="ean13Right">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="ean13Top">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="ean13Bottom">
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setEAN13">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="code39Setting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="code39Data">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="code39Color">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="code39BackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="code39ShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="code39LabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.code39.values.nwRatio@</label>
                                    <div class="btn-group" data-name="code39NWRatio">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="2">@barCodeTab.nwRatio.two@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="3">@barCodeTab.nwRatio.three@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="code39FontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="code39FontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="code39FontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="code39FontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="code39FontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="code39FontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="code39Left">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="code39Right">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="code39Top">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="code39Bottom">
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="Code39Character">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.code39.values.labelWithStartAndStopCharacter@</span>
                                    </label>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="code39CheckDigit">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.code93.values.checkDigit@</span>
                                    </label>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name=" code39FullASCII">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.code93.values.fullASCII@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setCode39">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="code93Setting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="code93Data">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="code93Color">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="code93BackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="code93ShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="code93LabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="code93FontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="code93FontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="code93FontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="code93FontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="code93FontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="code93FontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="code93Left">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="code93Right">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="code93Top">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="code93Bottom">
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="code93CheckDigit">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.code93.values.checkDigit@</span>
                                    </label>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="code93FullASCII">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.code93.values.fullASCII@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setCode93">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="code49Setting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="code49Data">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="code49Color">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="code49BackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="code49ShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="code49LabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.code49.values.groupNo@</label>
                                    <input type="number" class="pane-input" data-name="code49GroupNo">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="code49FontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="code49FontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="code49FontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="code49FontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="code49FontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="code49FontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="code49Left">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="code49Right">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="code49Top">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="code49Bottom">
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="code49Grouping">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.code49.values.grouping@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setCode49">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="code128Setting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="code128Data">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="code128Color">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="code128BackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="code128ShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="code128LabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.code128.values.codeSet@</label>
                                    <div class="btn-group" data-name="code128CodeSet">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="auto">@barCodeTab.codeset.auto@</a>
                                            </li>
                                            <li><a class="text localize" data-value="A">@barCodeTab.codeset.a@</a>
                                            </li>
                                            <li><a class="text localize" data-value="B">@barCodeTab.codeset.b@</a>
                                            </li>
                                            <li><a class="text localize" data-value="C">@barCodeTab.codeset.c@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="code128FontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="code128FontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="code128FontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="code128FontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="code128FontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="code128FontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="code128Left">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="code128Right">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="code128Top">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="code128Bottom">
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setCode128">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="pdfSetting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="pdfData">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="pdfColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="pdfBackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.pdf417.values.errorCorrectionLevel@</label>
                                    <div class="btn-group" data-name="pdfLevel">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="auto">@barCodeTab.pdfErrorCorrectionLevel.auto@</a>
                                            </li>
                                            <li><a class="text localize" data-value="0">@barCodeTab.pdfErrorCorrectionLevel.zero@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@barCodeTab.pdfErrorCorrectionLevel.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@barCodeTab.pdfErrorCorrectionLevel.two@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@barCodeTab.pdfErrorCorrectionLevel.three@</a>
                                            </li>
                                            <li><a class="text localize" data-value="4">@barCodeTab.pdfErrorCorrectionLevel.four@</a>
                                            </li>
                                            <li><a class="text localize" data-value="5">@barCodeTab.pdfErrorCorrectionLevel.five@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@barCodeTab.pdfErrorCorrectionLevel.six@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7">@barCodeTab.pdfErrorCorrectionLevel.seven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="8">@barCodeTab.pdfErrorCorrectionLevel.eight@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.pdf417.values.rows@</label>
                                    <div class="btn-group" data-name="pdfRows">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="auto">@barCodeTab.rows.auto@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@barCodeTab.rows.three@</a>
                                            </li>
                                            <li><a class="text localize" data-value="4">@barCodeTab.rows.four@</a>
                                            </li>
                                            <li><a class="text localize" data-value="5">@barCodeTab.rows.five@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@barCodeTab.rows.six@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7">@barCodeTab.rows.seven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="8">@barCodeTab.rows.eight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="9">@barCodeTab.rows.nine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="10">@barCodeTab.rows.ten@</a>
                                            </li>
                                            <li><a class="text localize" data-value="11">@barCodeTab.rows.eleven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="12">@barCodeTab.rows.twelve@</a>
                                            </li>
                                            <li><a class="text localize" data-value="13">@barCodeTab.rows.thirteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="14">@barCodeTab.rows.fourteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="15">@barCodeTab.rows.fifteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="16">@barCodeTab.rows.sixteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="17">@barCodeTab.rows.seventeen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="18">@barCodeTab.rows.eighteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="19">@barCodeTab.rows.nineteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="20">@barCodeTab.rows.twenty@</a>
                                            </li>
                                            <li><a class="text localize" data-value="21">@barCodeTab.rows.twentyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="22">@barCodeTab.rows.twentyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="23">@barCodeTab.rows.twentyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="24">@barCodeTab.rows.twentyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="25">@barCodeTab.rows.twentyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="26">@barCodeTab.rows.twentySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="27">@barCodeTab.rows.twentySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="28">@barCodeTab.rows.twentyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="29">@barCodeTab.rows.twentyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="30">@barCodeTab.rows.thirty@</a>
                                            </li>
                                            <li><a class="text localize" data-value="31">@barCodeTab.rows.thirtyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="32">@barCodeTab.rows.thirtyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="33">@barCodeTab.rows.thirtyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="34">@barCodeTab.rows.thirtyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="35">@barCodeTab.rows.thirtyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="36">@barCodeTab.rows.thirtySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="37">@barCodeTab.rows.thirtySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="38">@barCodeTab.rows.thirtyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="39">@barCodeTab.rows.thirtyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="40">@barCodeTab.rows.forty@</a>
                                            </li>
                                            <li><a class="text localize" data-value="41">@barCodeTab.rows.fortyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="42">@barCodeTab.rows.fortyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="43">@barCodeTab.rows.fortyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="44">@barCodeTab.rows.fortyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="45">@barCodeTab.rows.fortyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="46">@barCodeTab.rows.fortySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="47">@barCodeTab.rows.fortySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="48">@barCodeTab.rows.fortyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="49">@barCodeTab.rows.fortyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="50">@barCodeTab.rows.fifty@</a>
                                            </li>
                                            <li><a class="text localize" data-value="51">@barCodeTab.rows.fiftyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="52">@barCodeTab.rows.fiftyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="53">@barCodeTab.rows.fiftyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="54">@barCodeTab.rows.fiftyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="55">@barCodeTab.rows.fiftyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="56">@barCodeTab.rows.fiftySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="57">@barCodeTab.rows.fiftySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="58">@barCodeTab.rows.fiftyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="59">@barCodeTab.rows.fiftyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="60">@barCodeTab.rows.sixty@</a>
                                            </li>
                                            <li><a class="text localize" data-value="61">@barCodeTab.rows.sixtyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="62">@barCodeTab.rows.sixtyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="63">@barCodeTab.rows.sixtyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="64">@barCodeTab.rows.sixtyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="65">@barCodeTab.rows.sixtyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="66">@barCodeTab.rows.sixtySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="67">@barCodeTab.rows.sixtySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="68">@barCodeTab.rows.sixtyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="69">@barCodeTab.rows.sixtyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="70">@barCodeTab.rows.seventy@</a>
                                            </li>
                                            <li><a class="text localize" data-value="71">@barCodeTab.rows.seventyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="72">@barCodeTab.rows.seventyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="73">@barCodeTab.rows.seventyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="74">@barCodeTab.rows.seventyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="75">@barCodeTab.rows.seventyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="76">@barCodeTab.rows.seventySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="77">@barCodeTab.rows.seventySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="78">@barCodeTab.rows.seventyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="79">@barCodeTab.rows.seventyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="80">@barCodeTab.rows.eighty@</a>
                                            </li>
                                            <li><a class="text localize" data-value="81">@barCodeTab.rows.eightyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="82">@barCodeTab.rows.eightyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="83">@barCodeTab.rows.eightyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="84">@barCodeTab.rows.eightyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="85">@barCodeTab.rows.eightyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="86">@barCodeTab.rows.eightySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="87">@barCodeTab.rows.eightySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="88">@barCodeTab.rows.eightyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="89">@barCodeTab.rows.eightyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="90">@barCodeTab.rows.ninety@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.pdf417.values.columns@</label>
                                    <div class="btn-group" data-name="pdfColumns">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="auto">@barCodeTab.columns.auto@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@barCodeTab.columns.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@barCodeTab.columns.two@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@barCodeTab.columns.three@</a>
                                            </li>
                                            <li><a class="text localize" data-value="4">@barCodeTab.columns.four@</a>
                                            </li>
                                            <li><a class="text localize" data-value="5">@barCodeTab.columns.five@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@barCodeTab.columns.six@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7">@barCodeTab.columns.seven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="8">@barCodeTab.columns.eight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="9">@barCodeTab.columns.nine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="10">@barCodeTab.columns.ten@</a>
                                            </li>
                                            <li><a class="text localize" data-value="11">@barCodeTab.columns.eleven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="12">@barCodeTab.columns.twelve@</a>
                                            </li>
                                            <li><a class="text localize" data-value="13">@barCodeTab.columns.thirteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="14">@barCodeTab.columns.fourteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="15">@barCodeTab.columns.fifteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="16">@barCodeTab.columns.sixteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="17">@barCodeTab.columns.seventeen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="18">@barCodeTab.columns.eighteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="19">@barCodeTab.columns.nineteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="20">@barCodeTab.columns.twenty@</a>
                                            </li>
                                            <li><a class="text localize" data-value="21">@barCodeTab.columns.twentyOne@</a>
                                            </li>
                                            <li><a class="text localize" data-value="22">@barCodeTab.columns.twentyTwo@</a>
                                            </li>
                                            <li><a class="text localize" data-value="23">@barCodeTab.columns.twentyThree@</a>
                                            </li>
                                            <li><a class="text localize" data-value="24">@barCodeTab.columns.twentyFour@</a>
                                            </li>
                                            <li><a class="text localize" data-value="25">@barCodeTab.columns.twentyFive@</a>
                                            </li>
                                            <li><a class="text localize" data-value="26">@barCodeTab.columns.twentySix@</a>
                                            </li>
                                            <li><a class="text localize" data-value="27">@barCodeTab.columns.twentySeven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="28">@barCodeTab.columns.twentyEight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="29">@barCodeTab.columns.twentyNine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="30">@barCodeTab.columns.thirty@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="pdfLeft">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="pdfRight">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="pdfTop">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="pdfBottom">
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="pdfCompact">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.pdf417.values.compact@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setPDF">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="codabarSetting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="codabarData">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="codabarColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="codabarBackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.showLabel@</label>
                                    <input type="number" class="pane-input" data-name="codabarShowLabel" max="1" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.labelPosition@</label>
                                    <div class="btn-group" data-name="codabarLabelPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="top">@barCodeTab.labelPosition.top@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="bottom">@barCodeTab.labelPosition.bottom@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.codabar.values.nwRatio@</label>
                                    <div class="btn-group" data-name="codabarNwRatio">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="2">@barCodeTab.nwRatio.two@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="3">@barCodeTab.nwRatio.three@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontFamily@</label>
                                    <div class="btn-group" data-name="codabarFontFamily">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="Arial">Arial</a></li>
                                            <li><a class="text localize" data-value="ArialBlack">Arial Black</a></li>
                                            <li><a class="text localize" data-value="Calibri">Calibri</a></li>
                                            <li><a class="text localize" data-value="Cambria">Cambria</a></li>
                                            <li><a class="text localize" data-value="Century">Century</a></li>
                                            <li><a class="text localize" data-value="CourierNew">Courier New</a></li>
                                            <li><a class="text localize" data-value="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a class="text localize" data-value="Garamond">Garamond</a></li>
                                            <li><a class="text localize" data-value="Georgia">Georgia</a></li>
                                            <li><a class="text localize" data-value="MalgunGothic">Malgun Gothic</a></li>
                                            <li><a class="text localize" data-value="Mangal">Mangal</a></li>
                                            <li><a class="text localize" data-value="Meiryo">Meiryo</a></li>
                                            <li><a class="text localize" data-value="MSGothic">MS Gothic</a></li>
                                            <li><a class="text localize" data-value="MSMincho">MS Mincho</a></li>
                                            <li><a class="text localize" data-value="MSPGothic">MS PGothic</a></li>
                                            <li><a class="text localize" data-value="MSPMincho">MS PMincho</a></li>
                                            <li><a class="text localize" data-value="Roboto">Roboto</a></li>
                                            <li class="default"><a class="text localize" data-value="SansSerif">Sans Serif</a></li>
                                            <li><a class="text localize" data-value="Tahoma">Tahoma</a></li>
                                            <li><a class="text localize" data-value="Times">Times</a></li>
                                            <li><a class="text localize" data-value="TimesNewRoman">Times New Roman</a></li>
                                            <li><a class="text localize" data-value="TrebuchetMS">Trebuchet MS</a></li>
                                            <li><a class="text localize" data-value="Verdana">Verdana</a></li>
                                            <li><a class="text localize" data-value="Wingdings">Wingdings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontStyle@</label>
                                    <div class="btn-group" data-name="codabarFontStyle">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@commentTab.font.fontStyle.values.normal@</a></li>
                                            <li><a class="text localize" data-value="italic">@commentTab.font.fontStyle.values.italic@</a></li>
                                            <li><a class="text localize" data-value="oblique">@commentTab.font.fontStyle.values.oblique@</a></li>
                                            <li><a class="text localize" data-value="inherit">@commentTab.font.fontStyle.values.inherit@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontWeight@</label>
                                    <div class="btn-group" data-name="codabarFontWeight">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="normal">@barCodeTab.fontWeight.normal@</a></li>
                                            <li><a class="text localize" data-value="bold">@barCodeTab.fontWeight.bold@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextDecoration@</label>
                                    <div class="btn-group" data-name="codabarFontTextDecoration">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="none">@barCodeTab.textDecoration.none@</a></li>
                                            <li><a class="text localize" data-value="underline">@barCodeTab.textDecoration.underline@</a></li>
                                            <li><a class="text localize" data-value="overline">@barCodeTab.textDecoration.overline@</a></li>
                                            <li><a class="text localize" data-value="line-through">@barCodeTab.textDecoration.linethrough@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontTextAlign@</label>
                                    <div class="btn-group" data-name="codabarFontTextAlign">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="center">@barCodeTab.horizontalAlign.center@</a></li>
                                            <li><a class="text localize" data-value="left">@barCodeTab.horizontalAlign.left@</a></li>
                                            <li><a class="text localize" data-value="right">@barCodeTab.horizontalAlign.right@</a></li>
                                            <li><a class="text localize" data-value="general">@barCodeTab.horizontalAlign.general@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.fontSize@</label>
                                    <div class="btn-group" data-name="codabarFontSize">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu text-align">
                                            <li><a class="text localize" data-value="8">8</a></li>
                                            <li><a class="text localize" data-value="9">9</a></li>
                                            <li><a class="text localize" data-value="10">10</a></li>
                                            <li><a class="text localize" data-value="11">11</a></li>
                                            <li class="default"><a class="text localize" data-value="12">12</a></li>
                                            <li><a class="text localize" data-value="13">13</a></li>
                                            <li><a class="text localize" data-value="14">14</a></li>
                                            <li><a class="text localize" data-value="15">15</a></li>
                                            <li><a class="text localize" data-value="16">16</a></li>
                                            <li><a class="text localize" data-value="18">18</a></li>
                                            <li><a class="text localize" data-value="20">20</a></li>
                                            <li><a class="text localize" data-value="22">22</a></li>
                                            <li><a class="text localize" data-value="24">24</a></li>
                                            <li><a class="text localize" data-value="26">26</a></li>
                                            <li><a class="text localize" data-value="28">28</a></li>
                                            <li><a class="text localize" data-value="36">36</a></li>
                                            <li><a class="text localize" data-value="48">48</a></li>
                                            <li><a class="text localize" data-value="72">72</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="codabarLeft">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="codabarRight">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="codabarTop">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="codabarBottom">
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="codabarCheckDigit">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.codabar.values.checkDigit@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setCodabar">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="dataMatrixSetting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="dataMatrixData">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="dataMatrixColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="dataMatrixBackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.dataMatrix.values.eccMode@</label>
                                    <div class="btn-group" data-name="dataMatrixEccMode">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="ECC000">@barCodeTab.eccMode.ecc000@</a>
                                            </li>
                                            <li><a class="text localize" data-value="ECC050">@barCodeTab.eccMode.ecc050@</a>
                                            </li>
                                            <li><a class="text localize" data-value="ECC080">@barCodeTab.eccMode.ecc080@</a>
                                            </li>
                                            <li><a class="text localize" data-value="ECC100">@barCodeTab.eccMode.ecc100@</a>
                                            </li>
                                            <li><a class="text localize" data-value="ECC140">@barCodeTab.eccMode.ecc140@</a>
                                            </li>
                                            <li><a class="text localize" data-value="ECC200">@barCodeTab.eccMode.ecc200@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.dataMatrix.values.ecc200SymbolSize@</label>
                                    <input type="text" class="pane-input" data-name="dataMatrixSymbolSize">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.dataMatrix.values.ecc200EndcodingMode@</label>
                                    <input type="text" class="pane-input" data-name="dataMatrixEndcodingMode">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.dataMatrix.values.ecc00_140Symbole@</label>
                                    <input type="text" class="pane-input" data-name="dataMatrixSymbole">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.dataMatrix.values.structureNumber@</label>
                                    <div class="btn-group" data-name="dataMatrixStructureNumber">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="0">@barCodeTab.structureNumber.zero@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@barCodeTab.structureNumber.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@barCodeTab.structureNumber.two@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@barCodeTab.structureNumber.three@</a>
                                            </li>
                                            <li><a class="text localize" data-value="4">@barCodeTab.structureNumber.four@</a>
                                            </li>
                                            <li><a class="text localize" data-value="5">@barCodeTab.structureNumber.five@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@barCodeTab.structureNumber.six@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7">@barCodeTab.structureNumber.seven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="8">@barCodeTab.structureNumber.eight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="9">@barCodeTab.structureNumber.nine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="10">@barCodeTab.structureNumber.ten@</a>
                                            </li>
                                            <li><a class="text localize" data-value="11">@barCodeTab.structureNumber.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="12">@barCodeTab.structureNumber.eleven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="13">@barCodeTab.structureNumber.thirteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="14">@barCodeTab.structureNumber.fourteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="15">@barCodeTab.structureNumber.fifteen@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.dataMatrix.values.fileIdentifier@</label>
                                    <input type="number" class="pane-input" data-name="dataMatrixFileIdentifier" max="254" min="0">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="dataMatrixLeft">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="dataMatrixRight">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="dataMatrixTop">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="dataMatrixBottom">
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="dataMatrixStructureAppend">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.dataMatrix.values.structureAppend@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setDataMatrix">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="qrCodeSetting" class="move-left">
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.data@</label>
                                    <input type="text" class="pane-input" data-name="qrCodeData">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="qrCodeColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.backgroundColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="qrCodeBackgroundColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 255, 255);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.qrCode.values.errorCorrectionLevel@</label>
                                    <div class="btn-group" data-name="qrCodeLevel">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="L">@barCodeTab.errorCorrectionLevel.l@</a>
                                            </li>
                                            <li><a class="text localize" data-value="M">@barCodeTab.errorCorrectionLevel.m@</a>
                                            </li>
                                            <li><a class="text localize" data-value="Q">@barCodeTab.errorCorrectionLevel.q@</a>
                                            </li>
                                            <li><a class="text localize" data-value="H">@barCodeTab.errorCorrectionLevel.h@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.qrCode.values.model@</label>
                                    <div class="btn-group" data-name="qrCodeModel">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="1">@barCodeTab.model.one@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="2">@barCodeTab.model.two@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.qrCode.values.version@</label>
                                    <div class="btn-group" data-name="qrCodeVersion">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="auto">@barCodeTab.version.auto@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@barCodeTab.version.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@barCodeTab.version.two@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@barCodeTab.version.three@</a>
                                            </li>
                                            <li><a class="text localize" data-value="4">@barCodeTab.version.four@</a>
                                            </li>
                                            <li><a class="text localize" data-value="5">@barCodeTab.version.five@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@barCodeTab.version.six@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7">@barCodeTab.version.seven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="8">@barCodeTab.version.eight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="9">@barCodeTab.version.nine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="10">@barCodeTab.version.ten@</a>
                                            </li>
                                            <li><a class="text localize" data-value="11">@barCodeTab.version.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="12">@barCodeTab.version.eleven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="13">@barCodeTab.version.thirteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="14">@barCodeTab.version.fourteen@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="15">@barCodeTab.version.fifteen@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="16">@barCodeTab.version.sixteen@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="17">@barCodeTab.version.seventeen@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="18">@barCodeTab.version.eighteen@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="19">@barCodeTab.version.nineteen@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="20">@barCodeTab.version.twenty@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="21">@barCodeTab.version.twentyOne@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="22">@barCodeTab.version.twentyTwo@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="23">@barCodeTab.version.twentyThree@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="24">@barCodeTab.version.twentyFour@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="25">@barCodeTab.version.twentyFive@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="26">@barCodeTab.version.twentySix@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="27">@barCodeTab.version.twentySeven@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="28">@barCodeTab.version.twentyEight@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="29">@barCodeTab.version.twentyNine@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="30">@barCodeTab.version.thirty@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="31">@barCodeTab.version.thirtyOne@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="32">@barCodeTab.version.thirtyTwo@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="33">@barCodeTab.version.thirtyThree@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="34">@barCodeTab.version.thirtyFour@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="35">@barCodeTab.version.thirtyFive@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="36">@barCodeTab.version.thirtySix@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="37">@barCodeTab.version.thirtySeven@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="38">@barCodeTab.version.thirtyEight@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="39">@barCodeTab.version.thirtyNine@</a>
                                            </li>
                                            <li><a class="text localize no-common" data-value="40">@barCodeTab.version.forty@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.qrCode.values.mask@</label>
                                    <div class="btn-group" data-name="qrCodeMask">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="auto">@barCodeTab.mask.auto@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@barCodeTab.mask.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@barCodeTab.mask.two@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@barCodeTab.mask.three@</a>
                                            </li>
                                            <li><a class="text localize" data-value="4">@barCodeTab.mask.four@</a>
                                            </li>
                                            <li><a class="text localize" data-value="5">@barCodeTab.mask.five@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@barCodeTab.mask.six@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7">@barCodeTab.mask.seven@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.qrCode.values.connectionNo@</label>
                                    <div class="btn-group" data-name="qrCodeConnectionNo">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="0">@barCodeTab.connectionNo.zero@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@barCodeTab.connectionNo.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@barCodeTab.connectionNo.two@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@barCodeTab.connectionNo.three@</a>
                                            </li>
                                            <li><a class="text localize" data-value="4">@barCodeTab.connectionNo.four@</a>
                                            </li>
                                            <li><a class="text localize" data-value="5">@barCodeTab.connectionNo.five@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@barCodeTab.connectionNo.six@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7">@barCodeTab.connectionNo.seven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="8">@barCodeTab.connectionNo.eight@</a>
                                            </li>
                                            <li><a class="text localize" data-value="9">@barCodeTab.connectionNo.nine@</a>
                                            </li>
                                            <li><a class="text localize" data-value="10">@barCodeTab.connectionNo.ten@</a>
                                            </li>
                                            <li><a class="text localize" data-value="11">@barCodeTab.connectionNo.one@</a>
                                            </li>
                                            <li><a class="text localize" data-value="12">@barCodeTab.connectionNo.eleven@</a>
                                            </li>
                                            <li><a class="text localize" data-value="13">@barCodeTab.connectionNo.thirteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="14">@barCodeTab.connectionNo.fourteen@</a>
                                            </li>
                                            <li><a class="text localize" data-value="15">@barCodeTab.connectionNo.fifteen@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.qrCode.values.charCode@</label>
                                    <input type="text" class="pane-input" data-name="qrCodeCharCode" placeholder="Example:315,37727...">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.qrCode.values.charset@</label>
                                    <div class="btn-group" data-name="qrCodeCharset">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="UTF-8">@barCodeTab.charset.uft8@</a>
                                            </li>
                                            <li><a class="text localize" data-value="Shift-JIS">@barCodeTab.charset.shiftJIS@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneLeft@</label>
                                    <input type="number" class="pane-input" data-name="qrCodeLeft">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneRight@</label>
                                    <input type="number" class="pane-input" data-name="qrCodeRight">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneTop@</label>
                                    <input type="number" class="pane-input" data-name="qrCodeTop">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@barCodeTab.commonParams.quietZoneBottom@</label>
                                    <input type="number" class="pane-input" data-name="qrCodeBottom">
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline pane-right" data-name="qrCodeConnection">
                                        <input type="checkbox">
                                        <span class="localize">@barCodeTab.qrCode.values.connection@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setQRCode">
                                        @barCodeTab.commonParams.setButton@
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="richtextdialog" title="richText" class="hidden">
                            <div>
                                <div id="richTextContainer">
                                    <div>
                                        <div class="insp-row">
                                            <div id="settingsDiv">
                                                <div id="richEditor" class="rich-editor"></div>
                                                <ul id="textFontSizeList" class="list">
                                                    <li class="fontsize-item" value='1'>10</li>
                                                    <li class="fontsize-item" value='2'>13</li>
                                                    <li class="fontsize-item" value='3'>16</li>
                                                    <li class="fontsize-item" value='4'>18</li>
                                                    <li class="fontsize-item" value='5'>24</li>
                                                    <li class="fontsize-item" value='6'>32</li>
                                                    <li class="fontsize-item" value='7'>48</li>
                                                </ul>
                                                <ul id="textFontFamilyList" class="list">
                                                    <li class="fontfamily-item">Segoe UI</li>
                                                    <li class="fontfamily-item">Arial</li>
                                                    <li class="fontfamily-item">Calibri</li>
                                                    <li class="fontfamily-item">Courier New</li>
                                                    <li class="fontfamily-item">Comic Sans MS</li>
                                                    <li class="fontfamily-item">Microsoft YaHei</li>
                                                    <li class="fontfamily-item">Times New Roman</li>
                                                </ul>
                                                <ul id="textColorPicker" class="list">
                                                    <li class="colorpicker-item" style="background-color:#FFFFFF;"></li>
                                                    <li class="colorpicker-item" style="background-color: #C00000;"></li>
                                                    <li class="colorpicker-item" style="background-color: #FF0000;"></li>
                                                    <li class="colorpicker-item" style="background-color: #FFC003;"></li>
                                                    <li class="colorpicker-item" style="background-color: #FFFF00;"></li>
                                                    <li class="colorpicker-item" style="background-color: #94D051;"></li>
                                                    <li class="colorpicker-item" style="background-color: #00B050;"></li>
                                                    <li class="colorpicker-item" style="background-color: #00AFF0;"></li>
                                                    <li class="colorpicker-item" style="background-color: #006EC3;"></li>
                                                    <li class="colorpicker-item" style="background-color: #001E6E;"></li>
                                                    <li class="colorpicker-item" style="background-color: #6E32A0;"></li>
                                                    <li class="colorpicker-item" style="background-color: #000000;"></li>
                                                </ul>
                                                <div class="hidden">
                                                    <span>Rich Text:</span>
                                                    <span id="richTextResult"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sparklineDetailSetting" class="hidden">
                            <div id="pieSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.pieSparkline.values.percentage@</label>
                                    <input type="text" class="pane-input" data-name="pieSparklinePercentage">
                                </div>
                                <div id="pieSparklineColorContainer">
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setPieSparkline">
                                        @sparklineExTab.pieSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="areaSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.areaSparkline.values.points@</label>
                                    <input type="text" class="pane-input" data-name="areaSparklinePoints">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.areaSparkline.values.minimumValue@</label>
                                    <input type="number" class="pane-input not-min-zero" data-name="areaSparklineMinimumValue">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.areaSparkline.values.maximumValue@</label>
                                    <input type="text" class="pane-input not-min-zero" data-name="areaSparklineMaximumValue">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.areaSparkline.values.line1@</label>
                                    <input type="number" class="pane-input not-min-zero" data-name="areaSparklineLine1">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.areaSparkline.values.line2@</label>
                                    <input type="number" class="pane-input not-min-zero" data-name="areaSparklineLine2">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.areaSparkline.values.positiveColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="areaSparklinePositiveColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(120, 120, 120);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.areaSparkline.values.negativeColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="areaSparklineNegativeColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 128, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setAreaSparkline">
                                        @sparklineExTab.areaSparkline.values.setButton@
                                    </button>
                                </div>

                            </div>
                            <div id="boxplotSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.points@</label>
                                    <input type="text" class="pane-input" data-name="boxplotSparklinePoints">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.boxplotClass@</label>
                                    <div class="btn-group" data-name="boxplotClassType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="5ns">@sparklineExTab.boxplotClass.fiveNS@</a>
                                            </li>
                                            <li><a class="text localize" data-value="7ns">@sparklineExTab.boxplotClass.sevenNS@</a>
                                            </li>
                                            <li><a class="text localize" data-value="tukey">@sparklineExTab.boxplotClass.tukey@</a>
                                            </li>
                                            <li><a class="text localize"
                                                   data-value="bowley">@sparklineExTab.boxplotClass.bowley@</a></li>
                                            <li><a class="text localize" data-value="sigma3">@sparklineExTab.boxplotClass.sigma@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.scaleStart@</label>
                                    <input type="text" class="pane-input" data-name="boxplotSparklineScaleStart">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.scaleEnd@</label>
                                    <input type="text" class="pane-input" data-name="boxplotSparklineScaleEnd">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.acceptableStart@</label>
                                    <input type="text" class="pane-input" data-name="boxplotSparklineAcceptableStart">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.acceptableEnd@</label>
                                    <input type="text" class="pane-input" data-name="boxplotSparklineAcceptableEnd">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.colorScheme@</label>
                                    <div class="btn-group pane-color-picker" data-name="boxplotSparklineColorScheme">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(210, 210, 210);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.boxplotSparkline.values.style@</label>
                                    <div class="btn-group" data-name="boxplotSparklineStyleType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="0">@sparklineExTab.boxplotStyle.classical@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@sparklineExTab.boxplotStyle.neo@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline check-2items-left" data-name="boxplotSparklineShowAverage">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.boxplotSparkline.values.showAverage@</span>
                                    </label>
                                    <label class="checkbox-inline" data-name="boxplotSparklineVertical">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.boxplotSparkline.values.vertical@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setBoxPlotSparkline">
                                        @sparklineExTab.boxplotSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="bulletSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.measure@</label>
                                    <input type="text" class="pane-input" data-name="bulletSparklineMeasure">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.target@</label>
                                    <input type="text" class="pane-input" data-name="bulletSparklineTarget">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.maxi@</label>
                                    <input type="text" class="pane-input" data-name="bulletSparklineMaxi">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.forecast@</label>
                                    <input type="text" class="pane-input" data-name="bulletSparklineForecast">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.good@</label>
                                    <input type="text" class="pane-input" data-name="bulletSparklineGood">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.bad@</label>
                                    <input type="text" class="pane-input" data-name="bulletSparklineBad">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.tickunit@</label>
                                    <input type="number" class="pane-input" data-name="bulletSparklineTickUnit">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.bulletSparkline.values.colorScheme@</label>
                                    <div class="btn-group pane-color-picker" data-name="bulletSparklineColorScheme">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(146, 208, 80);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline check-1item-right" data-name="bulletSparklineVertical">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.bulletSparkline.values.vertical@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setBulletSparkline">
                                        @sparklineExTab.bulletSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="cascadeSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.cascadeSparkline.values.pointsRange@</label>
                                    <input type="text" class="pane-input" data-name="cascadeSparklinePointsRange">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.cascadeSparkline.values.pointIndex@</label>
                                    <input type="number" class="pane-input" data-name="cascadeSparklinePointIndex">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.cascadeSparkline.values.labelsRange@</label>
                                    <input type="text" class="pane-input" data-name="cascadeSparklineLabelsRange">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.cascadeSparkline.values.minimum@</label>
                                    <input type="text" class="pane-input" data-name="cascadeSparklineMinimum">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.cascadeSparkline.values.maximum@</label>
                                    <input type="text" class="pane-input" data-name="cascadeSparklineMaximum">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.cascadeSparkline.values.positiveColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="cascadeSparklinePositiveColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(140, 191, 100);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.cascadeSparkline.values.negativeColor@</label>
                                    <div class="btn-group pane-color-picker" data-name="cascadeSparklineNegativeColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(214, 96, 77);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline check-1item-right" data-name="cascadeSparklineVertical">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.cascadeSparkline.values.vertical@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setCascadeSparkline">
                                        @sparklineExTab.cascadeSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="compatibleSparklineSetting">
                                <div class="pane-group">
                                    <div class="pane-group-title">
                                        <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                                class="localize">@sparklineExTab.compatibleSparkline.values.data.title@</span></span>
                                    </div>
                                    <div class="pane-group-content">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.data.title@</label>
                                            <input type="text" class="pane-input" data-name="compatibleSparklineData">
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.data.dataOrientation@</label>
                                            <div class="btn-group" data-name="dataOrientationType">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                    <span class="content"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu sparklineExType">
                                                    <li class="default"><a class="text localize" data-value="0">@sparklineExTab.orientation.vertical@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="1">@sparklineExTab.orientation.horizontal@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.data.dateAxisData@</label>
                                            <input type="text" class="pane-input" data-name="compatibleSparklineDateAxisData">
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.data.dataOrientation@</label>
                                            <div class="btn-group" data-name="dateAxisOrientationType">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                    <span class="content"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li class="default"><a class="text localize" data-value="0">@sparklineExTab.orientation.vertical@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="1">@sparklineExTab.orientation.horizontal@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.data.displayEmptyCellAs@</label>
                                            <div class="btn-group" data-name="emptyCellDisplayType">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                    <span class="content"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="text localize" data-value="0">@sparklineExTab.emptyCellDisplayType.gaps@</a>
                                                    </li>
                                                    <li class="default"><a class="text localize" data-value="1">@sparklineExTab.emptyCellDisplayType.zero@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="2">@sparklineExTab.emptyCellDisplayType.connect@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="checkbox-inline" data-name="showDataInHiddenRowOrColumn">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.data.showDataInHiddenRowOrColumn@</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="pane-group">
                                    <div class="pane-group-title">
                                        <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                                class="localize">@sparklineExTab.compatibleSparkline.values.show.title@</span></span>
                                    </div>
                                    <div class="pane-group-content">
                                        <div class="pane-row">
                                            <label class="checkbox-inline check-2items-left"
                                                   data-name="compatibleSparklineShowFirst">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.show.showFirst@</span>
                                            </label>
                                            <label class="checkbox-inline" data-name="compatibleSparklineShowLast">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.show.showLast@</span>
                                            </label>
                                        </div>
                                        <div class="pane-row">
                                            <label class="checkbox-inline check-2items-left"
                                                   data-name="compatibleSparklineShowHigh">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.show.showHigh@</span>
                                            </label>
                                            <label class="checkbox-inline" data-name="compatibleSparklineShowLow">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.show.showLow@</span>
                                            </label>
                                        </div>
                                        <div class="pane-row">
                                            <label class="checkbox-inline check-2items-left"
                                                   data-name="compatibleSparklineShowNegative">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.show.showNegative@</span>
                                            </label>
                                            <label class="checkbox-inline" data-name="compatibleSparklineShowMarkers">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.show.showMarkers@</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pane-group">
                                    <div class="pane-group-title">
                                        <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                                class="localize">@sparklineExTab.compatibleSparkline.values.group.title@</span></span>
                                    </div>

                                    <div class="pane-group-content">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.group.minAxisType@</label>
                                            <div class="btn-group" data-name="minAxisType">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                    <span class="content localize"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="text localize" data-value="individual">@sparklineExTab.axisType.individual@</a>
                                                    </li>
                                                    <li><a class="text localize"
                                                           data-value="group">@sparklineExTab.axisType.group@</a></li>
                                                    <li><a class="text localize" data-value="custom">@sparklineExTab.axisType.custom@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.group.manualMin@</label>
                                            <input type="number" class="pane-input" data-name="manualMin">
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.group.maxAxisType@</label>
                                            <div class="btn-group" data-name="maxAxisType">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                    <span class="content localize"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="text localize" data-value="individual">@sparklineExTab.axisType.individual@</a>
                                                    </li>
                                                    <li><a class="text localize"
                                                           data-value="group">@sparklineExTab.axisType.group@</a></li>
                                                    <li><a class="text localize" data-value="custom">@sparklineExTab.axisType.custom@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.group.manualMax@</label>
                                            <input type="number" class="pane-input" data-name="manualMax">
                                        </div>
                                        <div class="pane-row">
                                            <label class="checkbox-inline check-2items-left" data-name="rightToLeft">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.group.rightToLeft@</span>
                                            </label>
                                            <label class="checkbox-inline" data-name="displayXAxis">
                                                <input type="checkbox">
                                                <span class="localize">@sparklineExTab.compatibleSparkline.values.group.displayXAxis@</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pane-group">
                                    <div class="pane-group-title">
                                        <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                                class="localize">@sparklineExTab.compatibleSparkline.values.style.title@</span></span>
                                    </div>
                                    <div class="pane-group-content">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.negative@</label>
                                            <div class="btn-group pane-color-picker" data-name="compatibleSparklineNegativeColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(165, 42, 42);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.markers@</label>
                                            <div class="btn-group pane-color-picker" data-name="compatibleSparklineMarkersColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(36, 64, 98);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.axis@</label>
                                            <div class="btn-group pane-color-picker" data-name="compatibleSparklineAxisColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(0, 0, 0);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.series@</label>
                                            <div class="btn-group pane-color-picker" data-name="compatibleSparklineSeriesColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(36, 64, 98);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.highMarker@</label>
                                            <div class="btn-group pane-color-picker" data-name="compatibleSparklineHighMarkerColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(0, 0, 255);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.lowMarker@</label>
                                            <div class="btn-group pane-color-picker" data-name="compatibleSparklineLowMarkerColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(0, 0, 255);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.firstMarker@</label>
                                            <div class="btn-group pane-color-picker"
                                                 data-name="compatibleSparklineFirstMarkerColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(149, 179, 215);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.lastMarker@</label>
                                            <div class="btn-group pane-color-picker" data-name="compatibleSparklineLastMarkerColor">
                                                <button type="button" class="btn btn-default btn-pane-dropdown">
                                                    <div class="color-picker" style="background-color: rgb(149, 179, 215);"></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pane-row">
                                            <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.style.lineWeight@</label>
                                            <input type="number" class="pane-input" data-name="compatibleSparklineLastLineWeight">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize"
                                            id="setCompatibleSparkline">@sparklineExTab.compatibleSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>

                            <div id="hbarSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.hbarSparkline.values.value@</label>
                                    <input type="text" class="pane-input" data-name="hbarSparklineValue">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.hbarSparkline.values.colorScheme@</label>
                                    <div class="btn-group pane-color-picker" data-name="hbarSparklineColorScheme">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(128, 128, 128);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setHbarSparkline">
                                        @sparklineExTab.hbarSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="vbarSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.vbarSparkline.values.value@</label>
                                    <input type="text" class="pane-input" data-name="vbarSparklineValue">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.vbarSparkline.values.colorScheme@</label>
                                    <div class="btn-group pane-color-picker" data-name="vbarSparklineColorScheme">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(128, 128, 128);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setVbarSparkline">
                                        @sparklineExTab.vbarSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="paretoSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.paretoSparkline.values.points@</label>
                                    <input type="text" class="pane-input" data-name="paretoSparklinePoints">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.paretoSparkline.values.pointIndex@</label>
                                    <input type="text" class="pane-input" data-name="paretoSparklinePointIndex">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.paretoSparkline.values.colorRange@</label>
                                    <input type="text" class="pane-input" data-name="paretoSparklineColorRange">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.paretoSparkline.values.target@</label>
                                    <input type="text" class="pane-input" data-name="paretoSparklineTarget">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.paretoSparkline.values.target2@</label>
                                    <input type="text" class="pane-input" data-name="paretoSparklineTarget2">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.paretoSparkline.values.highlightPosition@</label>
                                    <input type="text" class="pane-input" data-name="paretoSparklineHighlightPosition">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.compatibleSparkline.values.data.dataOrientation@</label>
                                    <div class="btn-group" data-name="paretoLabelType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu sparklineExType">
                                            <li><a class="text localize" data-value="0">@sparklineExTab.paretoLabel.none@</a></li>
                                            <li class="default"><a class="text localize" data-value="2">@sparklineExTab.paretoLabel.single@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@sparklineExTab.paretoLabel.cumulated@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setParetoSparkline">
                                        @sparklineExTab.paretoSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="scatterSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.points1@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklinePoints1">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.points2@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklinePoints2">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.minX@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineMinX">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.maxX@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineMaxX">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.minY@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineMinY">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.maxY@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineMaxY">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.hLine@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineHLine">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.vLine@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineVLine">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.xMinZone@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineXMinZone">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.xMaxZone@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineXMaxZone">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.yMinZone@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineYMinZone">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.yMaxZone@</label>
                                    <input type="text" class="pane-input" data-name="scatterSparklineYMaxZone">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.color1@</label>
                                    <div class="btn-group pane-color-picker" data-name="scatterSparklineColor1">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(150, 150, 150);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.scatterSparkline.values.color2@</label>
                                    <div class="btn-group pane-color-picker" data-name="scatterSparklineColor2">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(203, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline check-2items-left" data-name="scatterSparklineTags">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.scatterSparkline.values.tags@</span>
                                    </label>
                                    <label class="checkbox-inline" data-name="scatterSparklineDrawSymbol">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.scatterSparkline.values.drawSymbol@</span>
                                    </label>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline check-2items-left" data-name="scatterSparklineDrawLines">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.scatterSparkline.values.drawLines@</span>
                                    </label>
                                    <label class="checkbox-inline" data-name="scatterSparklineDashLine">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.scatterSparkline.values.dashLine@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setScatterSparkline">
                                        @sparklineExTab.scatterSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="spreadSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.spreadSparkline.values.points@</label>
                                    <input type="text" class="pane-input" data-name="spreadSparklinePoints">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.spreadSparkline.values.scaleStart@</label>
                                    <input type="text" class="pane-input" data-name="spreadSparklineScaleStart">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.spreadSparkline.values.scaleEnd@</label>
                                    <input type="text" class="pane-input" data-name="spreadSparklineScaleEnd">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.spreadSparkline.values.style@</label>
                                    <div class="btn-group" data-name="spreadSparklineStyleType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu sparklineExType">
                                            <li class="default"><a class="text localize" data-value="1">@sparklineExTab.spreadStyle.stacked@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@sparklineExTab.spreadStyle.spread@</a></li>
                                            <li><a class="text localize" data-value="3">@sparklineExTab.spreadStyle.jitter@</a></li>
                                            <li><a class="text localize" data-value="4">@sparklineExTab.spreadStyle.poles@</a></li>
                                            <li><a class="text localize" data-value="5">@sparklineExTab.spreadStyle.stackedDots@</a>
                                            </li>
                                            <li><a class="text localize" data-value="6">@sparklineExTab.spreadStyle.stripe@</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.spreadSparkline.values.colorScheme@</label>
                                    <div class="btn-group pane-color-picker" data-name="spreadSparklineColorScheme">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(100, 100, 100);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline check-2items-left" data-name="spreadSparklineShowAverage">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.spreadSparkline.values.showAverage@</span>
                                    </label>
                                    <label class="checkbox-inline" data-name="spreadSparklineVertical">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.spreadSparkline.values.vertical@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setSpreadSparkline">
                                        @sparklineExTab.spreadSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="stackedSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.points@</label>
                                    <input type="text" class="pane-input" data-name="stackedSparklinePoints">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.colorRange@</label>
                                    <input type="text" class="pane-input" data-name="stackedSparklineColorRange">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.labelRange@</label>
                                    <input type="text" class="pane-input" data-name="stackedSparklineLabelRange">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.maximum@</label>
                                    <input type="number" class="pane-input" data-name="stackedSparklineMaximum">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.targetRed@</label>
                                    <input type="number" class="pane-input" data-name="stackedSparklineTargetRed">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.targetGreen@</label>
                                    <input type="number" class="pane-input" data-name="stackedSparklineTargetGreen">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.targetBlue@</label>
                                    <input type="number" class="pane-input" data-name="stackedSparklineTargetBlue">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.targetYellow@</label>
                                    <input type="number" class="pane-input" data-name="stackedSparklineTargetYellow">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="stackedSparklineColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(100, 100, 100);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.highlightPosition@</label>
                                    <input type="text" class="pane-input" data-name="stackedSparklineHighlightPosition">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.spreadSparkline.values.style@</label>
                                    <div class="btn-group" data-name="stackedSparklineTextOrientation">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="text localize" data-value="1">@sparklineExTab.orientation.vertical@</a>
                                            </li>
                                            <li class="default"><a class="text localize" data-value="0">@sparklineExTab.orientation.horizontal@</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.stackedSparkline.values.textSize@</label>
                                    <input type="number" class="pane-input input-width-md"
                                           data-name="stackedSparklineTextSize"><span
                                           class="center-align span-fixed-block">px</span>
                                </div>

                                <div class="pane-row">
                                    <label class="checkbox-inline check-1item-right" data-name="stackedSparklineVertical">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.stackedSparkline.values.vertical@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setStackedSparkline">
                                        @sparklineExTab.stackedSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                            <div id="variSparklineSetting">
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.variance@</label>
                                    <input type="text" class="pane-input" data-name="variSparklineVariance">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.reference@</label>
                                    <input type="text" class="pane-input" data-name="variSparklineReference">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.mini@</label>
                                    <input type="text" class="pane-input" data-name="variSparklineMini">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.maxi@</label>
                                    <input type="text" class="pane-input" data-name="variSparklineMaxi">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.mark@</label>
                                    <input type="text" class="pane-input" data-name="variSparklineMark">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.tickunit@</label>
                                    <input type="text" class="pane-input" data-name="variSparklineTickUnit">
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.colorPositive@</label>
                                    <div class="btn-group pane-color-picker" data-name="variSparklineColorPositive">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(0, 128, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="pane-label localize">@sparklineExTab.variSparkline.values.colorNegative@</label>
                                    <div class="btn-group pane-color-picker" data-name="variSparklineColorNegative">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div class="color-picker" style="background-color: rgb(255, 0, 0);"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="pane-row">
                                    <label class="checkbox-inline check-2items-left" data-name="variSparklineLegend">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.variSparkline.values.legend@</span>
                                    </label>
                                    <label class="checkbox-inline" data-name="variSparklineVertical">
                                        <input type="checkbox">
                                        <span class="localize">@sparklineExTab.variSparkline.values.vertical@</span>
                                    </label>
                                </div>
                                <div class="group-item-divider"></div>
                                <div class="pane-row">
                                    <button type="button" class="btn btn-primary pane-set-button localize" id="setVariSparkline">
                                        @sparklineExTab.variSparkline.values.setButton@
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="dataValidationSetting" class="hidden">
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@dataTab.dataValidation.setting.title@</span></span>
                                </div>
                                <div class="pane-group-content">
                                    <div class="pane-row">
                                        <label class="pane-label localize">@dataTab.dataValidation.setting.values.validatorType.title@</label>
                                        <div class="btn-group" data-name="validatorType">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li class="default"><a class="text localize" data-value="anyvalue-validator">@dataTab.dataValidation.setting.values.validatorType.option.anyValue@</a>
                                                </li>
                                                <li><a class="text localize" data-value="number-validator">@dataTab.dataValidation.setting.values.validatorType.option.number@</a>
                                                </li>
                                                <li><a class="text localize" data-value="list-validator">@dataTab.dataValidation.setting.values.validatorType.option.list@</a>
                                                </li>
                                                <li><a class="text localize" data-value="formulalist-validator">@dataTab.dataValidation.setting.values.validatorType.option.formulaList@</a>
                                                </li>
                                                <li><a class="text localize" data-value="date-validator">@dataTab.dataValidation.setting.values.validatorType.option.date@</a>
                                                </li>
                                                <li><a class="text localize" data-value="textlength-validator">@dataTab.dataValidation.setting.values.validatorType.option.textLength@</a>
                                                </li>
                                                <li><a class="text localize" data-value="formula-validator">@dataTab.dataValidation.setting.values.validatorType.option.custom@</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline check-1item-right" data-name="ignoreBlank">
                                            <input type="checkbox" checked>
                                            <span class="localize">@dataTab.dataValidation.setting.values.ignoreBlank@</span>
                                        </label>
                                    </div>
                                    <div class="group-item-divider"></div>
                                    <div id="validatorNumberType">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@dataTab.dataValidation.setting.values.validatorComparisonOperator.title@</label>
                                            <div class="btn-group" data-name="numberValidatorComparisonOperator">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown">
                                                    <span class="content"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu text-align">
                                                    <li class="default"><a class="text localize" data-value="6">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.between@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="7">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.notBetween@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="0">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.equalTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="1">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.notEqualTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="2">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.greaterThan@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="4">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.lessThan@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="3">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.greaterThanOrEqualTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="5">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.lessThanOrEqualTo@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="numberBetweenOperator">
                                            <div class="pane-row">
                                                <label class="pane-label localize">@dataTab.dataValidation.setting.values.number.minimum@</label>
                                                <input type="text" class="pane-input" data-name="numberMinimum">
                                            </div>
                                            <div class="pane-row">
                                                <label class="pane-label localize">@dataTab.dataValidation.setting.values.number.maximum@</label>
                                                <input type="text" class="pane-input" data-name="numberMaximum">
                                            </div>
                                        </div>
                                        <div id="numberValue">
                                            <div class="pane-row">
                                                <label class="pane-label localize">@dataTab.dataValidation.setting.values.number.value@</label>
                                                <input type="text" class="pane-input" data-name="numberValue">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="pane-row">
                                                <label class="checkbox-inline check-1item-right" data-name="isInteger">
                                                    <input type="checkbox" checked>
                                                    <span class="localize">@dataTab.dataValidation.setting.values.number.isInteger@</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="validatorListType">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@dataTab.dataValidation.setting.values.source@</label>
                                            <input type="text" class="pane-input" data-name="listSource">
                                        </div>
                                    </div>
                                    <div id="validatorFormulaListType">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@dataTab.dataValidation.setting.values.formula@</label>
                                            <input type="text" class="pane-input" data-name="formulaListFormula">
                                        </div>
                                    </div>
                                    <div id="validatorDateType">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@dataTab.dataValidation.setting.values.validatorComparisonOperator.title@</label>
                                            <div class="btn-group" data-name="dateValidatorComparisonOperator">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown">
                                                    <span class="content"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu text-align">
                                                    <li class="default"><a class="text localize" data-value="6">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.between@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="7">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.notBetween@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="0">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.equalTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="1">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.notEqualTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="2">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.greaterThan@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="4">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.lessThan@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="3">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.greaterThanOrEqualTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="5">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.lessThanOrEqualTo@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="dateBetweenOperator">
                                            <div class="pane-row">
                                                <label class="pane-label localize">@dataTab.dataValidation.setting.values.date.startDate@</label>
                                                <input type="text" class="pane-input" data-name="startDate">
                                            </div>
                                            <div class="pane-row">
                                                <label class="pane-label localize">@dataTab.dataValidation.setting.values.date.endDate@</label>
                                                <input type="text" class="pane-input" data-name="endDate">
                                            </div>
                                        </div>
                                        <div id="dateValue">
                                            <div class="pane-row">
                                                <label class="pane-label localize">@dataTab.dataValidation.setting.values.date.value@</label>
                                                <input type="text" class="pane-input" data-name="dateValue">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="pane-row">
                                                <label class="checkbox-inline check-1item-right" data-name="isTime">
                                                    <input type="checkbox" checked>
                                                    <span class="localize">@dataTab.dataValidation.setting.values.date.isTime@</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="validatorTextLengthType">
                                        <div class="pane-row">
                                            <label class="pane-label localize">@dataTab.dataValidation.setting.values.validatorComparisonOperator.title@</label>
                                            <div class="btn-group" data-name="textLengthValidatorComparisonOperator">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                        data-toggle="dropdown">
                                                    <span class="content"></span>
                                                    <span class="caret fixed"></span>
                                                </button>
                                                <ul class="dropdown-menu text-align">
                                                    <li class="default"><a class="text localize" data-value="6">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.between@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="7">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.notBetween@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="0">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.equalTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="1">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.notEqualTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="2">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.greaterThan@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="4">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.lessThan@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="3">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.greaterThanOrEqualTo@</a>
                                                    </li>
                                                    <li><a class="text localize" data-value="5">@dataTab.dataValidation.setting.values.validatorComparisonOperator.option.lessThanOrEqualTo@</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="textLengthBetweenOperator">
                                                <div class="pane-row">
                                                    <label class="pane-label localize">@dataTab.dataValidation.setting.values.number.minimum@</label>
                                                    <input type="number" class="pane-input" data-name="textLengthMinimum">
                                                </div>
                                                <div class="pane-row">
                                                    <label class="pane-label localize">@dataTab.dataValidation.setting.values.number.maximum@</label>
                                                    <input type="number" class="pane-input" data-name="textLengthMaximum">
                                                </div>
                                            </div>
                                            <div id="textLengthValue">
                                                <div class="pane-row">
                                                    <label class="pane-label localize">@dataTab.dataValidation.setting.values.number.value@</label>
                                                    <input type="number" class="pane-input" data-name="textLengthValue">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@dataTab.dataValidation.inputMessage.title@</span></span>
                                </div>
                                <div class="pane-group-content">
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="showInputMessage"><input type="checkbox"
                                                                                                           checked><span
                                                                                                           class="localize">@dataTab.dataValidation.inputMessage.values.showInputMessage@</span></label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="normal localize">@dataTab.dataValidation.inputMessage.values.title@</label>
                                        <input type="text" class="pane-item-fullwidth" data-name="dataValidationInputTitle"
                                               id="dataValidationInputTitle">
                                    </div>
                                    <div class="pane-row">
                                        <label class="normal localize">@dataTab.dataValidation.inputMessage.values.message@</label>
                                        <textarea rows="5" data-name="dataValidationInputMessage" class="pane-item-fullwidth"
                                                  id="dataValidationInputMessage"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-row">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@dataTab.dataValidation.errorAlert.title@</span></span>
                                </div>
                                <div class="pane-group-content">
                                    <label class="pane-label localize">@dataTab.dataValidation.errorAlert.values.alertType.title@</label>
                                    <div class="btn-group" data-name="errorAlert">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="0">@dataTab.dataValidation.errorAlert.values.alertType.option.stop@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@dataTab.dataValidation.errorAlert.values.alertType.option.warning@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@dataTab.dataValidation.errorAlert.values.alertType.option.information@</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="showErrorAlert"><input type="checkbox"
                                                                                                         checked><span
                                                                                                         class="localize">@dataTab.dataValidation.errorAlert.values.showErrorAlert@</span></label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="normal localize">@dataTab.dataValidation.errorAlert.values.title@</label>
                                        <input type="text" class="pane-item-fullwidth" data-name="dataValidationErrorAlertTitle"
                                               id="dataValidationErrorAlertTitle">
                                    </div>
                                    <div class="pane-row">
                                        <label class="normal localize">@dataTab.dataValidation.errorAlert.values.message@</label>
                                        <textarea rows="5" data-name="dataValidationErrorAlertMessage" class="pane-item-fullwidth"
                                                  id="dataValidationErrorAlertMessage"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-row">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@dataTab.dataValidation.highlightStyle.title@</span></span>
                                </div>
                                <div id="highlightStyleType" class="pane-group-content">
                                    <label class="pane-label localize">@dataTab.dataValidation.highlightStyle.highType@</label>
                                    <div class="btn-group" data-name="highlightType">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="0">@dataTab.dataValidation.highlightStyle.type.circle@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@dataTab.dataValidation.highlightStyle.type.dogear@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@dataTab.dataValidation.highlightStyle.type.icon@</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <label class="pane-label localize">@dataTab.dataValidation.highlightStyle.color@</label>
                                    <div class="btn-group pane-color-picker" data-name="highlightStyleColor">
                                        <button type="button" class="btn btn-default btn-pane-dropdown">
                                            <div id="high-color" class="color-picker" style="background-color: rgb(255, 0, 0);"></div>
                                        </button>
                                    </div>
                                    <!-- <div class="pane-row">
                                        <label class="normal localize">@dataTab.dataValidation.highlightStyle.color@</label>
                                        <input type="text" class="pane-item-fullwidth" id="highlightColor" data-name="highlightStyleColor"
                                               id="highlightStyleColor">
                                    </div> -->
                                    <label id="dogearPositionLabel" class="pane-label localize" style="display:none">@dataTab.dataValidation.highlightStyle.position@</label>
                                    <div id="dogearPositionList" class="btn-group "  style="display:none" data-name="dogearPosition">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="0">@dataTab.dataValidation.highlightStyle.dogearPosition.tl@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@dataTab.dataValidation.highlightStyle.dogearPosition.tr@</a>
                                            </li>
                                            <li><a class="text localize" data-value="2">@dataTab.dataValidation.highlightStyle.dogearPosition.bl@</a>
                                            </li>
                                            <li><a class="text localize" data-value="3">@dataTab.dataValidation.highlightStyle.dogearPosition.br@</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <label id="iconPositionLabel" class="pane-label localize "  style="display:none">@dataTab.dataValidation.highlightStyle.position@</label>
                                    <div id="iconPositionList" class="btn-group " data-name="iconPosition"  style="display:none">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="content"></span>
                                            <span class="caret fixed"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="default"><a class="text localize" data-value="0">@dataTab.dataValidation.highlightStyle.iconPosition.ol@</a>
                                            </li>
                                            <li><a class="text localize" data-value="1">@dataTab.dataValidation.highlightStyle.iconPosition.or@</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="datavalidationSelectFile" class="pane-row "  style="display:none">
                                        <input id="highlighticon" type="file" accept="image/*">
                                    </div>
                                </div> 
                            </div>

                            <div class="group-item-divider"></div>

                            <div class="pane-row">
                                <button type="button" class="btn btn-primary localize" data-name="clearDataValidatorSettings"
                                        id="clearDataValidatorSettings">@dataTab.dataValidation.clearAllButton@
                                </button>
                                <button type="button" class="btn btn-primary localize" id="setDataValidator">
                                    @dataTab.dataValidation.setButton@
                                </button>
                            </div>
                        </div>

                        <div id="functionBuiilder" class="hidden">
                            <div><input type="text" placeholder="Search function" class="pane-item-fullwidth"></div>
                            <br/>
                            <ul class="function-list">

                            </ul>
                            <div class="pane-row">
                                <p class="function-description localize">
                                    @functions.setting.defaultDescription@
                                </p>
                            </div>
                        </div>

                        <div id="findOptions" class="findOptions hidden">
                            <div class="pane-row">
                                <label class="pane-label localize">@find.findwhat@</label>
                                <input type="text" class="pane-input" data-name="findwhat">
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@find.options@</span></span>
                                </div>
                                <div class="pane-group-content">
                                    <div class="pane-row">
                                        <label class="pane-label localize">@find.within.title@</label>
                                        <input type="radio" name="findin" id="findin_worksheet" value="worksheet" checked><label
                                            class="localize" for="findin_worksheet">@find.within.worksheet@</label>
                                        <input type="radio" name="findin" id="findin_workbook" value="workbook"><label
                                            class="localize" for="findin_workbook">@find.within.workbook@</label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@find.searchby.title@</label>
                                        <input type="radio" name="searchby" id="searchby_rows" value="rows" checked><label
                                            class="localize" for="searchby_rows">@find.searchby.rows@</label>
                                        <input type="radio" name="searchby" id="searchby_columns" value="columns"><label
                                            class="localize" for="searchby_columns">@find.searchby.columns@</label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@find.lookin.title@</label>
                                        <input type="radio" name="lookin" id="lookin_values" value="values" checked><label
                                            class="localize" for="lookin_values">@find.lookin.values@</label>
                                        <input type="radio" name="lookin" id="lookin_formulas" value="formulas"><label
                                            class="localize" for="lookin_formulas">@find.lookin.formulas@</label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="findMatchCase"><input type="checkbox"><span
                                                class="localize">@find.matchcase@</span></label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="findMatchExactly"><input type="checkbox"><span
                                                class="localize">@find.matchexactly@</span></label>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="findUseWildcards"><input type="checkbox"><span
                                                class="localize">@find.usewildcards@</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-row">
                                <button type="button" class="btn btn-primary localize" id="findall">@find.findall@</button>
                                <button type="button" class="btn btn-primary localize" id="findnext">@find.findnext@</button>
                            </div>
                            <div class="pane-row findoutput">
                                <div class="findresult">
                                    <table class="resultlist">
                                        <thead>
                                            <tr>
                                                <th class="localize">@find.result.header.sheet@</th>
                                                <th class="localize">@find.result.header.cell@</th>
                                                <th class="localize">@find.result.header.value@</th>
                                                <th class="localize">@find.result.header.formula@</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <label class="resultcount localize"></label>
                            </div>
                        </div>

                        <div id="slicerSetting" class="hidden">
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@slicerTab.general.title@</span></span>
                                </div>

                                <div class="pane-group-content">
                                    <div class="pane-row">
                                        <label class="pane-label localize">@slicerTab.general.name@</label>
                                        <input type="text" class="pane-input" data-name="slicerName">
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@slicerTab.general.captionName@</label>
                                        <input type="text" class="pane-input" data-name="slicerCaptionName">
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@slicerTab.general.itemSorting.title@</label>
                                        <div class="btn-group" data-name="slicerItemSorting">
                                            <button type="button" class="btn btn-default dropdown-toggle btn-pane-dropdown"
                                                    data-toggle="dropdown">
                                                <span class="content"></span>
                                                <span class="caret fixed"></span>
                                            </button>
                                            <ul class="dropdown-menu text-align">
                                                <li><a class="text localize" data-value="0">@slicerTab.general.itemSorting.option.none@</a>
                                                </li>
                                                <li class="default"><a class="text localize" data-value="1">@slicerTab.general.itemSorting.option.ascending@</a>
                                                </li>
                                                <li><a class="text localize" data-value="2">@slicerTab.general.itemSorting.option.descending@</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="displaySlicerHeader"><input type="checkbox"
                                                                                                              checked><span
                                                                                                              class="localize">@slicerTab.general.displayHeader@</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@slicerTab.slicerStyle.title@</span></span>
                                </div>

                                <div class="pane-group-content">
                                    <div class="slicer-format-2013">
                                        <div class="light-format-slicer slicer-format-category-div">
                                            <div class="slicer-format-label-container">
                                                <label class="slicer-format-label localize">@slicerTab.slicerStyle.groupTitle.light@</label>
                                            </div>
                                            <div class="slicer-style-preview">
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.light.light1@">
                                                    <div class="slicer-format-icon slicer-format-light1" data-name="light1"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.light.light2@">
                                                    <div class="slicer-format-icon slicer-format-light2" data-name="light2"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.light.light3@">
                                                    <div class="slicer-format-icon slicer-format-light3" data-name="light3"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.light.light4@">
                                                    <div class="slicer-format-icon slicer-format-light4" data-name="light4"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.light.light5@">
                                                    <div class="slicer-format-icon slicer-format-light5" data-name="light5"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.light.light6@">
                                                    <div class="slicer-format-icon slicer-format-light6" data-name="light6"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.other.other1@">
                                                    <div class="slicer-format-icon slicer-format-other1" data-name="other1"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.other.other2@">
                                                    <div class="slicer-format-icon slicer-format-other2" data-name="other2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dark-format-slicer slicer-format-category-div">
                                            <div class="slicer-format-label-container">
                                                <label class="slicer-format-label localize">@slicerTab.slicerStyle.groupTitle.dark@</label>
                                            </div>
                                            <div class="slicer-style-preview">
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.dark.dark1@">
                                                    <div class="slicer-format-icon slicer-format-dark1" data-name="dark1"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.dark.dark2@">
                                                    <div class="slicer-format-icon slicer-format-dark2" data-name="dark2"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.dark.dark3@">
                                                    <div class="slicer-format-icon slicer-format-dark3" data-name="dark3"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.dark.dark4@">
                                                    <div class="slicer-format-icon slicer-format-dark4" data-name="dark4"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.dark.dark5@">
                                                    <div class="slicer-format-icon slicer-format-dark5" data-name="dark5"></div>
                                                </div>
                                                <div class="slicer-format-item localize-tooltip"
                                                     title="@slicerTab.slicerStyle.dark.dark6@">
                                                    <div class="slicer-format-icon slicer-format-dark6" data-name="dark6"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@slicerTab.layout.title@</span></span>
                                </div>

                                <div class="pane-group-content">
                                    <div class="pane-row">
                                        <label class="pane-label localize">@slicerTab.layout.columnNumber@</label>
                                        <input type="number" class="pane-input" data-name="slicerColumnNumber">
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@slicerTab.layout.buttonHeight@</label>
                                        <input type="number" class="pane-input" data-name="slicerButtonHeight">
                                    </div>
                                    <div class="pane-row">
                                        <label class="pane-label localize">@slicerTab.layout.buttonWidth@</label>
                                        <input type="number" class="pane-input" data-name="slicerButtonWidth">
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@slicerTab.property.title@</span></span>
                                </div>

                                <div class="pane-group-content padding-left-space">
                                    <div class="pane-row">
                                        <input type="radio" name="slicerMoveAndSize" id="slicer-move-size"
                                               data-value="slicer-move-size" checked><label class="localize" for="slicer-move-size">@slicerTab.property.moveAndSize@</label>
                                    </div>
                                    <div class="pane-row">
                                        <input type="radio" name="slicerMoveAndSize" id="slicer-move-nosize"
                                               data-value="slicer-move-nosize"><label class="localize" for="slicer-move-nosize">@slicerTab.property.moveAndNoSize@</label>
                                    </div>
                                    <div class="pane-row">
                                        <input type="radio" name="slicerMoveAndSize" id="slicer-nomove-size"
                                               data-value="slicer-nomove-size" checked><label class="localize"
                                               for="slicer-nomove-size">@slicerTab.property.noMoveAndSize@</label>
                                    </div>
                                    <div class="group-item-divider"></div>
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="lockSlicer"><input type="checkbox" checked><span
                                                class="localize">@slicerTab.property.locked@</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pane-group">
                                <div class="pane-group-title">
                                    <span><span class="glyphicon glyphicon-triangle-right pane-glyphicon"></span><span
                                            class="localize">@slicerTab.filter.title@</span></span>
                                </div>

                                <div class="pane-group-content padding-left-space">
                                    <div class="pane-row">
                                        <label class="checkbox-inline" data-name="hide-no-data"><input type="checkbox"><span
                                                class="localize">@slicerTab.filter.hideItemsWithNoData@</span></label>
                                    </div>
                                    <div class="padding-left-space">
                                        <div class="pane-row">
                                            <label class="checkbox-inline" data-name="mark-no-data"><input type="checkbox"><span
                                                    class="localize">@slicerTab.filter.markNoData@</span></label>
                                        </div>
                                        <div class="padding-left-space">
                                            <div class="pane-row">
                                                <label class="checkbox-inline" data-name="show-no-data-last"><input type="checkbox"
                                                                                                                    checked><span
                                                                                                                    class="localize">@slicerTab.filter.showNoDataLast@</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="setfontstyle" style="display: none"></div>
                <div id="colorPicker" class="colorPickerContainer">
                    <div class="header"></div>
                    <div class="themeColorsLabel"></div>
                    <div class="colorPicker themeColorsContainer">
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                    </div>
                    <div class="standardColorsLabel"></div>
                    <div class="colorPicker standardColorsContainer">
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                        <div class="color-cell"></div>
                    </div>
                    <div class="colorPicker nofill">
                        <div class="nofill-Color" style="background-color: white;"></div>
                        <div class="nofill-Text"></div>
                    </div>
                    <div class="colorPicker autocolor">
                        <div class="auto-Color" style="background-color: white;"></div>
                        <div class="auto-Text"></div>
                    </div>
                </div>

                <div id="chart-color-picker" class="chartColorPicker">
                </div>

                <div id="chart-add-element" class="chartAddElement">
                    <div id="add-chart-element-submenu" class="addChartElementSubMenu"></div>
                </div>

                <div class="chart-layout-list-container">
                </div>

                <div id="tableStyles" class="table-format-2013">
                    <div class="light-format-table table-format-category-div">
                        <div class="table-format-label-container">
                            <label class="table-format-label localize">@tableTab.tableStyle.groupTitle.light@</label>
                        </div>
                        <div class="table-style-preview">
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.none@">
                                <div class="table-format-icon table-format-none" data-name="none"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light1@">
                                <div class="table-format-icon table-format-light1" data-name="light1"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light2@">
                                <div class="table-format-icon table-format-light2" data-name="light2"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light3@">
                                <div class="table-format-icon table-format-light3" data-name="light3"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light4@">
                                <div class="table-format-icon table-format-light4" data-name="light4"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light5@">
                                <div class="table-format-icon table-format-light5" data-name="light5"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light6@">
                                <div class="table-format-icon table-format-light6" data-name="light6"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light7@">
                                <div class="table-format-icon table-format-light7" data-name="light7"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light8@">
                                <div class="table-format-icon table-format-light8" data-name="light8"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light9@">
                                <div class="table-format-icon table-format-light9" data-name="light9"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light10@">
                                <div class="table-format-icon table-format-light10" data-name="light10"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light11@">
                                <div class="table-format-icon table-format-light11" data-name="light11"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light12@">
                                <div class="table-format-icon table-format-light12" data-name="light12"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light13@">
                                <div class="table-format-icon table-format-light13" data-name="light13"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light14@">
                                <div class="table-format-icon table-format-light14" data-name="light14"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light15@">
                                <div class="table-format-icon table-format-light15" data-name="light15"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light16@">
                                <div class="table-format-icon table-format-light16" data-name="light16"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light17@">
                                <div class="table-format-icon table-format-light17" data-name="light17"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light18@">
                                <div class="table-format-icon table-format-light18" data-name="light18"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light19@">
                                <div class="table-format-icon table-format-light19" data-name="light19"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light20@">
                                <div class="table-format-icon table-format-light20" data-name="light20"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.light.light21@">
                                <div class="table-format-icon table-format-light21" data-name="light21"></div>
                            </div>
                        </div>
                    </div>

                    <div class="medium-format-table table-format-category-div">
                        <div class="table-format-label-container">
                            <label class="table-format-label localize">@tableTab.tableStyle.groupTitle.medium@</label>
                        </div>
                        <div class="table-style-preview">
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium1@">
                                <div class="table-format-icon table-format-medium1" data-name="medium1"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium2@">
                                <div class="table-format-icon table-format-medium2" data-name="medium2"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium3@">
                                <div class="table-format-icon table-format-medium3" data-name="medium3"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium4@">
                                <div class="table-format-icon table-format-medium4" data-name="medium4"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium5@">
                                <div class="table-format-icon table-format-medium5" data-name="medium5"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium6@">
                                <div class="table-format-icon table-format-medium6" data-name="medium6"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium7@">
                                <div class="table-format-icon table-format-medium7" data-name="medium7"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium8@">
                                <div class="table-format-icon table-format-medium8" data-name="medium8"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium9@">
                                <div class="table-format-icon table-format-medium9" data-name="medium9"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium10@">
                                <div class="table-format-icon table-format-medium10" data-name="medium10"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium11@">
                                <div class="table-format-icon table-format-medium11" data-name="medium11"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium12@">
                                <div class="table-format-icon table-format-medium12" data-name="medium12"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium13@">
                                <div class="table-format-icon table-format-medium13" data-name="medium13"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium14@">
                                <div class="table-format-icon table-format-medium14" data-name="medium14"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium15@">
                                <div class="table-format-icon table-format-medium15" data-name="medium15"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium16@">
                                <div class="table-format-icon table-format-medium16" data-name="medium16"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium17@">
                                <div class="table-format-icon table-format-medium17" data-name="medium17"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium18@">
                                <div class="table-format-icon table-format-medium18" data-name="medium18"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium19@">
                                <div class="table-format-icon table-format-medium19" data-name="medium19"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium20@">
                                <div class="table-format-icon table-format-medium20" data-name="medium20"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium21@">
                                <div class="table-format-icon table-format-medium21" data-name="medium21"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium22@">
                                <div class="table-format-icon table-format-medium22" data-name="medium22"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium23@">
                                <div class="table-format-icon table-format-medium23" data-name="medium23"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium24@">
                                <div class="table-format-icon table-format-medium24" data-name="medium24"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium25@">
                                <div class="table-format-icon table-format-medium25" data-name="medium25"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium26@">
                                <div class="table-format-icon table-format-medium26" data-name="medium26"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium27@">
                                <div class="table-format-icon table-format-medium27" data-name="medium27"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.medium.medium28@">
                                <div class="table-format-icon table-format-medium28" data-name="medium28"></div>
                            </div>
                        </div>
                    </div>

                    <div class="dark-format-table table-format-category-div">
                        <div class="table-format-label-container">
                            <label class="table-format-label localize">@tableTab.tableStyle.groupTitle.dark@</label>
                        </div>
                        <div class="table-style-preview">
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark1@">
                                <div class="table-format-icon table-format-dark1" data-name="dark1"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark2@">
                                <div class="table-format-icon table-format-dark2" data-name="dark2"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark3@">
                                <div class="table-format-icon table-format-dark3" data-name="dark3"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark4@">
                                <div class="table-format-icon table-format-dark4" data-name="dark4"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark5@">
                                <div class="table-format-icon table-format-dark5" data-name="dark5"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark6@">
                                <div class="table-format-icon table-format-dark6" data-name="dark6"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark7@">
                                <div class="table-format-icon table-format-dark7" data-name="dark7"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark8@">
                                <div class="table-format-icon table-format-dark8" data-name="dark8"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark9@">
                                <div class="table-format-icon table-format-dark9" data-name="dark9"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark10@">
                                <div class="table-format-icon table-format-dark10" data-name="dark10"></div>
                            </div>
                            <div class="table-format-item localize-tooltip" title="@tableTab.tableStyle.dark.dark11@">
                                <div class="table-format-icon table-format-dark11" data-name="dark11"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="modalTemplate" role="dialog" data-backdrop="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default localize" id="dialogConfirm">@dialog.ok@</button>
                                <button type="button" class="btn btn-default localize" data-dismiss="modal">@dialog.cancel@</button>
                            </div>
                        </div>
                    </div>
                </div>
                <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT462SJ"
                                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            </div>
        </div>
    </div>
</div>

@endsection