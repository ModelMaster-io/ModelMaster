@extends('app')

@section('scripts_and_styles')

<link href="{{ URL::asset('css/ip.grid.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/> <!-- 'nano' theme -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ URL::asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>    
<script src="{{ URL::asset('js/ip.grid.js') }}"></script>

<!-- JS for lesson page -->
<script src="{{ URL::asset('js/custom-lessons.js') }}"></script>

@endsection


@section('content')

<div class="title">Lesson 1</div> 

<div class="lesson">
<div class="lesson-contant">
<div class="lesson-contant-left">
    <span class="lc-title">Instructions</span>
    <div class="lesson-contant-left-tab">

        <div class="lesson-contant-left-tab-menu">
            <ul class="lesson-menu spread_steps_clk">
                <li><a href="javascript:void(0)" class="active" data-step="step1">1</a></li>
                <li><a href="javascript:void(0)" data-step="step2">2</a></li>
                <li><a href="javascript:void(0)" data-step="step3">3</a></li>
                <li><a href="javascript:void(0)" data-step="step4">4</a></li>
            </ul>
        </div>

        <div class="lcltc-in">
            <div class="lesson-contant-left-tab-contant">

                <div class="lcltc1" id="step1" style="display:block">
                    <span class="lcltc1-title">Step 1</span>
                    <span class="lcltc1-contant">Starting in cell G3, put column headings for 7 years starting two years before the current year.</span>
                </div>

                <div class="lcltc1" id="step2" style="display:none">
                    <span class="lcltc1-title">Step 2</span>
                </div>

                <div class="lcltc1" id="step3" style="display:none">
                    <span class="lcltc1-title">Step 3</span>
                </div>

                <div class="lcltc1" id="step4" style="display:none">
                    <span class="lcltc1-title">Step 4</span>
                    <span class="lcltc1-contant">Now that you've input historical Subscription and License Revenue, sum them up to calculate total revenue for 2017 and 2018</span>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="lesson-contant-right">
    <span class="lc-title">Income Statement</span>
    <div class="sprd_meu_funs">
   <ul>
      <li><a href="javascript:void(0)" class="indendation_left">Indend(>)</a></li>
      <li><a href="javascript:void(0)" class="indendation_right">Indend(<)</a></li>
      <li><a href="javascript:void(0)" class="change_to_percentage">%</a></li>
      <li><a href="javascript:void(0)" class="change_to_currency">dlr</a></li>
      <li><a href="javascript:void(0)" class="change_to_number">num</a></li>
      <li><a href="javascript:void(0)" data-effect="bold" class="model-style-effect">B</a></li>
      <li><a href="javascript:void(0)"  data-effect="italic" class="model-style-effect">I</a></li>
      <li><a href="javascript:void(0)"  data-effect="underline" class="model-style-effect">U</a></li>
      <li><a href="javascript:void(0)"  data-effect="line-through" class="model-style-effect">$</a></li>
      <li>
         <select class="sheet_font_sz">
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option selected>11</option>
            <option>12</option>
            <option>14</option>
            <option>18</option>
            <option>24</option>
            <option>36</option>
         </select>
      </li>
      <li><a href="javascript:void(0)" class="font-color-pick">A<span class="color-picker"></span></a></li>
      <li><a href="javascript:void(0)" class="font-color-pick">BG<span class="bg-color-picker"></span></a></li>
      <li><a href="javascript:void(0)" class="undo_spreadsheet">Undo</a></li>
      <li>
         <select class="math_options">
            <option value="" selected>Math Functions</option>
            <option value="sum">SUM</option>
            <option value="avg">AVG</option>
            <option value="max">MAX</option>
            <option value="min">MIN</option>
            <option value="count">COUNT</option>
            <option value="concat">CONCAT</option>
         </select>
      </li>
      <li>
         <select class="brdr_option">
            <option value="">Select Border</option>
            <option value="all">All</option>
            <option value="top">Border Top</option>
            <option value="bottom">Border Bottom</option>
            <option value="left">Border Left</option>
            <option value="right">Border Right</option>
            <option value="inner">Border Inner</option>
            <option value="outer">Border Outer</option>
            <option value="horizontal">Border Horizontal</option>
            <option value="vertical">Border Vertical</option>
            <option value="none">Remove Border</option>
         </select>
      </li>
      <li>
         <select class="border_style_options">
            <option value="" selected>Border Styles</option>
            <option value="solid">Solid</option>
            <option value="dashed">Dashed</option>
            <option value="dotted">Dotted</option>
            <option value="double">Double</option>
         </select>
      </li>
      <li>
         <select class="change_decimal_points">
            <option value="">Decimal</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
         </select>
      </li>
   </ul>
</div>
    <div class="lesson-contant-left-editar" oncontextmenu="return false;">
        <div class="gridContainer">
            <div id="model_master_spreadsheet"></div>
        </div>
        <ul class='spreadsheet-context-menu'>
            <li><a href="javascript:void(0)" data-effect="bold" class="model-style-effect">B</a></li>
            <li><a href="javascript:void(0)"  data-effect="italic" class="model-style-effect">I</a></li>
            <li><a href="javascript:void(0)"  data-effect="underline" class="model-style-effect">U</a></li>
            <li><a href="javascript:void(0)"  data-effect="line-through" class="model-style-effect">$</a></li>
            <li>Font Size:<select class="sheet_font_sz"><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option selected>11</option><option>12</option><option>14</option><option>18</option><option>24</option><option>36</option></select></li>
            <li><a href="javascript:void(0)" class="font-color-pick">Font color<span class="color-picker"></span></a></li>
            <li><a href="javascript:void(0)" class="font-color-pick">BG Color<span class="bg-color-picker"></span></a></li>
            <li><a href="javascript:void(0)" class="undo_spreadsheet">Undo</a></li>
            <li><a href="javascript:void(0)" class="insert_row">Insert Row</a></li>
            <li><a href="javascript:void(0)" class="delete_row">Delete Row</a></li>
            <li><a href="javascript:void(0)" class="insert_column">Insert Column</a></li>
            <li><a href="javascript:void(0)" class="delete_column">Delete Column</a></li>
        </ul>
    </div>
</div>
</div>
</div>

@endsection