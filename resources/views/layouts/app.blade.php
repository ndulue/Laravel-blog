<!DOCTYPE html>
<html lang="en">


<head>
    <title>Bizz - Business Consulting and Agency HTML Template </title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Calling Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Calling Favicon -->
    <!-- ********************* -->
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" class="color-changing" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- End CSS files -->
</head>

<body>
    <!-- Preloader start -->
    <div class="loader-page flex-center">
        <img src="{{ asset('img/loader.gif') }}" alt="">
    </div>
    <!-- Preloader end -->
    <!-- Header start -->

    <header>
        <section class="top-header">
            <div class="container">
                <div class="row d-flex  align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="left-head-top d-flex">
                            <div class="contact-head logo-2">
                                <a href="#">
                                    <img src="{{ asset('img/logo/logo-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="contact-head mail flex-center d-none d-lg-flex">
                                <a class="black f-500" href="mailto:info@example.com">
                                    <i class="far fa-envelope green mr-10"></i>info@bizz.com
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4  col-md-5">
                        <div class="icon-links icon-links-top d-flex align-items-center">
                            <div class="language d-none d-md-flex pl-30 align-items-center">
                                <div class="contact-head phone flex-center d-none d-sm-flex">
                                    <a class="black f-500" href="tel:1234567890">
                                        <i class="fas fa-phone green mr-15  mr-10"></i>+234 070 6681 8156
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-head transition-4 bg-blue">
            <div class="container ">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-9 text-left p-md-0">
                        <div class="menu-links-2">
                            <nav class="main-menu main-menu-2 white">
                                <ul>
                                    <li class="active">
                                        <a href="{{route('index.get')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about.get')}}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{route('portfolio.get')}}">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact.get')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-2"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- Header end -->

    @yield('sections')

    <section class="cta pt-50 pb-50" style="background-image: url('img/bg/bg_cta.jpg');" data-overlay="9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 mb-md-20 text-center text-lg-left">
                    <h3 class="z-5 white f-700 lh-18 wow fadeInLeft">What type of challenge are you facing? 
            <span class="green italic">Let’s talk</span>
            </h3>
                </div>
                <div class="col-xl-8 col-lg-7 text-center text-lg-right z-5">
                    <a href="#" class="btn btn-square-white mr-20 mr-xs-00 d-block d-sm-inline-block mb-xs-15 wow fadeInUp">
                        <i class="fas fa-envelope mr-15"></i>iamemekandulue@gmail.com
                    </a>
                    <a href="tel:1234567890" class="btn btn-square-green d-block d-sm-inline-block blob-small wow fadeInUp">
                        <i class="fas fa-phone mr-15"></i>+234 706 6681 8156
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer area start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row mb-sm-50 mb-xs-00">
                <div class="col-lg-4 z-5">
                    <div class="contact-area relative h-100 mr-lg-20 mr-md-00">
                        <div class="footer-logo mb-35">
                            <img src="{{ asset('img/logo/logo_footer.png') }}" alt="">
                        </div>
                        <div class="contact-options mb-35">
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt green"></i>5 Godwin Street,Lagos, Nigeria
                                </li>
                                <li>
                                    <i class="fas fa-phone green"></i>(234) 706 681 8156
                                </li>
                                <li>
                                    <i class="fas fa-envelope green"></i>info@example.com
                                </li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="footer-links pt-85 pt-md-50 mb-sm-70">
                        <h5 class="green f-700 mb-35">Quick Links</h5>
                        <ul class="links-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="footer-links pt-85 pt-md-50 mb-sm-70">
                        <h5 class="green f-700 mb-35">Our Services</h5>
                        <ul class="links-list">
                            <li><a href="#">Investment planning</a></li>
                            <li><a href="#">Financial Planning</a></li>
                            <li><a href="#">Business Management</a></li>
                            <li><a href="#">Mutual Funds</a></li>
                            <li><a href="#">Markets Research</a></li>
                            <li><a href="#">Business Consulting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="footer-links pt-85 pt-md-50 mb-50" >
                        <h5 class="green f-700 mb-35">Need Help?</h5>
                        <ul class="links-list">
                            <li><a href="#">FAQS</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Get a Quote</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end -->
    <!-- ********************* -->
    <!-- JS Files -->
    <script src="{{ asset('js/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/lightslider.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JS Files end -->
</body>


</html>

