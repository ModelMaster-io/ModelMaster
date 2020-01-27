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
                 <!--<li><a href="javascript:void(0)" data-step="step7">7</a></li>
                <li><a href="javascript:void(0)" data-step="step8">8</a></li>
                <li><a href="javascript:void(0)" data-step="step9">9</a></li>
                <li><a href="javascript:void(0)" data-step="step10">10</a></li>
                <li><a href="javascript:void(0)" data-step="step11">11</a></li>
                <li><a href="javascript:void(0)" data-step="step12">12</a></li>
                <li><a href="javascript:void(0)" data-step="step13">13</a></li> -->
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
                        <p>Formatting is an extremely important part of financial modeling because it determines whether people can clearly understand and interpret your document. We will format the content as we go through this course. The formatting we do in this course is just one of several ways that you could format the content.</p>

                        <p>Fill the background in cells B2:J2 with a dark blue fill. Then in cell B2 change the text color to white and bold the text.</p>
                      </div>


                      <div class="sub-lesson-step-contant" id="sub1-step4" style="display:none">
                         <p>Next we're going to tell people what units we're using on the model. Depending on the context, "100" could be $100, $100,000, or $100,000,000.</p>

                         <p>In this model we're going to show all our numbers in millions. In cell B4, type "($ in millions)" so that anyone reading our model knows what units we're using. Italicize it so that it is clear the information doesn't impact our model.</p>
                      </div>


                      <div class="sub-lesson-step-contant" id="sub1-step5" style="display:none">
                        <p>Next, we will lay out the time periods that we are doing our analysis for. Financial models can be built on a monthly, quarterly, annually, or any other required time frame. In this model we're going show the information annually.</p>

                        <p>Starting in cell C4, type the years from 2017 to 2024. Select cells B4:J4 and add a bottom border</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub1-step6" style="display:none">
                        <p>Finally, to help with the spacing on the page, change the row height for row 3 to "5"</p>
                      </div>

</div>
                      <div class="sub-lesson-contant-left-tab-menu">
                          <ul class="sub-esson-menu spread_sub_steps_clk">
                              <!-- <li><a href="javascript:void(0)" class="prev_btn"><</a></li> -->
                              <li><a href="javascript:void(0)" class="active" data-step="sub1-step1">1</a></li>
                              <li><a href="javascript:void(0)" data-step="sub1-step2">2</a></li>
                              <li><a href="javascript:void(0)" data-step="sub1-step3">3</a></li>
                              <li><a href="javascript:void(0)" data-step="sub1-step4">4</a></li>
                              <li><a href="javascript:void(0)" data-step="sub1-step5">5</a></li>
                              <li><a href="javascript:void(0)" data-step="sub1-step6">6</a></li>
                              <!-- <li><a href="javascript:void(0)" class="next_btn">></a></li> -->
                          </ul>
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

                          <p>Type "Subscription Revenue" in cell B5, "License Revenue" in cell B6, and "Total Revenue" in cell B7. To indicate that Subscription and License revenue are part of revenue indent cells B5 and B6. Then to show that Total Revenue is a cumulative value, select cells B7:J7 and add a top border</p>
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
                          <ul class="sub-esson-menu spread_sub_steps_clk">
                              <li><a href="javascript:void(0)" class="active" data-step="sub2-step1">1</a></li>
                              <li><a href="javascript:void(0)" data-step="sub2-step2">2</a></li>
                              <li><a href="javascript:void(0)" data-step="sub2-step3">3</a></li>
                              <li><a href="javascript:void(0)" data-step="sub2-step4">4</a></li>
                              <li><a href="javascript:void(0)" data-step="sub2-step5">5</a></li>
                          </ul>
                      </div>

                    </div>
                </div>

                <div class="lcltc1" id="step3" style="display:none">
                    <span class="lcltc1-title">Balance Sheet Set Up</span>
                    <div class="lcltc1-contant">

                      <div class="lcltc1-mm">
                    

                      <div class="sub-lesson-step-contant" id="sub3-step1" style="display:block">
                          <p>Now that we've outlined our income statement. The next step is to lay out the balance sheet. As previously mentioned, the balance sheet shows you all the assets a company has and how those assets were funded at the end of a time period. It's called a balance sheet because the Assets have to balance with the liabilities and equity that the company has. This equation, A = L+E, is central to accounting.</p>

                          <p>The balance sheet is structured to match the accounting equation. First come your assets, then your liabilities, and then the Equity the company has. Within the assets and liabilities section, it is further divided in to current and long-term items. Current items are items that you are owed or owe within one year of the balance sheet date.</p>

                          <p>Similar to the Income Statement, the first thing we need to do label this section of our model. Instead of starting from scratch, we can copy and modify the heading we used on the Income Statement. Select and copy cells B2:J4. Paste that in cell B24. Then modify the text in cell B24 so it says "FakeSoftwareCo Balance Sheet". After that change the height of row 25 to "5".</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub3-step2" style="display:none">
                        <p>Next we will lay out each out the line items in the balance sheet. Starting with the current assets. Usually the most important current assets for a company are Cash and Accounts Receivables. Cash is fairly self-explanatory, it's the money that the company has in its bank accounts or securities that can be immediately converted to cash. Accounts Receivables is the money you are owed from customers who you have already provided a service for. Other current assets include things like stock inventory, supplies, and prepaid expenses. Depending on your needs you may need to model different combinations of these. For this model, we're going to just have "Cash", "Accounts Receivables, net", and "Other Current Assets".</p>

                        <p>Starting in cell B28, place those three line items and then in cell B31 put "Total Current Assets". To help with spacing on the page, change the height of row 27 to "5". Format the line items so that "Total Current Assets" is a subtotal.</p>
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

                        <p>Finally, other current liabilities are any other liabilities that you have to pay for in the next year. For example, if have payroll taxes payable or if you have declared a dividend.</p>

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

                        <p>Interest is the net gain or loss on interest earned from deposits and interest paid on debt. Net Income is the income that the company is generating for its shareholders.</p>

                        <p>For this model, we're going to project equity as one line item, but it can be broken out based on what you need to show in your analysis.</p>

                        <p>In cell B49 enter "Total Equity". Then in cell B51 type "Total Liabilities and Equity". Then select cells B51:J51 and add a top border. This line item is used to ensure the accounting equation (A = L + E) is always kept true.</p>
                      </div>


                    </div>

                      <div class="sub-lesson-contant-left-tab-menu">
                          <ul class="sub-esson-menu spread_sub_steps_clk">
                              <li><a href="javascript:void(0)" class="active" data-step="sub3-step1">1</a></li>
                              <li><a href="javascript:void(0)" data-step="sub3-step2">2</a></li>
                              <li><a href="javascript:void(0)" data-step="sub3-step3">3</a></li>
                              <li><a href="javascript:void(0)" data-step="sub3-step4">4</a></li>
                              <li><a href="javascript:void(0)" data-step="sub3-step5">5</a></li>
                              <li><a href="javascript:void(0)" data-step="sub3-step6">6</a></li>
                          </ul>
                      </div>

                    </div>
                </div>

               <div class="lcltc1" id="step4" style="display:none">
                    <span class="lcltc1-title">Cashflow Statement Setup</span>
                    <div class="lcltc1-contant">

                      <div class="lcltc1-mm">
                    

                      <div class="sub-lesson-step-contant" id="sub4-step1" style="display:block">
                          <p>The final statement we will lay out is the Cashflow Statement. This statement is divided into sections based on the source and use of cash in your business. The sources are "Cashflow from Operating Activities", "Cashflow from Investing Activities", and "Cashflow from Financing Activities"</p>

                          <p>As with the other two statements, the first thing we want to do is label this section of the model. Copy cells B24:J26. Paste in cell B53 and change the label to be "FakeSoftwareCo Cashflow Statement"</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub4-step2" style="display:none">
                        <p>The next step is to lay out the Cashflow from investing activities. We're going to label each section of the cash flow statement so that it's easy to distinguish between them. In cell B57 type "Operating Activities". Bold and underline the text. To help with spacing change the row height of row 56 to "5"</p>

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
                          <ul class="sub-esson-menu spread_sub_steps_clk">
                              <li><a href="javascript:void(0)" class="active" data-step="sub4-step1">1</a></li>
                              <li><a href="javascript:void(0)" data-step="sub4-step2">2</a></li>
                              <li><a href="javascript:void(0)" data-step="sub4-step3">3</a></li>
                              <li><a href="javascript:void(0)" data-step="sub4-step4">4</a></li>
                              <li><a href="javascript:void(0)" data-step="sub4-step5">5</a></li>
                              <li><a href="javascript:void(0)" data-step="sub4-step6">6</a></li>
                              <li><a href="javascript:void(0)" data-step="sub4-step7">7</a></li>
                          </ul>
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
                          <p>'Input historical Values Button'</p>

                          <p>To clearly indicate that we are not filling in historical values on the cash flow statement, select cells C58:E84 and change the fill color to dark gray.</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub5-step2" style="display:none">
                        <p>Now we will go through and add the subtotals for each section.</p>

                        <p>In cell C7, sum cells C5:C6. Press "Ctrll+c" to copy the formula. Then use "Ctrl+v" to paste the formula in cells D7:E7.</p>

                        <p>Next, we are going to calculate the Gross Margin. As previously mentioned, the Gross Margin is the difference between the company’s revenues and its Cost of Goods Sold. In cell C10 type "=C7-C9". Copy the formula and paste it to fill in the Gross Margin for the remaining historical years.</p>

                        <p>Replicate with the appropriate formulas for Operating Income, EBIT, Taxable Income, and Net Income.</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub5-step3" style="display:none">
                        <p>Now that we've incorporated the historical totals into the Income Statement, we can format all the historical values.</p>

                        <p>By convention any number that is hardcoded in a financial model is colored blue. The first formatting we're going to do is to color all the hardcoded numbers in the income statemetn blue.</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub5-step4" style="display:none">
                        <p>Next we are going to change the number format on the values in the income statement. For this model we're going to use a number format with 1 decimal and negative numbers in parenthesis. Change the number values for cells C5:E21 to that format.</p>

                        <p>For cells C22:E22, we're going to use a currency format. Which numbers you format as currency or normal numbers is a matter of preference. Some people like to do the first line in each statement, and some make all the numbers currency.</p>
                      </div>


                      <div class="sub-lesson-step-contant" id="sub5-step5" style="display:none">
                        <p>For the last piece of formatting on the Income Statement, we're going to bold each of the subtotals. Bold the contents in row 7, row 10, row 13, row 16, row 19, and row 22.</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub5-step6" style="display:none">
                        <p>On the balance sheet we're going to follow a similar process as we did in the income statement. First, we're going to add the appropriate total values for each of the sub headers.</p>

                        <p>Having trouble deciding which line items to sum? Click below to reveal a hint.</p>

                        <p>Hint: Total Current Assets is the sum of all Current Assets. Total Assets is the sum of "Total Current Assets" and all the company’s other assets.</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub5-step7" style="display:none">
                        <p>Now that we've laid out the totals on the balance sheet, we can format the content. First color all the hardcoded numbers blue. Next, we're going to change the number format to match the number format used in the income statement. Format the last line, "Total Liabilities and Equity" as currency.</p>

                        <p>On the balance sheet we're only going to bold the line items that are in the accounting equation.</p>
                        
                        <p>Having trouble deciding which line items to bold? Click below to reveal a hint.</p>

                        <p>Hint: The accounting equation is Total Assets = Total Liabilities and Equities</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub5-step8" style="display:none">
                          <p>We also want a way to make sure that our balance sheet is correct. Add a row below "Total Liabilities and Equity". In cell B52, type "Check" and italicize it. In cell C52, subtract "Total Assets" from "Total Liabilities and Equity". Drag the formula through column E. Format as a number with 3 decimals showing.</p>

                          <p>This way when we project our balance sheet, we'll be able to ensure it stays balanced.</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub5-step9" style="display:none">
                          <p>Even though we're not showing any of the historical values for the Cashflow statement, we can still bold the appropriate line items.</p>

                          <p>Bold "Cash Available for Financing Activities", "Cash flow from financing activities", "Change in cash", and "Ending Balance"</p>
                      </div>


                    </div>

                      <div class="sub-lesson-contant-left-tab-menu">
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

                          <p>To calculate year over year growth, for total revenue we divide the ending year by the beginning year and subtract 1. You can't calculate growth for the first year, so we're going to start in 2018. In cell D8 type "(D7/C7)-1". Drag the formula one cell to the right for 2019 as well.</p>

                          <p>Format D8:E8 as percentages. Select cells B8:E8 and italicizes them.</p>

                          <p>For % recurring, we're showing what percentage of the revenue is contractually renewed every year. For this company, the subscription revenue is recurring, and the license revenues are one-time sales. In cell C9, type "C5/C7". Copy the formula two cells to the right.</p>

                          <p>Format row 9 to match the formatting of row 8.</p>
                      </div>

                      <div class="sub-lesson-step-contant" id="sub6-step2" style="display:none">
                        <p>For Cost of Goods Sold, we're going to use Gross Margin Percentage to project it. In general, if something is referred to as margin, it's that value divided by revenue.</p>

                        <p>Add a row above row 14, Operating Expenses. In cell B13, type "% margin". In cell C13, type "C12/C7". Drag the formula to the right to fill in for the historical values.</p>

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

                        <p>Hint: Divide "Income Taxes" by "Taxable Income"</p>
                      </div>

                    </div>

                      <div class="sub-lesson-contant-left-tab-menu">
                          <ul class="sub-esson-menu spread_sub_steps_clk">
                              <li><a href="javascript:void(0)" class="active" data-step="sub6-step1">1</a></li>
                              <li><a href="javascript:void(0)" data-step="sub6-step2">2</a></li>
                              <li><a href="javascript:void(0)" data-step="sub6-step3">3</a></li>
                              <li><a href="javascript:void(0)" data-step="sub6-step4">4</a></li>
                              <li><a href="javascript:void(0)" data-step="sub6-step5">5</a></li>
                          </ul>
                      </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="lesson-contant-right">
    <!-- <span class="lc-title">Income Statement</span> -->
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
      <li><a href="javascript:void(0)" class="change_row_height">&#8597;</a></li>
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