@extends('layouts.app')

@section('sections')
    
    <!-- immer banner start -->
    <section class="inner-banner pt-80 pb-95" style="background-image: url('img/banner/inner-banner.jpg');" data-overlay="7">
        <div class="container">
            <div class="row z-5 align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="f-700 green">About us</h1>
                    <span class="green-line bg-green d-none d-md-inline-block"></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <nav aria-label="breadcrumb" class="banner-breadcump">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home fs-12 mr-5"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- immer banner end -->

    <!-- About us start -->
    <section class="about-us pt-100 pb-100">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-lg-6">
                    <div class="relative img-lined bg-blue mx-auto shadow-1">
                        <img src="img/about/about_video.jpg" alt="" class="opacity-3 w-100">
                        <div class="blob green transform-center">
                            <a href="https://www.youtube.com/watch?v=qtQgbdmIO30" class="popup-video"> <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text mt-md-60 text-center text-lg-left">
                        <div class="fancy-head left-al  mb-10">
                            <h5 class="line-head mb-10">
              <span class="line before d-lg-none"></span>
                About Us
              <span class="line  after"></span>
            </h5>
                            <h1>Our Success Story</h1>
                        </div>
                        <p class="big-p blue">Commodo ullamcorper a lacus vestibulum sed massa tincidunt dui ut ornare lectus sit</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet quis felis eget consequat. Sed vitae tellus mattis, ornare elit vel, hendrerit erat. Integer commodo dui nec est blandit bibendum. Maecenas lectus lectus, rutrum vel laoreet id, cursus tempor metus. Nulla consectetur, risus in sollicitudin pulvinar.</p>
                        <div class="about-author mt-20 d-flex align-items-center justify-content-center justify-content-lg-start">
                            <div class="signature mr-45 mr-xs-15">
                                <img src="img/about/signature.png" alt="">
                            </div>
                            <div class="name-author">
                                <p class="name">Jhon Doe</p>
                                <p>Founder & CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About us end -->
    <!-- Mission and vision area start -->
    <section class="mission-vision bg-light-white pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-50 pr-sm-150 mb-md-30">
                    <h2 class="fancy-2 f-700 mb-25"> Our Mission</h2>
                    <p class="f-500 blue fs-15">Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim. Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor, pulvinar id lig.</p>
                    <p>Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim. Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor, pulvinar id ligula non, congue aliquam velit. Pelle ntesque tempor ornare mal esuada. Mauris vel metus vel urna interdum condimentum.</p>
                </div>
                <div class="col-lg-6 pr-50 pr-sm-15">
                    <h2 class="fancy-2 f-700 mb-25"> Our Vision</h2>
                    <p class="f-500 blue fs-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, diam nec porttitor pulvinar, turpis orci mollis ex, eget rutrum sapien.</p>
                    <ul class="check-list-2">
                        <li>Praesent sed varius ex. Ut volutpat ex in leo</li>
                        <li>Consequat, sit amet pulvinar nulla laoreet</li>
                        <li>Donec sed pretium massa pulvinar efficitur</li>
                        <li>Lorttitor elit porta et Nullam pretium</li>
                        <li>Donec sed pretium massa pulvinar </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Mission and vision area end -->

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
    <!-- Experience Cta end -->

    <!-- Faq area start -->
    <section class="faq-area relative bg-light-white">
        <div class="bg-faq-img h-100 bg-cover d-none d-lg-block col-lg-5" style="background-image: url('img/bg/bg-faq.jpg');"></div>
        <div class="container-fluid p-0">
            <div class="row no-gutters faq-row">
                <div class="col-lg-7 offset-lg-5  pt-95 pb-85">
                    <div class="faq-right-area">
                        <div class="row align-items-end mb-25">
                            <div class="col-lg-12  text-center text-lg-left">
                                <div class="fancy-head left-al">
                                    <h5 class="line-head mb-15">
                    <span class="line before d-lg-none"></span>
                      Faq
                    <span class="line after"></span>
                  </h5>
                                    <h1>Frequently Asked Questions</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="faq-box">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                                <h5 class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur?
                      </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header  collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                                <h5 class="mb-0">
                  Aenean lobortis feugiat mauris at? 
                      </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                                <h5 class="mb-0">
                  Nulla porttitor risus id mauris viverra?
                      </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="button">
                                                <h5 class="mb-0">
                  Phasellus pulvinar porttitor?
                      </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                <div class="card-body">
                                                    Maecenas bibendum leo a velit tristique, sed ornare ante aliquet. Nullam nec magna vel nulla vehicula auctor. Sed a posuere eros. Curabitur molestie sodales orci ac laoreet. Nam mi tellus.
                                                </div>
                                            </div>
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
    <!-- Faq area end -->

    <!-- Team area start -->
    <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="team-green-head h-100 d-flex align-items-center pl-50 pr-50 pl-lg-30 pr-lg-30" style="background-image: url('img/bg/bg_hands.jpg');" data-overlay="9">
                        <div class="fancy-head left-al z-5 pt-md-30 pb-md-30">
                            <h5 class="line-head mb-10 white">
                Our team
              <span class="line after bg-white"></span>
            </h5>
                            <h1 class="white mb-5">Meet Our Team</h1>
                            <p class="white mb-25">Pellentesque tempor ornare mal esuada. Mauris vel metus vel urna interdum</p>
                            <a href="#" class="btn btn-square-white">View all 
              <i class="fas fa-long-arrow-alt-right ml-15"></i>
            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30" >
                    <div class="team-2-each relative bg-black shadow-3">
                        <a href="#"><img src="img/team/team1a.jpg" alt=""></a>
                        <div class="team-hover-div transition-4">
                            <h5 class="white f-700"><a href="#">Jessica David</a></h5>
                            <p class="green mb-0">Co Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30" >
                    <div class="team-2-each relative bg-black shadow-3">
                        <a href="#"><img src="img/team/team2a.jpg" alt=""></a>
                        <div class="team-hover-div transition-4">
                            <h5 class="white f-700"><a href="#">Jhone Doe</a></h5>
                            <p class="green mb-0">Marketing Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="team-2-each relative bg-black shadow-3">
                        <a href="#"><img src="img/team/team3a.jpg" alt=""></a>
                        <div class="team-hover-div transition-4">
                            <h5 class="white f-700"><a href="#">Jhone Doe</a></h5>
                            <p class="green mb-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30" >
                    <div class="team-2-each relative bg-black shadow-3">
                        <a href="#"><img src="img/team/team4a.jpg" alt=""></a>
                        <div class="team-hover-div transition-4">
                            <h5 class="white f-700"><a href="#">Anjelina</a></h5>
                            <p class="green mb-0">Finance Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30" >
                    <div class="team-2-each relative bg-black shadow-3">
                        <a href="#"><img src="img/team/team5a.jpg" alt=""></a>
                        <div class="team-hover-div transition-4">
                            <h5 class="white f-700"><a href="#">Jhone Doe</a></h5>
                            <p class="green mb-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30 text-center" >
                    <div class="career-box relative d-flex img-lined-after  shadow-3  align-items-center justify-content-center h-100" style="background-image: url('img/team/career.jpg');" data-overlay="9">
                        <div class="career-text z-5">
                            <h5 class="f-700 white mb-20">Want to Join Our Team?</h5>
                            <a href="#" class="btn btn-round-blue">CAREER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team area end -->

    <!-- Testimonial area start -->
    <section class="testimonials-2 bg-light-white pt-95 pb-95">
        <div class="container">
            <div class="row align-items-end mb-45">
                <div class="col-lg-7 col-md-12 text-center text-lg-left">
                    <div class="fancy-head left-al">
                        <h5 class="line-head mb-15">
                  <span class="line before d-lg-none"></span>
                    Testimonials
                  <span class="line after"></span>
                </h5>
                        <h1>We Love Our Clients</h1>
                    </div>
                </div>
                <div class="col-lg-5 text-center text-lg-right">
                    <div class="arrow-navigation mb-15 mt-md-20">
                        <a href="#" class="nav-slide slide-left testi-2">
                            <img src="img/icons/ar_lt.png" alt="">
                        </a>
                        <a href="#" class="nav-slide slide-right testi-2">
                            <img src="img/icons/ar_rt.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="hr-2 bg-blue opacity-1 mt-45"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme testimonial-2-slide">
                        <div class="item">
                            <div class="each-quote-2 pr-40 pr-sm-00">
                                <ul class="stars-rate mb-5" data-starsactive="5">
                                    <li class="text-md-left text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h4 class="italic f-700 mb-20">Best Service Ever</h4>
                                <p class="mb-35">Quisque enim ipsum, commodo et ven enatis rutrum, luctus in enim. Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor, pulvinar id ligula non, congue aliquam ve.</p>
                                <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                    <div class="img-div mr-30 pb-10">
                                        <div class="client-image">
                                            <img src="img/testimonial/client1.jpg" class=" rounded-circle" alt="">
                                        </div>
                                    </div>
                                    <div class="client-text-2 mb-10">
                                        <h6 class="client-name green fs-17 f-700">John Doe</h6>
                                        <p class="mb-0 fs-13 f-500">CEO, Abc Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="each-quote-2 pr-40 pr-sm-00 ">
                                <ul class="stars-rate mb-5" data-starsactive="5">
                                    <li class="text-md-left text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h4 class="italic f-700 mb-20">100% Recommended</h4>
                                <p class="mb-35">Etiam mattis posuere sem, a bibendum nulla congue nec. Donec eget metus nisi. Suspendisse potenti. Pellentesque sed sem sodales, malesuada sapien ut, rutrum sem.</p>
                                <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                    <div class="img-div mr-30 pb-10">
                                        <div class="client-image">
                                            <img src="img/testimonial/client2.jpg" class=" rounded-circle" alt="">
                                        </div>
                                    </div>
                                    <div class="client-text-2 mb-10">
                                        <h6 class="client-name green fs-17 f-700">Jessica David</h6>
                                        <p class="mb-0 fs-13 f-500">CEO, Abc Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="each-quote-2 pr-40 pr-sm-00 ">
                                <ul class="stars-rate mb-5" data-starsactive="5">
                                    <li class="text-md-left text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h4 class="italic f-700 mb-20">Bizz is the Best</h4>
                                <p class="mb-35">Maecenas dignissim in dolor in blandit. Curabitur congue finibus convallis. In at eros vel lorem tempor malesuada quis efficitur erat. Nullam nec purus tempus, posuere elit non
                                </p>
                                <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                    <div class="img-div mr-30 pb-10">
                                        <div class="client-image">
                                            <img src="img/testimonial/client3.jpg" class=" rounded-circle" alt="">
                                        </div>
                                    </div>
                                    <div class="client-text-2 mb-10">
                                        <h6 class="client-name green fs-17 f-700">Sara Mary</h6>
                                        <p class="mb-0 fs-13 f-500">CEO, Abc Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="each-quote-2 pr-40 pr-sm-00 ">
                                <ul class="stars-rate mb-5" data-starsactive="5">
                                    <li class="text-md-left text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h4 class="italic f-700 mb-20">Best Service Ever</h4>
                                <p class="mb-35">Quisque enim ipsum, commodo et ven enatis rutrum, luctus in enim. Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor, pulvinar id ligula non, congue aliquam ve.</p>
                                <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                    <div class="img-div mr-30 pb-10">
                                        <div class="client-image">
                                            <img src="img/testimonial/client1.jpg" class=" rounded-circle" alt="">
                                        </div>
                                    </div>
                                    <div class="client-text-2 mb-10">
                                        <h6 class="client-name green fs-17 f-700">John Doe</h6>
                                        <p class="mb-0 fs-13 f-500">CEO, Abc Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="each-quote-2 pr-40 pr-sm-00">
                                <ul class="stars-rate mb-5" data-starsactive="5">
                                    <li class="text-md-left text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h4 class="italic f-700 mb-20">100% Recommended</h4>
                                <p class="mb-35">Etiam mattis posuere sem, a bibendum nulla congue nec. Donec eget metus nisi. Suspendisse potenti. Pellentesque sed sem sodales, malesuada sapien ut, rutrum sem.</p>
                                <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                    <div class="img-div mr-30 pb-10">
                                        <div class="client-image">
                                            <img src="img/testimonial/client2.jpg" class=" rounded-circle" alt="">
                                        </div>
                                    </div>
                                    <div class="client-text-2 mb-10">
                                        <h6 class="client-name green fs-17 f-700">Jessica David</h6>
                                        <p class="mb-0 fs-13 f-500">CEO, Abc Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end -->

    <!-- Client logos area start -->
    <section class="client-list pt-100 pb-70">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-xl-5 text-center text-lg-left">
                    <div class="clients-left-part">
                        <div class="fancy-head left-al">
                            <h5 class="line-head mb-15">
                  <span class="line before d-lg-none"></span>
                    Our Clients
                  <span class="line after"></span>
                </h5>
                            <h1 class="mb-15">Trusted by World’s Biggest Brands</h1>
                        </div>
                        <p class="mb-35 pr-45 pr-md-00">Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim. Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor.</p>
                        <a href="#" class="btn btn-square">View all<i class="fas fa-long-arrow-alt-right ml-20"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-60 offset-xl-1 offset-lg-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="each-logo bg-light-white flex-center transition-4 mb-30">
                                <img src="img/clients/1_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo bg-light-white flex-center transition-4 mb-30">
                                <img src="img/clients/2_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6" >
                            <div class="each-logo bg-light-white flex-center transition-4 mb-30">
                                <img src="img/clients/3_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo bg-light-white flex-center transition-4 mb-30">
                                <img src="img/clients/4_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo bg-light-white flex-center transition-4 mb-30">
                                <img src="img/clients/5_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo bg-light-white flex-center transition-4 mb-30">
                                <img src="img/clients/6_blk.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client logos area end -->

@endsection