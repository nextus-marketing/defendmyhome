@extends('layouts.frontend')
@section('title')
    Contact Us | Defend My Home
@endsection
@section('content')
    <style>
        .hero-inner-section-area {
            position: relative;
            z-index: 1;
            background: #f9016180;
            padding: 160px 0 100px;
            overflow: hidden;
        }

        * {
            margin: 0;
            padding: 0;
        }
    </style>
    <div class="hero-inner-section-area">
        <img src="/frontend/assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-5">
        <img src="/frontend/assets/img/elements/elements2.png" alt="" class="elements2 aniamtion-key-1">
        <img src="/frontend/assets/img/elements/elements3.html" alt="" class="elements3 aniamtion-key-5">
        <img src="/frontend/assets/img/elements/elements4.html" alt="" class="elements4 aniamtion-key-1">
        <img src="/frontend/assets/img/elements/elements5.html" alt="" class="elements5 keyframe5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 m-auto">
                    <div class="hero-main-area heading1 text-center">
                        <h1 class="text-anime-style-3">Contact Us</h1>
                        <a href="/">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-main-inner-area sp1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading2 contact-header">
                        <h5><img src="/frontend/assets/img/icons/finger2.svg" alt="">Contact Us</h5>
                        <h2>Let's Discuss Your Security Needs Solutions</h2>
                        <p>Have questions about our security and CCTV solutions? Ready to take the next step in securing
                            your property? Don't hesitate to get in touch with us. Our team of experts is here to provide
                            you with the guidance</p>
                        <div class="space32"></div>
                        <div class="number-address-area">
                            <div class="phone-number">
                                <div class="img1">
                                    <img src="/frontend/my-img/call-icons4.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Phone Number</p>
                                    <a href="tel:+18443000035">+1 (844) 300-0035</a>
                                </div>
                            </div>

                            <div class="phone-number m-0">
                                <div class="img1">
                                    <img src="/frontend/my-img/email-icons4.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Email Address</p>
                                    <a href="mailto:info@defendmyhome.org">info@defendmyhome.org</a>
                                </div>
                            </div>
                        </div>
                        <div class="space50"></div>
                        <div class="number-address-area">
                            <div class="phone-number">
                                <div class="img1">
                                    <img src="/frontend/my-img/location-icons3.svg" alt="">
                                </div>
                                <div class="content">
                                    <a href="#">944 South Columbus St, </br>
                                        Arlington, VA, 22204</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
