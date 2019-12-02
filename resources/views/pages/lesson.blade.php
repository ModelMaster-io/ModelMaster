@extends('app')

@section('scripts_and_styles')
<link href="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>    
<script src="js/ip.grid.js"></script>
<script src="js/custom-lessons.js"></script>
<script src="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.js" type="text/javascript"></script>
<script src="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.ui.position.min.js" type="text/javascript"></script>
<link href="css/ip.grid.css" rel="stylesheet" />

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
    <div class="lesson-contant-left-editar" oncontextmenu="return false;">
        <div class="gridContainer">
            <div id="model_master_spreadsheet"></div>
        </div>

    </div>
</div>
</div>
</div>

@endsection