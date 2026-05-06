<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="/frontend/my-img/favicon.png" type="image/x-icon">
    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="/frontend/assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/aos.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/frontend/assets/css/main.css">
    <link rel="stylesheet" href="/frontend/assets/css/my.css">


    <!--=====  JS SCRIPT LINK =======-->
    <script src="/frontend/assets/js/plugins/jquery-3-6-0.min.js"></script>
    <script src="/frontend/assets/js/plugins/waypoints.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="homepage4-body">

    <a href="tel:+18443000035" class="call-float">
        <i class="fa-solid fa-phone"></i>
    </a>

    <style>
        .call-float {
            position: fixed;
            width: 55px;
            height: 55px;
            bottom: 20px;
            left: 20px;
            background-color: #d80758;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            z-index: 999;
            transition: 0.3s;
        }

        .call-float:hover {
            background-color: #b00649;
            transform: scale(1.1);
        }
    </style>

    <!--===== PRELOADER STARTS =======-->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div id="loading-icon">
                <svg id="icon-cctv" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.051 60.051">
                    <path
                        d="M56.963 32.026H55.14a3.091 3.091 0 0 0-3.088 3.088v3.912h-10v-6.219c3.646-1.177 5.957-6.052 5.957-12.781 0-7.235-2.669-12.333-6.8-12.988a1.028 1.028 0 0 0-.157-.012h-40a1 1 0 0 0-.982.816H.069c-.02.107-.472 2.648 1.243 4.714 1.138 1.371 2.92 2.169 5.292 2.395a23.298 23.298 0 0 0-.552 5.075c0 7.29 3.075 13 7 13h21v12.967a3.036 3.036 0 0 0 3.033 3.033h1.935a3.03 3.03 0 0 0 2.84-2h10.193v2.912a3.091 3.091 0 0 0 3.088 3.088h1.823a3.091 3.091 0 0 0 3.088-3.088V35.114a3.093 3.093 0 0 0-3.089-3.088zm-15.996-23c2.397.436 4.788 3.683 5.018 10h-20.52l-3.707-3.707a1 1 0 0 0-.707-.293h-7.404l-.029-.042a7.071 7.071 0 0 0-.34-.495c-.067-.09-.142-.18-.215-.27-.033-.041-.064-.082-.098-.123a7.743 7.743 0 0 0-.123-.141c-.044-.05-.08-.099-.125-.149-.017-.019-.039-.032-.058-.05a11.85 11.85 0 0 0-.593-.596 15.053 15.053 0 0 0-1.191-1.005c-.087-.067-.173-.134-.263-.201-1.513-1.131-3.265-2.134-4.846-2.928h35.201zm-26.916 9.666c0 2.09-.6 3.471-1 4.073-.4-.603-1-1.983-1-4.073 0-.806.087-1.489.21-2.053.004.006.012.008.017.013a.982.982 0 0 0 .378.28.987.987 0 0 0 .396.092h.862c.091.534.137 1.092.137 1.668zM2.864 11.296c-.482-.574-.696-1.218-.791-1.773 1.508.648 3.509 1.606 5.354 2.716-.098.246-.188.501-.276.759-2.004-.128-3.443-.699-4.287-1.702zm5.187 8.73c0-2.422.382-4.745 1.086-6.671l.06.042c.617.445 1.133.879 1.576 1.303-.351.861-.723 2.197-.723 3.992 0 3.374 1.402 6.333 3 6.333s3-2.959 3-6.333c0-.571-.048-1.125-.124-1.667h1.92a22.2 22.2 0 0 1 .204 3c0 6.195-2.688 11-5 11-2.363.001-4.999-4.517-4.999-10.999zm8.673 11c.028-.033.053-.075.081-.109.191-.231.376-.479.554-.742.03-.044.061-.082.091-.127.205-.313.399-.65.585-1.003.05-.094.095-.195.143-.292a15.117 15.117 0 0 0 .537-1.216c.119-.304.229-.618.334-.94.034-.106.072-.208.104-.315.131-.43.249-.872.354-1.328.021-.091.036-.185.056-.276.079-.371.15-.749.211-1.135.024-.155.045-.311.067-.467.047-.349.086-.703.117-1.061.013-.152.029-.303.039-.457a22.72 22.72 0 0 0 .056-1.532v-3h.586l3.707 3.707a1 1 0 0 0 .707.293h20.934c-.23 6.317-2.621 9.564-5.018 10H16.724zm22.295 16h-1.935a1.034 1.034 0 0 1-1.033-1.033V33.026h4V45.993c0 .569-.463 1.033-1.032 1.033zm3.032-2v-4h10v4h-10zm16 4.911c0 .6-.488 1.088-1.088 1.088H55.14a1.09 1.09 0 0 1-1.088-1.088V35.113c0-.6.488-1.088 1.088-1.088h1.823c.6 0 1.088.488 1.088 1.088v14.824z" />
                    <circle class="led-blink-1" cx="28.051" cy="27.026" r="1" />
                    <circle class="led-blink-2" cx="24.051" cy="27.026" r="1" />
                </svg>
            </div>
        </div>
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        X
                    </span>
                </div>
            </div>
        </div>
    </div> --}}
    <!--===== PRELOADER ENDS =======-->

    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!--===== PROGRESS ENDS=======-->

    <!--=====HEADER START=======-->
    <header>
        <div class="header-area homepage4 header header-sticky d-none d-lg-block " id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-elements">
                            <div class="site-logo">
                                <a href="/">
                                    <img src="/frontend/my-img/logo.png" alt="Logo" height="50" width="210">
                                </a>
                            </div>
                            <div class="main-menu">
                                <ul>
                                    <li><a href="/">Home </a></li>
                                    <li><a href="/#about"> About Us  </a></li>
                                    <li><a href="/#contact">Contact US</a></li>
                                </ul>
                            </div>
                            <div class="btn-area">
                                <a href="tel:+18443000035" class="header-btn5">Contact Us<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--===== MOBILE HEADER STARTS =======-->
    <div class="mobile-header mobile-haeder4 d-block d-lg-none">
        <div class="container-fluid">
            <div class="col-12">
                <div class="mobile-header-elements">
                    <div class="mobile-logo">
                        <a href="/"><img src="/frontend/my-img/logo.png" alt=""height="50"
                                width="210"></a>
                    </div>
                    <div class="mobile-nav-icon dots-menu">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-sidebar mobile-sidebar4">
        <div class="logosicon-area">
            <div class="logos">
                <img src="/frontend/my-img/logo.png" alt="">
            </div>
            <div class="menu-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="mobile-nav mobile-nav1">
            <ul class="mobile-nav-list nav-list1">
                <li><a href="/">Home </a></li>
                <li><a href="/#about"> About Us  </a></li>
                <li><a href="/#contact">Contact US</a></li>
            </ul>

            <div class="allmobilesection">
                <a href="tel:+18443000035" class="header-btn5">Call Now <span><i
                            class="fa-solid fa-arrow-right"></i></span></a>
                <div class="single-footer">
                    <h3>Contact Info</h3>
                    <div class="footer1-contact-info">
                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-text">
                                <a href="tel:+18443000035">+1 (844) 300-0035</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== MOBILE HEADER STARTS =======-->
    <!--=====HEADER END =======-->

    @yield('content')

    <!--===== FOOTER AREA STARTS =======-->
    <div class="footer4-section-area">
        <img src="/frontend/assets/img/bg/bg1.png" alt="" class="bg1">
        <div class="container">
            <div class="row">

                <!-- LEFT (6) -->
                <div class="col-lg-6 col-md-6">
                    <div class="logo-content">
                        <img src="/frontend/my-img/logo.png" alt="" height="50" width="210">
                        <p>We provide reliable CCTV and security solutions to protect your home and business with smart,
                            modern technology.</p>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <!-- EXPLORE (3) -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-list">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/#about">About Us</a></li>
                            <li><a href="/#contact">Contact US</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/terms-and-condition">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <!-- CONTACT (2) -->
                <div class="col-lg-2 col-md-6">
                    <div class="head">
                        <h4>Contact Us </h4>
                    </div>
                    <div class="location-area">
                        <div class="img1">
                            <a href="#"><i class="fa-solid fa-phone"></i></a>
                        </div>
                        <div class="text">
                            <a href="tel:+18443000035">+1 (844) 300-0035</a>
                        </div>
                    </div>

                    <!-- KEEP THIS -->
                    <div class="space50"></div>
                </div>

                <!-- EMPTY FIX COLUMN (1) -->
                <div class="col-lg-1 d-none d-lg-block"></div>

            </div>

            <!-- COPYRIGHT -->
            <div class="row mt-5">
                <div class="col-lg-12 m-auto">
                    <div class="copyright text-center">
                        <p>© Copyright 2026 -Defend My Home. All Right Reserved</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--===== FOOTER AREA ENDS =======-->

    <!--===== JS SCRIPT LINK =======-->
    <script src="/frontend/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/frontend/assets/js/plugins/aos.js"></script>
    <script src="/frontend/assets/js/plugins/fontawesome.js"></script>
    <script src="/frontend/assets/js/plugins/magnific-popup.js"></script>
    <script src="/frontend/assets/js/plugins/mobilemenu.js"></script>
    <script src="/frontend/assets/js/plugins/owlcarousel.min.js"></script>
    <script src="/frontend/assets/js/plugins/nice-select.js"></script>
    <script src="/frontend/assets/js/plugins/slick-slider.js"></script>
    <script src="/frontend/assets/js/plugins/circle-progress.js"></script>
    <script src="/frontend/assets/js/plugins/gsap.min.js"></script>
    <script src="/frontend/assets/js/plugins/counter.js"></script>
    <script src="/frontend/assets/js/plugins/Splitetext.js"></script>
    <script src="/frontend/assets/js/plugins/ScrollTrigger.min.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
</body>

</html>
