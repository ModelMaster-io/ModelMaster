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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

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
                    <span class="lcltc1-contant">

                    <strong>Step 1:</strong> Throughout this lesson, you will learn the elements of a simple 3-statement financial model. The three core financial statements are the income statement, the balance sheet, and the cash flow statement. These statements are the basis for any analysis of a company. It's the starting point for valuations, comparisons against other companies, evaluation of a company’s budget, among many other things. 

                    You will be building each of these statements for an illustrative software company called "FakeSoftwareCo" for an 8 year time period going from 2017 to 2024. There are 12 sections we will work through to build this model.

                    The income statement shows you a company's profitability over a time period. The cash flow statement shows how cash moves in and out of the business over a time period. We'll explain in more detail later, but the two statements are different because the accounting principles that define profitability are not tied to when you pay or receive cash payment.

                    The third statement, you'll learn how to build is the balance sheet. The balance sheet is different from the other two statements because it shows information at a single point in time. It shows at the end of the time period, what assets the company has and how those assets are financed. 
                    </span>
                    <span class="lcltc1-contant">
                    <strong>Step 1:</strong> The first step in building out a full financial model, is to find the information you need about the company. For the sake of this course, we're going to assume that you have the information you need to build the model. For our work we're going to start by labeling the income statement.
                    Once you have the information, you want to lay out the structure in your spreadsheet. Let’s start with the Income Statement. In cell B2, type "FakeSoftwareCo Income Statement" so that we have a header for the first statement.
                    </span>
                    <span class="lcltc1-contant">
                    <strong>Step 2.</strong> Formatting is an extremely important part of financial modeling because it determines whether people can clearly understand and interpret your document. We will format the content as we go through this course. The formatting we do in this course is just one of several ways that you could format the content.
                    Fill the background in cells B2:N2 with a dark blue fill. Then in cell B2 change the text color to white and bold the text.
                    </span>
                    <span class="lcltc1-contant">
                    <strong>Step 3:</strong> Next we're going to tell people what units we're using on the model. Depending on the context, "100" could be $100, $100,000, or $100,000,000.
                    In this model we're going to show all our numbers in millions. In cell B4, type "($ in millions)" so that anyone reading our model knows what units we're using. Italicize it so that it is clear the information doesn't impact our model.
                    </span>
                    <span class="lcltc1-contant">
                    <strong>Step 4:</strong> Next, we will lay out the time periods that we are doing our analysis for. Financial models can be built on a monthly, quarterly, annually, or any other required time frame. In this model we're going show the information annually.
                    Starting in cell G4, type the years from 2017 to 2024. Select cells B4:N4 and add a bottom border
                    Step 5: Finally, to help with the spacing on the page, change the row height for row 3 to "5"
                    </span>

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
      <li><a href="javascript:void(0)" class="merge_cells">&#8644;</a></li>
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