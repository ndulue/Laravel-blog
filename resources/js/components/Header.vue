<template>
    <div>
        <header>
            <section class="top-header">
                <div class="container">
                    <div class="row d-flex  align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="left-head-top d-flex">
                                <div class="contact-head logo-2">
                                    <a href="#">
                                        <img v-bind:src="'img/logo/logo-2.png'" alt="">
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
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-grid-3.html">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="signup.html">Signup</a>
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
    </div>
</template>
