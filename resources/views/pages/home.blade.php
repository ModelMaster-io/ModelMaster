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
                    go from a blank spreadsheet to a fully functioning model. You'll build
                    an Income Statement, a Balance Sheet, and a Cashflow statement. You'll
                learn how these statements relate to each other and how each one works.</p>
                <div class="home_viewall_btn_block"><div class="home_learn_btn">Start Learning Now</div></div>
            </div>	
        </div>
        </div>
        
        <div class="home_service_block">
        <div class="home_service_block_inner">
            <div class="home_service_block_title">A better way to learn modeling</div>
            <div class="service_block">
                <div class="ser__count"><span>1</span></div>
                <div class="service_block_description">
                    <div class="service_block_des">
                        <div class="ser_heading">Step by Step Instructions</div>
                        <div class="ser_des">Get step by step
                            guidance to walk you through each step of building the model. You'll
                            learn every part of the process". The picture should be from the lesson
                        tab with one of the instructions.</div>
                    </div>
                    <div class="service_block_img">
                        <img src="images/ser1.png"/>
                    </div>
                </div>
            </div>	
            <div class="service_block active">
                <div class="ser__count"><span>2</span></div>
                <div class="service_block_description">
                    <div class="service_block_des">
                        <div class="ser_heading">Real time feedback</div>
                        <div class="ser_des">Get feedback on your
                            model as you're building. You don't need to wait until the end to track
                            down a mistake". The picture should be one of the lessons with an error
                        message.</div>
                    </div>
                    <div class="service_block_img">
                        <img src="images/ser2.png"/>
                    </div>
                </div>
            </div>	
            <div class="service_block">
                <div class="ser__count"><span>3</span></div>
                <div class="service_block_description">
                    <div class="service_block_des">
                        <div class="ser_heading">Track your progress</div>
                        <div class="ser_des">Keep track of your
                            progress and learning so you can know which areas you need to improve".
                            Picture should be of the streak tracker from the profile page. I'm
                        envisioning something like the GitHub contribution tracker.</div>
                    </div>
                    <div class="service_block_img">
                        <img src="images/ser3.png"/>
                    </div>
                </div>
            </div>	
            <div class="service_block_btn"><i class="fa fa-arrow-down"></i></div>
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
                        <div class="home_new_future_btn">Start
                        Learning</div>
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
                        <div class="home_new_future_btn">Make a recommendation </div>
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
                    <div class="auth_name">Buford Matos</div>
                    <div class="deg_name">Private Equity Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm2.jpg"/>
                    <div class="auth_name">anissa rose</div>
                    <div class="deg_name">Defense Contractor Financial Analyst</div>
                    <div class="testimonial_block_des">It's fantastic that
                        someone is actually fixing this problem...breaking in to any more
                        commercial finance jobs without proper modeling experience is a real
                    concern.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm1.jpg"/>
                    <div class="auth_name">Rosss Tater</div>
                    <div class="deg_name">Private Equity Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm2.jpg"/>
                    <div class="auth_name">anissa rose</div>
                    <div class="deg_name">Defense Contractor Financial Analyst</div>
                    <div class="testimonial_block_des">It's fantastic that
                        someone is actually fixing this problem...breaking in to any more
                        commercial finance jobs without proper modeling experience is a real
                    concern.</div>
                </div>
            </div>
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm1.jpg"/>
                    <div class="auth_name">Buford Matos</div>
                    <div class="deg_name">Private Equity Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        
            <div class="testimonial_block_inner">
                <div class="testimonial_block_inner_shadow">
                    <img src="images/tm1.jpg"/>
                    <div class="auth_name">Rosss Tater</div>
                    <div class="deg_name">Private Equity Associate</div>
                    <div class="testimonial_block_des">I
                        came from a consulting background and needed to learn financial modeling
                    for my job. This is exactly the tool I wish had existed when I had to learn.</div>
                </div>
            </div>
        </div>
        
        </div>
</div>

@endsection