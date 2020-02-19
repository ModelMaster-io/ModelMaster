<!DOCTYPE html>
<html>


<!-- start Mixpanel --><script type="text/javascript">(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);

var productionHost = 'modelmaster.io'; 
var devToken = '133ef583f0c32f61f04be0bcdd129b3d'; 
var prodToken = '517ed7687c685925296abb611e860ccd';

//If the hostname is anything other than your production domain, initialize the Mixpanel library with your Development Token 
if (window.location.hostname.toLowerCase() !== productionHost) { mixpanel.init(devToken);
 } else { mixpanel.init(prodToken); } ;</script><!-- end Mixpanel -->
<head>
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
