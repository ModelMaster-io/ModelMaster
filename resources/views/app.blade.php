<!DOCTYPE html>
<html>
<head>
    <!-- Start Segment --><script>
      !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
      analytics.load("O6BeWDNcs0o2YOFEfxzmThVTlpHE06Fd");
      analytics.page();
      }}();
    </script><!-- End Segment -->
    
    <meta name="google-site-verification" content="0GMdqT4QwQwBM1GrXB4qu1mpBCkV0dfm4Kl5d-p_W2U" />
    <meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Model Master</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!--  jQuery 1.7+  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <!-- Include js plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <script type="text/javascript">
  
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    @if (Auth::check()) 
        var user_id = {{Auth::id()}};
        var user_email = '{{Auth::user()->email}}';
        var user_name = '{{Auth::user()->name}}';
        var previous_url = '{{url()->previous()}}';

        analytics.alias(user_id);
        analytics.identify(user_id, {
            email: user_email,
            name: user_name
        });

        if(previous_url.includes('register')){
            analytics.track('Account Created', {"user_id": user_id, "email": user_email});
        }

        if(previous_url.includes('login')){
            analytics.track('Log in', {"user_id": user_id});
        }

        if(previous_url.includes('https://www.facebook.com') || previous_url.includes('https://www.linkedin.com') || previous_url.includes('https://accounts.google.co.in')){
            analytics.track('Account Created', {"user_id": user_id, "email": user_email});
        }

    @endif

    </script>

    <!-- Common JS for pages -->
    <script src="{{ URL::asset('js/custom-script.js') }}"></script>
	
	@yield('scripts_and_styles')

</head>

<body>
    <div class="wapper">

        <div class="header">
            <div class="header-in">
                <div class="header-in-left">
                    <a href="{{ url('/') }}"><img src="{{ URL::asset('images/logo.png') }}" /></a>
                </div>
                <div class="header-in-right">

                    <div class="menu">
                        <ul>
                            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                            <li><a href="{{ url('/lessons') }}" class="{{ request()->is('lessons') ? 'active' : '' }}">Lesson</a></li>
                            <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
                            <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact Us</a></li>
                            @if(\Auth::check())
                            <li class="my-profile-link "><a href="{{ url('/user-profile') }}" class="{{ request()->is('/user-profile') ? 'active' : '' }}">My Profile</a></li>
                            @endif
                            <li class="logout_btn"> @if(\Auth::check())
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @else
                            <a href="{{ route('login') }}">Login</a>
                            @endif</li>
                        </ul>
                    </div>

                    <div class="topnav">
                        <div id="myLinks" style="display:none;">
                            <ul>
                                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                                <li><a href="{{ url('/lessons') }}" class="{{ request()->is('lessons') ? 'active' : '' }}">Lesson</a></li>
                                <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact Us</a></li>
                                <li>
                                @if(\Auth::check())
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                            @else
                            <a href="{{ route('login') }}">Login</a>
                            @endif
                            </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        @yield('content')

        <div class="footer">
            <!-- Begin Mailchimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup {
                    background: #fff;
                    clear: left;
                    font: 14px Helvetica, Arial, sans-serif;
                    width: 100%;
                }
                /* Add your own Mailchimp form style overrides in your site stylesheet
        or in this style block.
        We recommend moving this block and the preceding CSS link to the HEAD of
        your HTML file. */
            </style>
            <div id="mc_embed_signup" class="signup-box">
                <form action="https://gmail.us5.list-manage.com/subscribe/post?u=5424cd9dcd7373ef5fba31bcf&amp;id=90de1a44aa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL">Sign up for our mailing list</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Email address" required>
                        <!-- real people should not fill this in and expect good things - do not
        remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_5424cd9dcd7373ef5fba31bcf_90de1a44aa" tabindex="-1" value="">
                        </div>

                        <div class="clear">
                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                        </div>
                    </div>
                </form>
            </div>

            <!--End mc_embed_signup-->

            <div class="contact_us">
                <label>contact us</label>
                <div class="footer_contact_link">
                    <a href=""><i class="fa fa-phone"></i>(805)315-1072</a>
                </div>
                <div class="footer_contact_link">
                    <a href="mailto:contact@modelmaster.io" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i>contact@modelmaster.io
        </a>
                </div>
                <div class="footer_contact_link">
                    <a href="https://modelmaster.io/"><i class="fa fa-globe"></i>modelmaster.io</a>
                </div>
            </div>
            <div class="copyright">
                @copyright 2020 Model Master.
            </div>
        </div>

    </div>

</body>

</html>
