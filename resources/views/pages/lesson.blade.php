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

<style>
    .gridContainer {
        width:100%;
        height:100%;
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        left: 0;
    }
    #model_master_spreadsheet {
        width:100%;
        height:100%;
    }
    .lesson-contant-left-editar{
        position: relative;
        overflow: hidden;
    }
    .sprd_meu_funs ul li {
        display: inline-block;
        background: #29b473;
        color: #fff;
        margin: 0 5px;
        width: 30px;
        text-align: center;
    }
    .sprd_meu_funs ul li:first-child {
        margin-left: 0;
    }
    .sprd_meu_funs ul li a{
        color: #fff;
    }
    select.sheet_font_sz {
        float: left;
        width: 50px;
    }

    /* Spreadsheet right click panel */
    .custom-menu {
        display: none;
        z-index: 1000;
        position: absolute;
        overflow: hidden;
        border: 1px solid #CCC;
        white-space: nowrap;
        font-family: sans-serif;
        background: #FFF;
        color: #333;
        border-radius: 5px;
        padding: 0;
    }

    /* Each of the items in the list */
    .custom-menu li {
        padding: 8px 12px;
        cursor: pointer;
        list-style-type: none;
        transition: all .3s ease;
        user-select: none;
    }

    .custom-menu li:hover {
        background-color: #DEF;
    }
</style>

<script>
    jQuery(document).ready(function () {

        jQuery('#model_master_spreadsheet').ip_Grid({ rows: 10000,  cols: 26 });

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

        jQuery('.ip_grid_cell').on('click', function(e){
            console.log('clicked', this);
        });

        /*jQuery(document).bind("contextmenu", function (event) {
            // Avoid the real one
            event.preventDefault();

            var x = jQuery(".gridContainer").offset();
            // Show contextmenu
            jQuery(".custom-menu").finish().toggle(100).
            // In the right position (the mouse)
            css({
                top: (event.pageY - x.top) + "px",
                left: (event.pageX - x.left) + "px"
            });
        });

        // If the document is clicked somewhere
        jQuery(document).bind("mousedown", function (e) {
            // If the clicked element is not the menu
            if (!jQuery(e.target).parents(".custom-menu").length > 0) {
                // Hide it
                jQuery(".custom-menu").hide(100);
            }
        });

        // If the menu element is clicked
        jQuery(".custom-menu li").click(function(){
            // This is the triggered action name
            switch(jQuery(this).attr("data-action")) {
                // A case for each action. Your actions here
                case "first": alert("first"); break;
                case "second": alert("second"); break;
                case "third": alert("third"); break;
            }
            // Hide it AFTER the action was triggered
            jQuery(".custom-menu").hide(100);
        });*/


    });
</script>

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