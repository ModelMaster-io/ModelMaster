@extends('app')

@section('scripts_and_styles')

<link href="{{ URL::asset('css/ip.grid.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/> <!-- 'nano' theme -->
<link href="https://cdn.jsdelivr.net/tipped/4.0.10/css/tipped/tipped.css" rel="stylesheet"/>

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
<!-- <script src="{{ URL::asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>     -->
<!-- <script src="{{ URL::asset('js/ip.grid.js') }}"></script> -->
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
<script src="{{ URL::asset('js/custom-lessons.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js" integrity="sha256-LJkWYMcB83+zN8VO3EnSoNYHiBo93miOF47ZfsPSNDQ=" crossorigin="anonymous"></script>

<style>
    #ssvp_vp, #ss_tabStrip{
        width: 100% !important;
        float: right;
    }
</style>

@endsection


@section('content')

<div class="title">Simple 3-Statement Model</div> 

<div class="lesson">
    <div class="lesson-contant">
        <div class="lesson-contant-left">
            <div class="lesson-contant-left-tab">

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

                        <div class="lcltc1" id="step1" style="display:block">
                            <span class="lcltc1-title">Overview</span>
                            <div class="lcltc1-contant">
                                <div class="lcltc1-mm">
                                    <div class="sub-lesson-step-contant" id="sub1-step1" style="display:block">
                                        <p>Throughout this lesson, you will learn the elements of a simple 3-statement financial model. The three core financial statements are the income statement, the balance sheet, and the cash flow statement. These statements are the basis for any analysis of a company. It's the starting point for valuations, comparisons against other companies, evaluation of a company’s budget, among many other things.</p>

                                        <p>You will be building each of these statements for an illustrative software company called "FakeSoftwareCo" for an 8 year time period going from 2017 to 2024. There are 12 sections we will work through to build this model.</p>

                                        <p>The income statement shows you a company's profitability over a time period. The cash flow statement shows how cash moves in and out of the business over a time period. We'll explain in more detail later, but the two statements are different because the accounting principles that define profitability are not tied to when you pay or receive cash payment.</p>

                                        <p>The third statement, you'll learn how to build is the balance sheet. The balance sheet is different from the other two statements because it shows information at a single point in time. It shows at the end of the time period, what assets the company has and how those assets are financed.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub1-step2" style="display:none">
                                        <p>The first step in building out a full financial model, is to find the information you need about the company. For the sake of this course, we're going to assume that you have the information you need to build the model. For our work we're going to start by labeling the income statement.</p>

                                        <p>Once you have the information, you want to lay out the structure in your spreadsheet. Let’s start with the Income Statement. In cell B2, type "FakeSoftwareCo Income Statement" so that we have a header for the first statement. In the column label at the top of the spreadsheet, double click on the line between column B and column C so that the entire label shows.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub1-step3" style="display:none">
                                        <p>Formatting is an extremely important part of financial modeling because it determines whether people can clearly understand and interpret your document. We will format the content as we go through this course. The formatting we do in this course is just one of several ways that you could format a model.</p>

                                        <p>Fill the background in cells B2:J2 with a dark blue fill by clicking on the paint can in the menu bar and selecting dark blue. Then in cell B2, select the "A" next to the paint can to change the text color to white and  press the "B" at the far left of the menu bar to bold the text.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub1-step4" style="display:none">
                                        <p>Next we're going to tell people what units we're using on the model. Depending on the context, "100" could be $100, $100,000, or $100,000,000.</p>

                                        <p>In this model we're going to show all our numbers in millions. In cell B4, type "($ in millions)" so that anyone reading our model knows what units we're using. Use the "I" in the menu bar next to the bold button to italicize it so that it is clear the information doesn't impact our model.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub1-step5" style="display:none">
                                        <p>Next, we will lay out the time periods that we are doing our analysis for. Financial models can be built on a monthly, quarterly, annually, or any other required time frame. In this model we're going show the information annually.</p>

                                        <p>Starting in cell C4, type the years from 2017 to 2024. Select cells B4:J4. Add a bottom border by selecting the drop down menu next to the paint can and selecting "Bottom Border".</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub1-step6" style="display:none">
                                        <p>Finally, to help with the spacing on the page, make row 3 shorter by using your mouse to drag up the line between row labels "3" and "4" on the left side of the spreadsheet.</p>
                                    </div>

                                </div>
                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">

                                        <li><a href="javascript:void(0)" class="active" data-step="sub1-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub1-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub1-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub1-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub1-step5">5</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub1-step6">6</a></li>

                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>

                        </div>

                        <div class="lcltc1" id="step2" style="display:none">
                            <span class="lcltc1-title">Income Statement Set Up</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub2-step1" style="display:block">
                                        <p>Now that we've labeled the income statement, we can add each of its line items. Each line item represents money earned by the company or costs that the company incurs. The first line on the income statement is Revenue. The revenue is the money that a company has earned during a period. In finance and accounting revenue does not count as earned until you deliver the service. So, for example, if someone pays cash for something, and then you deliver it a month later. You don't count the revenue until you've delivered the product.</p>

                                        <p>When you're calculating revenue, how you break it down can vary based on what matters to the company. You could show it by business unit, by geography, or by customer segment. In this model, we are going to break out the revenue by whether or not it is recurring. Specifically, we will use subscription and license revenue.</p>

                                        <p>Type "Subscription Revenue" in cell B5, "License Revenue" in cell B6, and "Total Revenue" in cell B7. We want to indicate that Subscription and License revenue are part of revenue. Indent cells B5 and B6 by selecting the alignment menu to the right of the font color menu and clicking "Increase Indent" at the bottom. Then to show that Total Revenue is a cumulative value, select cells B7:J7 and add a top border</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub2-step2" style="display:none">
                                        <p>The next line on the income statement is Cost of Goods sold, commonly shortened as COGS. COGS are the material costs necessary to deliver the product to your customers. Taking a simple example, if you make wooden chairs, COGS would include the cost of the wood, the cost of the tools you used to carve the chair, and the cost of your time to carve the chair. It would not include any money you spend to market the chair.</p>

                                        <p>The difference between your revenue and cost of goods sold is called Gross Margin. Gross Margin tells you how much it cost a company to make the products they sell. What's considered a good Gross Margin varies based on the type of business you're dealing with. For a software company, gross margins are usually higher than 70%. On the other extreme end of the spectrum grocery stores have gross margins in the 20 to 30% range.</p>

                                        <p>In cell B9 type "Cost of Goods Sold" and in cell B10 type "Gross Margin". Indent cell B9 and add a top border to cells B10:J10.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub2-step3" style="display:none">
                                        <p>Below costs of goods sold, are operating expenses. Operating expenses, sometimes shortened to OpEx, are all the costs to run a business that are not directly attributable to the product or service. This include things like salaries for administrative staff, marketing costs, the cost of office supplies. OpEx can be broken out into several line items that could be modeled individually. You could have separate line items for salaries, marketing costs, and facilities costs. In this model, we're going to project OpEx as one line item. Note: You may see Operating Expenses called "Sales, General, and Administrative Expense" or "SG&A" for short.</p>

                                        <p>The difference between your Gross Margin and the Operating Expenses is called "Operating Income". Frequently this is also known as "Earnings Before Interest, Taxes, Depreciation, and Amortization". Usually you see it shortened as "EBITDA". If you remember the initial screen, the name is fairly self-explanatory. This line item is the income the business makes, before you take in to account the line items below it.</p>

                                        <p>In cell B12, type "Operating Expenses". In cell B13, type "Operating Income (EBITDA)". Format these line items the same way you did for Gross Margin and COGS</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub2-step4" style="display:none">
                                        <p>The next line item below Operating Income is Depreciation and Amortization. This can also be broken up in to two separate line items based on what you need to show in your model. Since the income statement is designed to show you how a company performs over a certain period of time, depreciation and amortization allow you to break up the costs of items that you use over a long period of time. For example, if you run a factory and buy a new machine that you will use for 5 years. You don't want to have the entire cost of the machine hit in a single year. You want to break out the cost of that machine for several years. Depreciation and Amortization are the portion of those long-term purchases that you expense in the year. Depreciation is for physical assets and Amortization is for intangible assets.</p>

                                        <p>In cell B15 type "Depreciation and Amortization" and in cell B16 type "Earnings Before Interest and Tax". Format as you have the other subtotals</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub2-step5" style="display:none">
                                        <p>The next four line items are "Interest Expense", "Taxable Income", "Income Taxes", and "Net Income". Put those into the model with an empty row between "Taxable Income" and "Income Taxes". Then format so that "Taxable Income" and "Net Income" are subtotals</p>

                                        <p>Interest is the net gain or loss on interest earned from deposits and interest paid on debt. Net Income is the income that the company is generating for its shareholders.</p>
                                    </div>


                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub2-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub2-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub2-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub2-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub2-step5">5</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>

                        <div class="lcltc1" id="step3" style="display:none">
                            <span class="lcltc1-title">Balance Sheet Set Up</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub3-step1" style="display:block">
                                        <p>Now that we've outlined our income statement. The next step is to lay out the balance sheet. As previously mentioned, the balance sheet shows you all the assets a company has and how those assets were funded at the end of a time period. It's called a balance sheet because the Assets have to balance with the liabilities and equity that the company has. This equation, A = L+E, is central to accounting.</p>

                                        <p>The balance sheet is structured to match the accounting equation. First come your assets, then your liabilities, and then the equity the company has. Within the assets and liabilities section, it is further divided in to current and long-term items. Current items are items that you are owed or owe within one year of the balance sheet date.</p>

                                        <p>Similar to the Income Statement, the first thing we need to do label this section of our model. Instead of starting from scratch, we can copy and modify the heading we used on the Income Statement. Select cells B2:J4. Use "Ctrl-C" to copy them. Then use "Ctrl-V" to paste that in cell B24. Then modify the text in cell B24 so it says "FakeSoftwareCo Balance Sheet". After that, make the height of row 25 shorter.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub3-step2" style="display:none">
                                        <p>Next we will lay out each out the line items in the balance sheet. Starting with the current assets. Usually the most important current assets for a company are Cash and Accounts Receivables. Cash is fairly self-explanatory, it's the money that the company has in its bank accounts or securities that can be immediately converted to cash. Accounts Receivables is the money you are owed from customers who you have already provided a service for. Other current assets include things like stock inventory, supplies, and prepaid expenses. Depending on your needs you may need to model different combinations of these. For this model, we're going to just have "Cash", "Accounts Receivables, net", and "Other Current Assets".</p>

                                        <p>Starting in cell B28, place those three line items and then in cell B31 put "Total Current Assets". To help with spacing on the page, make row 27 shorter. Format the line items so that "Total Current Assets" is a subtotal.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub3-step3" style="display:none">
                                        <p>The next step is to lay out the long-term assets that the company has. This includes things like "PP&E, net" (Property, Plant, and Equipment), "Goodwill", and "Intangibles"</p>

                                        <p>PP&E is all of the physical assets your company has that they will use over a long period of time. If you remember when we did the Income Statement, we talked about how Depreciation is the current allocation of the cost of your long-term assets. PP&E is the value of all those physical assets.</p>

                                        <p>Goodwill is an asset created when one company buys another. Any part of the purchase price that is greater than the company’s assets is added to the purchasing companies balance sheet as Goodwill.</p>

                                        <p>Intangibles are the asset that corresponds with Amortization. It could include things like brand recognition and intellectual property, such as patents, trademarks, and copyrights.</p>

                                        <p>Finally, "Other long-term assets" are assets you have that do not fall into the remaining categories. It could include things like long term investments.</p>

                                        <p>Starting in cell B33, input those 4 line items, and then in cell B37, put "Total Assets". Format so that Total Assets is a subtotal.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub3-step4" style="display:none">
                                        <p>Next, we will lay out the company’s liabilities. Like assets, a company’s liabilities are divided in to current and other liabilities.</p>

                                        <p>The current liabilities consist of "Accounts Payable", "Accrued Liabilities", "Deferred Revenue", and "Other current liabilities".</p>

                                        <p>Accounts Payable are current liabilities that will be paid in the near future. For example, if you've signed a contract to pay for consulting services in 3 months, that money would be a liability that you owe.</p>

                                        <p>Accrued Liabilities is the value of expenses for things that you have already consumed. For example, if you pay your power bill at the end of the month, the value of your power bill accrues throughout the month. That is value that you've gotten but haven't yet paid for</p>

                                        <p>Deferred Revenue is cash that customers have paid you for items or services you have not delivered yet. For example, if you have a subscription service that people pay for at the beginning of the year. When the customer makes that payment, you have an obligation to provide the services they paid for. That obligation is captured as Deferred Revenue.</p>

                                        <p>Finally, other current liabilities are any other liabilities that you have to pay for in the next year. For example, if you have payroll taxes payable or you have declared a dividend.</p>

                                        <p>Starting in cell B39, place those 4 line items. And then in cell B43, put "Total Current Liabilities". Format so that "Total Current Liabilities" is a subtotal.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub3-step5" style="display:none">
                                        <p>After the current liabilities comes the companies long term liabilities. This is usually debt that the company has raised to fund operations or acquisitions. The first line item is "Revolver" and the second is "Long Term Debt".</p>

                                        <p>Revolver is a line of credit that a company has to help fund operations when it needs cash. For example, let’s say that you owe payroll at the end of the month. But you won't collect the cash that your clients owe until next month. A revolver lets you draw the line of credit you need to pay your employees this month and then you pay it back when the cash flow comes in.</p>

                                        <p>Long term debt is the loans that a company has that mature in more than one year.</p>

                                        <p>Starting in cell B45, place both line items. Then add "Total Liabilities" as a subtotal in cell B47.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub3-step6" style="display:none">
                                        <p>The next section is the equity that the company has built up. The equity in a company is a combination of Retained Earnings and Paid-in Capital.</p>

                                        <p>For this model, we're going to project equity as one line item, but it can be broken out based on what you need to show in your analysis.</p>

                                        <p>In cell B49 enter "Total Equity". Then in cell B51 type "Total Liabilities and Equity". Then select cells B51:J51 and add a top border. This line item is used to ensure the accounting equation (A = L + E) is always kept true.</p>
                                    </div>


                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub3-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub3-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub3-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub3-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub3-step5">5</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub3-step6">6</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>

                        <div class="lcltc1" id="step4" style="display:none">
                            <span class="lcltc1-title">Cashflow Statement Setup</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub4-step1" style="display:block">
                                        <p>The final statement we will lay out is the Cashflow Statement. This statement is divided into sections based on the source and use of cash in your business. The sources are "Cashflow from Operating Activities", "Cashflow from Investing Activities", and "Cashflow from Financing Activities"</p>

                                        <p>As with the other two statements, the first thing we want to do is label this section of the model. Copy cells B24:J26. Paste in cell B53 and change the label to be "FakeSoftwareCo Cashflow Statement". Shorten row B54</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub4-step2" style="display:none">
                                        <p>The next step is to lay out the Cashflow from investing activities. We're going to label each section of the cash flow statement so that it's easy to distinguish between them. In cell B57 type "Operating Activities". Bold the text. Then, underline it by selecting the "U" next to the italicize button on the menu. To help with spacing make row 56 shorter</p>

                                        <p>Within operating activities, you are going to show the cash flow that the company generates from running the business on a day to day basis. Within this section you start with "Net Income". Then you are going to adjust based on other operating activities that effect cash flow.</p>

                                        <p>First you are going to add back Depreciation & Amortization. That is because D&A is a non-cash expense. You want to account for it in the income statement, but it doesn't affect your cash balance.</p>

                                        <p>Then you are going to account for the impact of Change in Net Working Capital. A company’s Working Capital is the difference between its current assets and its current liabilities. Conceptually if you were to immediately liquidate all of the company’s assets and pay all of the near-term liabilities you owe, Working Capital is the cash the company would have left.</p>

                                        <p>Finally, you have to account for the Change from other long-term assets that the company has.</p>

                                        <p>In cell B58 put "Net Income". Then in cell B59 put "(+) Depreciation & Amortization". By convention, each line item on the cash flow statement is labeled to indicate whether it is a source of cash (+) or a use of cash (-). In cell B60 put "(+/-) Change in Net Working Capital" and in cell B61 put "(+/-) Change in other long-term assets & liabilities". In cell B62 put "Cashflow from operating activities".</p>

                                        <p>Indent cells B58:B61. Add a top border to cells B62:J62. Adjust the width of column B as needed so you can see all the labels.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub4-step3" style="display:none">
                                        <p>The next section in the cash flow statement is Cashflow from Investing Activities. First, let’s label this section "Investing Activities" in cell B64. Underline and bold the text.</p>

                                        <p>The line items in this section are for investments the company is making in long term assets. Usually, it is reported as one line item, Capital Expenditure (frequently shortened to Capex). If you remember our discussion of PP&E and Depreciation, Capex is the cash the company spends to purchase those long-term assets within a time period.</p>

                                        <p>In cell B65 add "(-) Capital Expenditures". Then in cell B66 add "Cashflow from investing activities". Indent cell B65 and add a top border to cells B66:J66.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub4-step4" style="display:none">
                                        <p>Below the Cash flow from investing activities, we want to calculate the cumulative cash flow available for financing activities. That is because the financing activity section is where we show pay down in debt, dividends to shareholders, or draws on the company’s revolver.</p>

                                        <p>In cell B68 add "Cash Available for Financing Activities". Add a top border to cells B68:J68</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub4-step5" style="display:none">
                                        <p>Next we will lay out the line items in the "Financing Activities" portion of the Cashflow statement. First add a label in cell B70. Format it has you have the previous labels.</p>

                                        <p>Then we will add the line items that can change the companies cash balance. In cell B71 add "(+/-) Change in revolver". This line item takes in to account the money that company needs to draw on to meet its obligations or pay back from prior years.</p>

                                        <p>In cell B72 add "(+) Issuance of long-term debt". This is the cash that the company receives when it receives a long-term loan. In cell B73 put "(-) Repayment of long-term debt". The repayment of long-term debt is any payments made towards the principle amount of the company’s debt.</p>

                                        <p>Next, in cell B74 put "(-) Repurchase of equity". This line item is used when the company buys its own stock. It does this to reduce the number of outstanding shares, thereby increasing the value of each of the remaining shares.</p>

                                        <p>In cell B75 add "(-) Dividends". Dividends are payments that a company makes to its shareholders.</p>

                                        <p>The final financing line item is "(+) Proceeds from options". Add that to cell B76. An option is a contract that gives someone the right to buy a stock at a certain price. This is usually used as a form of compensation for certain employees. For example, a CEOs compensation package could include the option to buy 1,000 shares of stock for $10. So, if the stock price is at $15 when the CEO exercises the option, they make 5 dollars per share. The proceeds from options is the money the company gets from the option holder. In our example the company would get $10,000 for the 1,000 shares it gives to the CEO.</p>

                                        <p>Finally, in cell B77, add "Cash flow from financing activities" for the total financing cash flow. Indent cells B71:B76. Add a top border to cells B77:J77.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub4-step6" style="display:none">
                                        <p>After you outline the company’s cash flow from financing, add a line item to track the total change in cash over the time period. In cell B79 add "Change in cash". Add a top border to cells B79:J79.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub4-step7" style="display:none">
                                        <p>Below the total change in cash, you will often want to keep track of the companies running cash balance based on the changes in the period. In cell B81 add a label for this section "Cash Balance". Bold and underline it.</p>

                                        <p>In cells B82 and B83 add "Beginning Balance" and "Change in Cash". Indent both cells.</p>

                                        <p>In cell B84 add "Ending Balance". Add a top border to cells B84:J84.</p>
                                    </div>


                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub4-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub4-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub4-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub4-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub4-step5">5</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub4-step6">6</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub4-step7">7</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>

                        <div class="lcltc1" id="step5" style="display:none">
                            <span class="lcltc1-title">Historical Data</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">

                                    <div class="sub-lesson-step-contant" id="sub5-step1" style="display:block">
                                        <p>Now that we've laid out the structure for the entire model, we can begin pulling in information for each of the line items. For a real model you'd have to pull this information from the company’s public reports (for a public company) or data they provide (for a private company). In this model we're going to give you that information. Press the button below to fill in the historical values. Double check that your set up matches exactly what we've recommended so far. Any cells with the wrong values will be overwritten by the historical values.</p>

                          <!-- <<Input historical Values Button>> -->
                                        <button onclick="addHistoricalValues()">Input historical Values</button>

                                        <p>To clearly indicate that we are not filling in historical values on the cash flow statement, select cells C58:E84 and change the fill color to dark gray.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub5-step2" style="display:none">
                                        <p>Now we will go through and add the subtotals for each section.</p>

                                        <p>In cell C7, sum cells C5:C6. Copy the formula. Then, paste the formula in cells D7:E7.</p>

                                        <p>Next, we are going to calculate the Gross Margin. As previously mentioned, the Gross Margin is the difference between the company’s revenues and its Cost of Goods Sold. In cell C10 type "=C7-C9". Copy the formula and paste it to fill in the Gross Margin for the remaining historical years.</p>

                                        <p>Replicate with the appropriate formulas for Operating Income, EBIT, Taxable Income, and Net Income.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub5-step3" style="display:none">
                                        <p>Now that we've incorporated the historical totals into the Income Statement, we can format all the historical values.</p>

                                        <p>By convention any number that is hardcoded in a financial model is colored blue. The first formatting we're going to do is to use the font color menu to color all of the hardcoded numbers in the income statement blue. These are the historical values we dropped in previously.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub5-step4" style="display:none">
                                        <p>Next we are going to change the number format on the values in the income statement. For this model we're going to use a number format with 1 decimal and negative numbers in parenthesis. Change the number values for cells C5:E21 to that format. Select the "%" in the menu bar. In the menu that appears select "Comma Style". In the same menu use the increase and decrease decimal options to set 1 decimal place..</p>

                                        <p>For cells C22:E22, we're going to use a currency format. In the number format drop down menu, select "Currency". Which numbers you format as currency or normal numbers is a matter of preference. Some people like to do the first line in each statement, and some make all the numbers currency.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub5-step5" style="display:none">
                                        <p>For the last piece of formatting on the Income Statement, we're going to bold each of the subtotals. Bold the contents in row 7, row 10, row 13, row 16, row 19, and row 22.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub5-step6" style="display:none">
                                        <p>On the balance sheet we're going to follow a similar process as we did in the income statement. First, we're going to add the appropriate total values for each of the sub headers.</p>

                                        <p>Having trouble deciding which line items to sum? Click below to reveal a hint.</p>

                                        <p><span class="mm-tooltip" title="Total Current Assets is the sum of all Current Assets. Total Assets is the sum of 'Total Current Assets' and all the company’s other assets."><strong>Hint</strong></span></p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub5-step7" style="display:none">
                                        <p>Now that we've laid out the totals on the balance sheet, we can format the content. First color all the hardcoded numbers blue. Next, we're going to change the number format to match the number format used in the income statement. Format the last line, "Total Liabilities and Equity" as currency.</p>

                                        <p>On the balance sheet we're only going to bold the line items that are in the accounting equation.</p>

                                        <p>Having trouble deciding which line items to bold? Click below to reveal a hint.</p>

                                        <p><span class="mm-tooltip" title="The accounting equation is Total Assets = Total Liabilities and Equities"><strong>Hint</strong></span></p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub5-step8" style="display:none">
                                        <p>We also want a way to make sure that our balance sheet is correct. Add a row below "Total Liabilities and Equity" by right clicking on the row label in row "52" on the far left of the spreadsheet and selecting "Insert". In the new cell B52, type "Check" and italicize it. In cell C52, subtract "Total Assets" from "Total Liabilities and Equity". Copy the formula through column E. Format as a number with 3 decimals showing by using the number format menu.</p>

                                        <p>This way when we project our balance sheet, we'll be able to ensure it stays balanced.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub5-step9" style="display:none">
                                        <p>Even though we're not showing any of the historical values for the Cashflow statement, we can still bold the appropriate line items.</p>

                                        <p>Bold "Cash Available for Financing Activities", "Cash flow from financing activities", "Change in cash", and "Ending Balance"</p>
                                    </div>


                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub5-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step5">5</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step6">6</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step7">7</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step8">8</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub5-step9">9</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>

                        <div class="lcltc1" id="step6" style="display:none">
                            <span class="lcltc1-title">Income Statement Metrics</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub6-step1" style="display:block">
                                        <p>Now that we've laid out all the historical values, we can think about how we want to project the company’s financials. We're going to decide which metrics we want to use to project each line item, calculate it for the historical values, and then use the historical values as a basis for the future.</p>

                                        <p>The metrics we're using in this model are just one set of options. Depending on how detailed you want to get or how much information you have, you can project each line item in a variety of ways.</p>

                                        <p>The first line items, we're going to project is revenue. Insert 2 rows above row 9 so that "Cost of Goods Sold" is on line 11. In cell B8 type "% YoY Growth" and in cell B9 type "% recurring". Indent both cells.</p>

                                        <p>To calculate year over year growth, for total revenue we divide the ending year by the beginning year and subtract 1. You can't calculate growth for the first year, so we're going to start in 2018. In cell D8 type "(D7/C7)-1". Copy the formula one cell to the right for 2019 as well.</p>

                                        <p>Format D8:E8 as percentages with no decimal places. Select cells B8:E8 and italicizes them.</p>

                                        <p>For % recurring, we're showing what percentage of the revenue is contractually renewed every year. For this company, the subscription revenue is recurring, and the license revenues are one-time sales. In cell C9, type "C5/C7". Copy the formula two cells to the right.</p>

                                        <p>Format row 9 to match the formatting of row 8.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub6-step2" style="display:none">
                                        <p>For Cost of Goods Sold, we're going to use Gross Margin Percentage to project it. In general, if something is referred to as margin, it's that value divided by revenue.</p>

                                        <p>Add a row above row 14, Operating Expenses. In cell B13, type "% margin". In cell C13, type "C12/C7". Copy the formula to the right to fill in for the historical values.</p>

                                        <p>Format the same way did the growth and % recurring lines.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub6-step3" style="display:none">
                                        <p>For Operating expenses, we're going to use Opex as a % of sales. For several of the line items, we will decide what percentage they are relative to another relevant line item.</p>

                                        <p>Add a row above Depreciation and Amortization. Below Operating Income, type "% Opex of Sales". In column C, divide operating expenses by revenue. Copy the formula to the right to fill for all historical values.</p>

                                        <p>Format as you have the other percentages.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub6-step4" style="display:none">
                                        <p>For Depreciation and Amortization, we're going to calculate that as a percentage of Capital expenditures. Depending on the stage of the company, the relationship between depreciation and capex will vary. For companies that are growing quickly, you would expect Depreciation to be less than Capex. That's because the company is having to invest more every year than they did in the past. For companies that are stable, you'd expect capex and depreciation to be roughly equal. Every year you'd invest the same amount you have in prior years.</p>

                                        <p>Since this company is growing, we're going to assume that D&A is less than the company’s capex.</p>

                                        <p>Add a line above "Interest Expense". Then below "Earnings Before Interest and Tax" type "% D&A of CapEx". Normally, you would use the information from the primary data source to calculate this. As a simplifying assumption in this model, we're going to give you the historical values. In column C, type "50%". In Column D, type "53%". In Column E, type "46%". Format the cells as you have the other percentages.</p>

                                        <p>Since these are hard coded numbers, we also want to color them blue, so that someone else looking at the model knows it's not a calculation.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub6-step5" style="display:none">
                                        <p>In the last step for the income statement, we're going to add Net Margin to give us an idea of how profitable the company is overall, and a tax rate to project our taxes.</p>

                                        <p>Above the balance sheet, add two rows. Below "Net Income", type "% net margin". In column C, divide Net Income by Revenue. Below that line, in column B, add "% tax rate". In column C calculate the tax rate.</p>

                                        <p>Format the cells as you have the other percentages.</p>

                                        <p>Stuck on how to calculate tax rate? Click below to get a hint.</p>

                                        <p>We didn't skip "Interest Expense". Since interest expense is based on the company’s debt balance, we're going to set the values to calculate on the balance sheet.</p>

                                        <p><span class="mm-tooltip" title="Divide 'Income Taxes' by 'Taxable Income'"><strong>Hint</strong></span></p>
                                    </div>

                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub6-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub6-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub6-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub6-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub6-step5">5</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>


                        <div class="lcltc1" id="step7" style="display:none">
                            <span class="lcltc1-title">Balance Sheet Metrics</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub7-step1" style="display:block">
                                        <p>Now we're going to set up the line items that we're going to project on the Balance Sheet. For the balance sheet, we're going to put each of the metrics at the bottom of the sheet. This is a stylistic preference. You could also put the metrics next to their respective line items.</p>

                                        <p>First, add 8 lines below the balance sheet check. There should be a total of 9 blank lines between the balance sheet and the cash flow statement with the cash flow statement starting in row 69.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub7-step2" style="display:none">
                                        <p>Now we can work our way down the balance sheet and add in the appropriate metrics. Starting with "Cash". Cash is directly calculated using the balance on the cash flow statement. However, we do need some metrics from the balance sheet to calculate the cash flow statement.</p>

                                        <p>In cell B61, type "Net working capital". If you remember when we laid out the cash flow statement, Net Working Capital is the difference between a company’s current assets and current liabilities. One thing to note, that since we're going to be using this to calculate the cash balance, we don't want to include the cash balance in the calculation.</p>

                                        <p>In cell C61, sum "Accounts Receivables, net" and "Other Current Assets", subtract "Total Current Liabilities". copy the formula to the right to fill in for all the historical years.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub7-step3" style="display:none">
                                        <p>For Accounts Receivables, we want to use the average collection period. This tells you how many days, on average, it takes for a customer to pay you after you deliver something to them.</p>

                                        <p>In cell B62, type "Accounts receivable collection period". Italicize it. The formula to calculate accounts receivable collection period is (accounts receivables/revenue)*365. Use that formula in cell C62 to calculate the average collection period. Copy the formula to the right to fill in for historical values</p>

                                        <p>Format cells C62:E62 as numbers with one decimal place.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub7-step4" style="display:none">
                                        <p>For other current assets, we're going to calculate it as a percentage of sales, similar to the metric we used for OpEx. In cell B63, type "Other current assets % of sales". In cell C63, calculate the percentage of sales that current assets represents. Copy the formula to the right to fill in for the remaining historical values.</p>

                                        <p>Format cells C63:E63 as a percentage with one decimal place.</p>

                                        <p>The remaining assets are either calculated directly, in the case of PP&E, or change so infrequently, that we will use a straight-line value. These other line items can change and may need to be projected based on your need or if you know of specific events in the future that will change them. But most of the time, they will be relatively consistent from year to year.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub7-step5" style="display:none">
                                        <p>Starting with the liabilities, the first thing we need to project is "Accounts Payable". For this, we use a similar metric as we did for accounts receivable, "Accounts payable days outstanding". The major difference for this metric is that is based on COGS rather than revenue.</p>

                                        <p>In cell B64, type "Accounts payable days outstanding". In cell C64, calculate the days outstanding. Copy the formula to the right for the remaining historical years.</p>

                                        <p>Having trouble with the formula? Click on the hint below</p>

                                        <p><span class="mm-tooltip" title="(accounts payable/Cost of Goods Sold)*365"><strong>Hint</strong></span></p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub7-step6" style="display:none">
                                        <p>For accrued liabilities, we're going to use "Accrued liabilities as a % of COGS". Type that in cell B64. In cell C64, calculate the percentage. Copy the formula to the right to fill in for the historical years. Format as a percentage with one decimal place and italicize.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub7-step7" style="display:none">
                                        <p>For deferred revenue, we're going to reference something on the Income Statement. Since deferred revenue is tied to prepayments for recurring revenue, we're going to use the growth in recurring revenue to project deferred revenue.</p>

                                        <p>Add a line above Cost of Goods Sold. In cell B10, type "% recurring growth". In cell D11:E11, calculate the growth rate of the subscription revenue. Format the same way you formatted the other metrics on the Income Statement.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub7-step8" style="display:none">
                                        <p>For other current liabilities, we're also going to project this based on COGS. In cell B67, type "Other current liabilities as a % of COGS". In cell C67, calculate the percentage. Copy the formula to the right to fill for the historical years. Format as a percentage with two decimal places.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub7-step9" style="display:none">
                                        <p>Revolver, Long-term debt, and Total Equity are calculated directly. But this is where we will calculate the interest expense metric. In cell B68, type "Interest expense as a % of long-term debt". In cell C68, calculate the percentage. Copy to the right for historical values. Format as a percentage with one decimal place.</p>
                                    </div>


                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub7-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step5">5</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step6">6</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step7">7</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step8">8</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub7-step9">9</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>


                        <div class="lcltc1" id="step8" style="display:none">
                            <span class="lcltc1-title">Income Statement Projection</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub8-step1" style="display:block">
                                        <p>Now that we've laid out all the metrics we need for the Income Statement and Balance Sheet, we can start creating the actual projection.</p>

                                        <p>The first step for projecting each line item is to estimate the metric for the forecast period. In this model, we're going to assume that the forecast metric is based on the average over our historical period. However, what the correct forecast is can vary drastically based on the business context. For example, instead of the revenue growth rate staying constant, you might assume that the company is going to spend more on marketing and sales to accelerate the growth rate, but also increasing the percentage of cost represented by OpEx. When building a model in a real work environment, you have to think about what your projections imply for the actual business.</p>

                                        <p>We're going to start with projecting overall revenue. In cell F8 type "10%". Format this as a percentage with no decimal places and italicize it. We also want to color this number blue.</p>

                                        <p>Now to carry that forward, in cell G8, type "=F8". Copy the formula to the right for the remaining projected years. These should be formatted as percentages, italicized, with no color. The way this model is built, only the first year of projection is a changeable assumption. That can be different based on what you are trying to analyze in the model or what you know about the future of the business.</p>

                                        <p>Now we can project our revenue. In cell F7, type "=E7*(1+F8)". Copy the formula to the right for the remaining years. Format it the same as the historical total revenue values.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub8-step2" style="display:none">
                                        <p>Now to calculate total recurring revenue, we're going to follow a similar process. In cell F9, input "80%". Format the same you formatted the first forecast year for total revenue. Use the same method as you did for total revenue to continue the forecasted % recurring through our entire forecast period.</p>

                                        <p>In cell F5, calculate the subscription revenue, using the total revenue and the % recurring. Copy the formula to the right for all the projected years. This number should be formatted with one decimal place and colored black. It's a calculated number that we would not change directly.</p>

                                        <p>For License Revenue, calculate the difference between "Total Revenue" and "Subscription Revenue". Copy the formula to the right for all the projected years.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub8-step3" style="display:none">
                                        <p>Since "% recurring growth" is a descriptive calculation, we can copy the formula to the right for all forecasted years. Since we're projecting the relevant metric here, let's jump down to Change in Deferred Revenue and forecast it forward.</p>

                                        <p>In cell F49, type "=E49*(1+F10)". Copy the formula to the right for all the forecasted years. Format this as a number with one decimal place.</p>

                                        <p>We're using "% recurring growth" to project deferred revenue because as we get more recurring revenue, customers will pay us more cash that we need to provide services for. To do a detailed build of Deferred Revenue, you would need to create schedules for the company’s orders and the timing of its customers cash payments.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub8-step4" style="display:none">
                                        <p>To project Cost of Goods Sold, we want to estimate the expected margin. In F14, type "77%". Format as a percentage, italicize, and make it blue. Continue the forecasted value through the projected time period.</p>

                                        <p>Since this number is the Gross Margin, we have to use a slightly different formula to calculate COGS directly. Use that formula to calculate COGS for the forecasted period. Then copy the formula for "Gross Margin" to the right for the forecasted period. Format both lines appropriately.</p>

                                        <p>Havin difficulty figuring out how to calculate Gross Margin, click on the hint below.</p>

                                        <p><span class="mm-tooltip" title="Revenue*(1-% margin)"><strong>Hint</strong></span></p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub8-step5" style="display:none">
                                        <p>For OpEx, we're going to set the forecasted value to "41%". Project "Operating Expenses" and "Operating Income" using the same method we did for the prior two. Format appropriately.</p>

                                        <p>While we're on OpEx. Let’s add a descriptive line to show the companies Operating Margin. Add a line above "Opex % of Sales". Label the row, "% Operating Margin".</p>

                                        <p>In cell C18, calculate the operating income margin. Drag the formula to the right for the entire time period. Format as you have the other percentage lines.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub8-step6" style="display:none">
                                        <p>For Depreciation and Amortization, we can't forecast the values until we have CapEx. But we can lay out the metric and copy the formula for "Earnings Before Interest and Tax". In Cell F23, type 50%. Bring forward for the forecasted period. Format appropriately.</p>

                                        <p>Copy the formula to the right for "Earnings Before Interest and Tax"</p>

                                        <p>We also have to wait until we forecast "Long-term debt" before we can calculate "Interest Expense". For now, copy the formula for "Taxable Income" through the forecasted period.</p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub8-step7" style="display:none">
                                        <p>For Income taxes, we want to set the forecasted tax rate to "27%". Forecast the income taxes based of the "Taxable Income". Drag the formulas to the right for "Net Income" and "Net Margin".</p>

                                        <p>Format all the elements appropriately. Remember that "Net Income" should be formatted as a currency with one decimal place.</p>
                                    </div>


                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub8-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub8-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub8-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub8-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub8-step5">5</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub8-step6">6</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub8-step7">7</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>


                        <div class="lcltc1" id="step9" style="display:none">
                            <span class="lcltc1-title">Balance Sheet Projection</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub9-step1" style="display:block">
                                        <p>For the balance sheet, we can work our way down to forecast the values. Starting with "Cash", it's always going to be based on the ending balance from your cash flow statement. Even though we're going to fill in the cash flow statement later, we are going to set the formula. Set cell F37 to "=F130", the ending cash balance.</p>

                                        <p>Copy the formula to the right for the projected time period.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub9-step2" style="display:none">
                                        <p>For accounts receivables, we need to project the "Accounts receivable collection period". To do that we're going to set the forecast value to the average over our historical period. In cell F64, type "=AVERAGE(C64:E64)". We want to format this number as blue. Even though it's a calculation, we could have just as easily set it directly to "31". Carry forward the value for all the forecasted years.</p>

                                        <p>Now, in cell F38 use the inverse of the collection period formula to calculate accounts receivable. Copy the formula to the right for the remaining forecast period. Having trouble figuring out the formula? Click the hint below.</p>

                                        <p>For "Other Current Assets", we need to project "Other current assets % of sales". In cell F65, Use the average over the historical period to calculate the forecast value. Then extend that value through the forecast period. Format appropriately. Now calculate "Other Current Assets" over the forecast period.</p>

                                        <p>Finally, for current assets, copy the formula for "Total Current Assets" forward through the forecast period.</p>

                                        <p><span class="mm-tooltip" title="(Collection period/365)*Revenue"><strong>Hint:</strong></span></p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub9-step3" style="display:none">
                                        <p>Looking at the long-term assets, we're going to skip PPE for now because we need CapEx and D&A to calculate it. For Goodwill, Intangibles, and Other long-term assets, we're going to carry those values forward. In cells F43, F44, and F45 set the value equal to the prior year. We're going to color these cells blue because we could, theoretically, set them to different values if we had reason to believe they'd change in the first projected year.</p>

                                        <p>Carry those values forward for the forecast period. Then copy the formula for total assets to the right for the forecast period.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub9-step4" style="display:none">
                                        <p>Going to current liabilities, we'll start with accounts payable. In cell F66, use the average over the historical period as the forecast value for "Accounts payable days outstanding". Extend the value through the forecast period.</p>

                                        <p>Now use the inverse of the days outstanding formula to calculate "Accounts Payable". Click the hint below if you're having trouble figuring out the formula.</p>

                                        <p>For "Accrued liabilities" and "Other current liabilities", forecast using the average historical value as the basis for the metrics. Remember, these are driven off of COGS, rather than revenue.</p>

                                        <p>Copy the formula for "Total Current Liabilities" to the right for the forecast period. At this point, we can also bring the formula forward for "Net Working Capital"</p>

                                        <p><span class="mm-tooltip" title="(Days outstanding/365)*COGS"><strong>Hint:</strong></span></p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub9-step5" style="display:none">
                                        <p>The remaining line items on the balance sheet are calculated based on elements in the cash flow statement. However, we can copy the formulas forward for "Total Liabilities", "Total Liabilities & Equity", and our "Check". The check will not balance yet because we're missing several line items.</p>
                                    </div>

                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub9-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub9-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub9-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub9-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub9-step5">5</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>


                        <div class="lcltc1" id="step10" style="display:none">
                            <span class="lcltc1-title">Cashflow Statement Projection</span>
                            <div class="lcltc1-contant">

                                <div class="lcltc1-mm">


                                    <div class="sub-lesson-step-contant" id="sub10-step1" style="display:block">
                                        <p>Now we're going to start building out the Cashflow statement. The first line item is just Net Income. Set cell F76, equal to the company’s Net Income in cell F29. Copy the formula to the right for the forecast period. Format as a number with one decimal place.</p>

                                        <p>We're going to skip Depreciation and Amortization until we project CapEx.</p>

                                        <p>For "Change in Net Working Capital", we're going to take the difference between the prior years working capital and the current years working capital. If you're Working Capital increases from year to year, that means that you've increased the amount of assets you have more than you've increased the liabilities. An increase in assets is always going to correspond to a use of cash in a given year.</p>

                                        <p>In cell F78, type "=E63-E63". Notice that this is a negative number. Since the working capital increased from 2019 to 2020, you have a cash outflow in 2020. Copy and paste the formula to the right for the forecast period. Format as a number with one decimal place in "Comma Style".</p>

                                        <p>Calculate the difference and copy the formula to the right for the forecast period.</p>

                                        <p>Then for the total "Cash flow from operating activities" use the formula "=sum" to take the total of the above rows. In cell F80, calculate the total, and copy right for the forecast period. Format as a number with one decimal in "Comma Style".</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub10-step2" style="display:none">
                                        <p>Now we're going to calculate CapEx. First, we need to decide what forecast metric we're going to use. In this case we're going to use "% of sales". Add a row above "Cash flow from investing activities" and type "% of sales" in cell B84. Indent and italicize it. If you had an underlying data set to pull the information from, you'd want to base the % of sales off of the historical values. In this case, we're going to set it to "0.9%" of revenue.</p>

                                        <p>Place that value in cell F84. Format as a percentage with one decimal place, italicize it, and color it blue. Carry it forward for the forecast period.</p>

                                        <p>Since CapEx is a use of cash, we want it to be a negative number. Using the forecast metric calculate CapEx over the forecast period as a negative number.</p>

                                        <p>Now for "Cash flow from investing activities", set it equal to capex for the entire forecast period. Format as a number with one decimal place in "Comma Style".</p>

                                        <p>Now to calculate "Cash Available for Financing Activities", sum the "Cash flow from operating activities" and "Cash flow from investing activities". Carry the formula forward for the forecast period. Bold the numbers and format as a number with one decimal in "Comma Style".</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub10-step3" style="display:none">
                                        <p>Now that we've calculated CapEx, we can go back and calculate some of the line items that depend on it. Starting with D&A. In cell F21, calculate D&A based on the capex in 2020. Remember that even though CapEx is a negative number on the Cashflow statement, D&A should be a positive number.</p>

                                        <p>Now that we've calculated D&A. We can reference in the operating section of our Cashflow statement. In F77, reference the D&A values for that year. Drag the formula forward for the forecast period. Format appropriately.</p>

                                        <p>PP&E also depends on CapEx and D&A. To calculate the PP&E balance, we want to add the CapEx for a given year and subtract the D&A. The additional CapEx is money that you're spending to buy physical goods, so it increases the value of the PP&E account. D&A decreases the PP&E account because the value of that equipment decreases over time. D&A is the amount by which the value of those items is decreasing.</p>

                                        <p>In cell F42, calculate the PP&E balance for the forecast period. Format as a number with one decimal place. If you're having trouble figuring out the correct formula, check the hint below.</p>

                                        <p><span class="mm-tooltip" title="In cell F42, type '=E42-F83-F21'. You have to subtract CapEx since we're showing it as a negative number on the Cashflow statement."><strong>Hint</strong></span></p>
                                    </div>


                                    <div class="sub-lesson-step-contant" id="sub10-step4" style="display:none">
                                        <p>Now that we have our cash available for financing activities, we can figure out whether or not we need to draw on the revolver. If you remember from the balance sheet set up, the revolver is a line of credit that the company can draw on if they don't have enough money to fund their operating activities at the end of a time period.</p>

                                        <p>So, the change in revolver is going to be one of 3 things:</p>

                                        <p>1. A source of cash, if you're cash available for financing is negative and you need to draw on it</p>

                                        <p>2. A use of cash, if you have a revolver balance and have to pay it down</p>

                                        <p>3. No change in cash, if you don't have an existing balance, and don't need to draw on it.</p>

                                        <p>Think about the formula you need to use to calculate the "Change in Revolver". Type that formula in cell F90. Format as a number with one decimal in "Comma Style". If you're having trouble figuring out, click below for a hint.</p>

                                        <p><span class="mm-tooltip" title="You need to use the 'MIN' formula. Still having trouble? Check the second hint below."><strong>Hint1</strong></span></p>

                                        <p><span class="mm-tooltip" title="In cell F90, type '=-MIN(E54,F87)'. You are taking the minimum value between your existing revolver balance and the cash available from operating activities. If your cash flow from operating activities is negative, it will always be lower than your existing balance. But you want the revolver to be a source of cash that is equal to your operating cash outflow. If you have an existing balance on the revolver, you want to use the cash from your operating activities to pay it down."><strong>Hint2</strong></span></p>
                                        
										<p>Now to forecast the Revolver balance in row 54, add the prior year’s revolver to the change in revolver for the current year. Copy the formula to the right for the entire forecast period.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub10-step5" style="display:none">
                                        <p>For this model, the only other cash account we're going to project is "Repayment of long term debt". The other cash accounts, "Issuance of long-term debt", "Repurchase of equity", "Dividends", and "Proceeds from options", are driven by specific actions that the company takes. If they take out an additional loan, do stock buybacks, or declare a dividend it would change these accounts, but they won't necessarily change over the normal course of business.</p>

                                        <p>To calculate repayment of long-term debt, we first have to add a metric for "% mandatory repayment". You may also see mandatory repayment on a loan referred to as a loan's amortization. It's a different and unrelated use of the word than "Depreciation and Amortization".</p>

                                        <p>Type that label in cell B105. You would find this information by looking up the terms of the company's debt agreements. In this case, we're going to use "1%" as the mandatory repayment amount. Type that in cell F105. Format as a percentage with no decimal places, and color it blue since it's a hard-coded value. Carry forward for the forecast period. Then to calculate the mandatory repayment, you need to multiply the debt balance in a given year by the mandatory repayment amount. Since the debt repayment is a use of cash, we want to show it as a negative number.</p>

                                        <p>In cell F92, type "=-F105*F55". Format as a number with one decimal place in "Comma Style". Copy to the right for the forecast period.</p>

                                        <p>Now we can calculate our "Long-term debt" balance. For this account, we want to take the prior year’s value, add any new debt issued, and subtract the debt payed down. In cell F55, type "=E55+F91+F92".</p>

                                        <p>Copy the formulas to the right for the forecasted period. Format as a number with one decimal place.</p>

                                        <p>Calculate the total "Cash flow from financing activities" by summing F90:F95. Copy the formula to the right for the forecast period. Bold and format as a number with one decimal place in "Comma Style".</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub10-step6" style="display:none">
                                        <p>Now that we have our debt balance calculated, we can calculate the interest we have to pay on that debt. Since you don't pay interest at a single point in time, you want to calculate the interest rate off of the average debt balance over the course of the year.</p>

                                        <p>First, we need to project the interest rate forward in row 69. Use the average over the historical period as the forecast value. Format as a percentage with one decimal place and color blue. Project the value forward for the forecast period.</p>

                                        <p>In cell F25, we want to multiply the average debt balance by the interest rate. Carry the formula forward for the forecast period. Having trouble figuring out the formula? Click on the hint below.</p>

                                        <p><span class="mm-tooltip" title="=AVERAGE(E55:F55)*F69"><strong>Hint:</strong></span></p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub10-step7" style="display:none">
                                        <p>Now we can finish off the cash flow statement. The total "Change in cash" is equal to the "Cash available for financing activities" + "Cash flow from financing activities". Put that formula in to cell F98 and copy to the right for the forecasted years. Bold this row and format the numbers as a currency with one decimal place.</p>

                                        <p>Finally, on the cash flow statement, we want to calculate the companies cash balance at the end of a period. The beginning cash balance is based on the prior years ending balance. Set cell F101 equal to E37. Format as a number with one decimal place. Copy to the right for the forecast period.</p>

                                        <p>The "Change in Cash" is equal to the change in cash you just calculated. Set the formula for the projected period.</p>

                                        <p>Finally, the ending cash balance is equal to the sum of your "Beginning Balance" and "Change in Cash". Use that formula in cell F103 and copy to the right for the forecasted years. Bold this row and format the numbers as a currency with one decimal place. Remember, that we've already set the "Cash" account on the balance sheet equal to this ending balance.</p>
                                    </div>

                                    <div class="sub-lesson-step-contant" id="sub10-step8" style="display:none">
                                        <p>The last thing we need to do is forecast the "Total Equity" account on the balance sheet. As we discussed when laying out the balance sheet, the equity account is the total value of all the profits that the company has earned over time, the value of money paid to the company by shareholders, minus any of that payments that the company makes to shareholders.</p>

                                        <p>In Cell F58, calculate the company's equity balance. Copy the formula to the right for the forecast period. Format appropriately. Having trouble figuring out the formula? Click to reveal the hint below.</p>

                                        <p><span class="mm-tooltip" title="=E58+F76+F93+F95"><strong>Hint:</strong></span></p>
                                        
										<p>Notice that your check should now balance! If it doesn't make sure that every change on your balance sheet can be traced to a change in your cash flow statement.</p>
                                    </div>

                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub10-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub10-step2">2</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub10-step3">3</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub10-step4">4</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub10-step5">5</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub10-step6">6</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub10-step7">7</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub10-step8">8</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>


                        <div class="lcltc1" id="step11" style="display:none">
                            <span class="lcltc1-title">Parting Thoughts</span>
                            <div class="lcltc1-contant">
                                <div class="lcltc1-mm">

                                    <div class="sub-lesson-step-contant" id="sub11-step1" style="display:block">
                                        <p>The last thing we want to do are a few minor formatting tweaks. The first makes it clear where the delineation for the forecast and the historical period is. We want to add a left border to column F. Select cells F4:F31 add a left border. Do the same for cells F35:F61 and cells F73:F103. This is a stylistic preferences that make the model easier to read.</p>
                                    
										<p>Select the tab for the view menu at the top of the spreadsheet, and uncheck the box next to "Gridlines". These is a stylistic preferences that make the model easier to read.</p>
									</div>

                                    <div class="sub-lesson-step-contant" id="sub11-step2" style="display:none">
                                        <p>Congratulations! You've now gone from a blank spreadsheet and built a fully functioning 3 statement financial model. Hopefully throughout this process, you've learned about the mechanics of how the model works and how the different statements connect to each other.</p>

                                        <p>As mentioned throughout, this is a very simple version of a 3-statement model. There are a lot of enhancements that could be made. It's also worth pointing out that you may have noticed several places in the process where you could have done things in a different order. This was one specific path, but you should try to find one that makes sense intuitively for you.</p>
                                    </div>

                                </div>

                                <div class="sub-lesson-contant-left-tab-menu">
                                    <span class="previous_btn">&laquo</span>
                                    <ul class="sub-esson-menu spread_sub_steps_clk">
                                        <li><a href="javascript:void(0)" class="active" data-step="sub11-step1">1</a></li>
                                        <li><a href="javascript:void(0)" data-step="sub11-step2">2</a></li>
                                    </ul>
                                    <span class="next_btn">&raquo</span>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="lesson-contant-right">

            <div class="toolbar" id="toolbar">
            </div>
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