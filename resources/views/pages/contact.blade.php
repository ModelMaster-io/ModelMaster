@extends('app')

@section('scripts_and_styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

@endsection

@section('content')
<div class="contact-us-blog">

        <div class="contact-us-blog-in">
        <div class="contact-us-blog-in-left">
            <span class="contact-title">Contact Us</span>
        
            <div class="contact-us-from">

                <form id="frm-contact" action="{{ route('contactus') }}" method="POST">
                    @csrf
                    <div class="contact-us-from-in">
                        <span class="contact-icon"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" placeholder="User name">
                    </div>
                    <div class="contact-us-from-in">
                        <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="contact-us-from-in">
                        <span class="contact-icon ci2"><i class="fa fa-commenting"></i></span>
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
            
                    <div class="contact-us-from-btn">
                        <button type="submit" class="contact-usr-submit"> {{ __('SEND') }}<i class="fa fa-spinner fa-spin" style="font-size:18px;display:none;"></i></button>
                    </div>

                </form>
        
            </div>
        
        </div>
        <div class="contact-us-blog-in-right">
            <span class="contact-title">Contact Infomation</span>
            <span class="contact-dtl"><i class="fa fa-envelope"></i>contact@modelmaster.io</span>
            <span class="contact-dtl"><i class="fa fa-phone"></i>+ (805)315-1072</span>
        
            <div class="contact-socil-icon">
                <a href="https://twitter.com/modelmasterio"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/modelmasterio"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.facebook.com/ModelMasterIO"><i class="fa fa-facebook-official"></i></a>
            </div>
        
        </div>
        </div>
        
        </div>

        @endsection