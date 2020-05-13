@extends('layouts.app')

@section('sections')

    <section class="inner-banner pt-80 pb-95" style="background-image: url('img/banner/inner-banner.jpg');" data-overlay="7">
        <div class="container">
            <div class="row z-5 align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="f-700 green">Portfolio Masonry</h1>
                    <span class="green-line bg-green d-none d-md-inline-block"></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <nav aria-label="breadcrumb" class="banner-breadcump">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home fs-12 mr-5"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio Masonry</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio area start -->
    <section class="portfolio pt-90 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- gallery filter buttons -->
                    <div class="filter-gallery style-sort pb-60">
                        <button class="btn-filter active" data-filter="*">All</button>
                        <button class="btn-filter" data-filter=".sec1">BUSINESS</button>
                        <button class="btn-filter" data-filter=".sec2">FINANCE</button>
                        <button class="btn-filter" data-filter=".sec3">MARKETING</button>
                        <button class="btn-filter" data-filter=".sec4">SEO</button>
                        <button class="btn-filter" data-filter=".sec5">TECHNOLOGY</button>
                    </div>
                    <!-- gallery filter buttons -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-filter ">
                        <div class="grid-item grid-sizer sec1">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/1.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec2">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/2.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec3">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/3.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec4">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/4.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec5">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/5.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec1">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/6.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec2">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/7.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec3">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/8.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec4">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/9.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec5">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/10.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item grid-sizer sec1">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/1.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec2">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/2.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec3">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/3.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec4">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/4.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec5">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/5.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item sec1">
                            <div class="portfolio-item">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/6.jpg" alt="">
                                    <div class="portfolio-overlay transition-4">
                                        <span class="date z-10 uppercase fs-13 f-500">05 jun 2019</span>
                                        <div class="portfolio-item-detail z-10">
                                            <h5 class="white f-700 fs-19 mb-5"><a href="#">Lorem Ipsum</a></h5>
                                            <span class="filtered-name uppercase fs-13 f-500">
                    FINANCE
                    </span>
                                            <a href="#" class="plus-line-link transform-v-center">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio area end -->

    <!-- Experience Cta start -->
    <section class="experience-cta pt-100 pb-100" style="background-image: url('img/bg/bg-2.jpg');" data-overlay="9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 z-5 text-center text-lg-left wow fadeIn">
                    <div class="exp-cta pr-50 pr-lg-00">
                        <h1 class="white f-700 mb-10">
            <span class="green">25 Years</span> of Experience in the <span class="green">Industry</span>
        </h1>
                        <p class="white mb-55 mb-md-30 pr-60 pr-md-00">Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim. Quisque dapibus</p>
                        <a href="#" class="btn btn-square  blob-small">Contact us
            <i class="fas fa-long-arrow-alt-right ml-20"></i>
        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-60">
                    <div class="row no-gutters">
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up shade z-5 wow fadeIn" data-wow-delay=".2s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">3000</span>+</h2>
                                <p class="uppercase white mb-0">Satisfied Customers</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5 wow fadeIn" data-wow-delay=".4s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">250</span>+</h2>
                                <p class="uppercase white mb-0">Awards Winner</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5 wow fadeIn" data-wow-delay=".6s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">350</span>+</h2>
                                <p class="uppercase white mb-0">Professionals</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5 shade wow fadeIn" data-wow-delay=".8s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">5300</span>+</h2>
                                <p class="uppercase white mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-type-2 pt-95 pb-100">
        <div class="container">
            <div class="row align-items-end  mb-45">
                <div class="col-lg-7 col-md-12 text-center text-lg-left">
                    <div class="fancy-head left-al">
                        <h5 class="line-head mb-15">
                  <span class="line before d-lg-none"></span>
                    News & blogs
                  <span class="line after"></span>
                </h5>
                        <h1>Latest News & Blogs</h1>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 text-center text-lg-right">
                    <a href="#" class="btn btn-round-border mb-15 mt-md-20 wow fadeInRight">View All</a>
                </div>
            </div>
            <div class="row mb-20 mb-sm-00">
                <div class="col-md-6">
                    <div class="blog-box relative">
                        <a href="#">
                            <div class="blog-img img-lined mr-40 mr-md-00">
                                <img src="img/blog/blog1.jpg" alt="" class="w-100">
                            </div>
                        </a>
                        <div class="blog-box-text z-10 bg-green-op-9 shadow-4 mb-sm-30">
                            <p class="blue mb-10">
                                <span class="line-before  transition-4">15 MAY 2019 - BY ADMIN</span>
                            </p>
                            <h5 class="white f-700 mb-10">
              <a href="#" class="fs-19">Lorem ipsum dolor sit amet, consectetur adipiscing..</a>
            </h5>
                            <a href="#" class="text-link-a white fs-13 mb-10 uppercase f-600">Readmore <i class="fas fa-long-arrow-alt-right ml-10"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-box relative">
                        <a href="#">
                            <div class="blog-img img-lined mr-40 mr-md-00">
                                <img src="img/blog/blog2.jpg" alt="" class="w-100">
                            </div>
                        </a>
                        <div class="blog-box-text z-10 bg-green-op-9 shadow-4">
                            <p class="blue mb-10">
                                <span class="line-before transition-4">30 JUL 2019 - BY ADMIN</span>
                            </p>
                            <h5 class="white f-700 mb-10">
              <a href="#">Nullam lobortis iaculis tortor, eu mollis eros au..</a>
            </h5>
                            <a href="#" class="text-link-a white fs-13 mb-10 uppercase f-600">Readmore <i class="fas fa-long-arrow-alt-right ml-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog area start -->

    
@endsection