@extends('app')

@section('scripts_and_styles')
<script>
jQuery(document).ready(function() {
   
    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        items:3,
        dots:false,
        slideSpeed: 300,
        responsiveClass:true,
        responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        991:{
            items:3
        }
        
        }
    });

});
</script>
@endsection

@section('content')

<div class="home-blog">


        <div class="home-blog-banner-block">
        <div class="home-banner">
            <div class="home-banner-left"><img src="images/shit.png" /></div>
            <div class="home-banner-right">
                <span class="home-banner-title">Master Financial Modeling</span> 
                <p>Learn how to build a 3-statement financial model. You'll learn how to
                    go from a blank spreadsheet to a fully functioning model. Build
                    an Income Statement, a Balance Sheet, and a Cashflow statement. Learn how the purpose of each statement and how they connect to each other.</p>
                <div class="home_viewall_btn_block"><a class="home_learn_btn"  href="/lessons">Start Learning Now</a></div>
            </div>	
        </div>
        </div>
       
        <div class="home_new_future_block">
        <div class="home_new_future_block_title">Lessons</div>
        <div class="home_new_future_main_block">
            <div class="new_future_block">
                <div class="home_new_future_block_img">
                    <img src="images/future_img1.jpg"/>
                    <div class="home_new_future_block_des">
                        <div class="fotureblock_title">Simple
                        3-Statement Financial Model</div>
                        <div class="home_new_future_des">Learn the basics of the 3 financial
                        statements and build a projection for a software company.</div>
                        <a class="home_new_future_btn" href="/lessons">Start
                        Learning</a>
                    </div>
                </div>
            </div>
            <div class="new_future_block">
                <div class="home_new_future_block_img">
                    <img src="images/future_img2.jpg"/>
                    <div class="home_new_future_block_des">
                        <div class="fotureblock_title">Simple LBO Model <br>(Coming soon)</div>
                        <div class="home_new_future_des">Learn how
                        to build a leveraged buy out model and estimate your projected returns.</div>
        
                    </div>
                </div>
            </div>
            <div class="new_future_block">
                <div class="home_new_future_block_img">
                    <img src="images/future_img3.jpg"/>
                    <div class="home_new_future_block_des">
                        <div class="fotureblock_title">More to Come</div>
                        <div class="home_new_future_des">Have a suggestion for courses
                        you want to see, go to our contact page and let us know.</div>
                        <a class="home_new_future_btn" href="/contact">Make a recommendation </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home_viewall_btn_block"><div class="home_viewall_btn">view all</div></div>
        </div>
        
        <div class="testimonial_block_main">
        <div class="testimonial_block_main_title">What Our Customer Says</div>
        <div  id="owl-example" class="testimonial_block owl-carousel" >
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm1.jpg"/>
                    <div class="auth_name">Private Equity</div>
                    <div class="deg_name">Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm2.jpg"/>
                    <div class="auth_name">Defense Contractor</div>
                    <div class="deg_name">Financial Analyst</div>
                    <div class="testimonial_block_des">It's fantastic that
                        someone is actually fixing this problem...breaking in to any more
                        commercial finance jobs without proper modeling experience is a real
                    concern.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm1.jpg"/>
                    <div class="auth_name">Private Equity</div>
                    <div class="deg_name">Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm2.jpg"/>
                    <div class="auth_name">Defense Contractor</div>
                    <div class="deg_name">Financial Analyst</div>
                    <div class="testimonial_block_des">It's fantastic that
                        someone is actually fixing this problem...breaking in to any more
                        commercial finance jobs without proper modeling experience is a real
                    concern.</div>
                </div>
            </div>
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm1.jpg"/>
                    <div class="auth_name">Private Equity</div>
                    <div class="deg_name">Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm1.jpg"/>
                    <div class="auth_name">Private Equity</div>
                    <div class="deg_name">Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        </div>
        
        </div>
</div>

@endsection