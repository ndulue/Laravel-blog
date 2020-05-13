@extends('layouts.app')


@section('sections')
    <!-- immer banner start -->
    <section class="inner-banner pt-80 pb-95" style="background-image: url('./img/banner/inner-banner.jpg');" data-overlay="7">
        <div class="container">
            <div class="row z-5 align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="f-700 green">Welcome To Bizz Blog</h1>
                    <span class="green-line bg-green d-none d-md-inline-block"></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <nav aria-label="breadcrumb" class="banner-breadcump">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home fs-12 mr-5"></i>Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- blog details area start -->
    <section class="service-details pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <!-- left part -->
                    <div class="blog-list">
                        @foreach ($posts as $post)
                        <div class="each-blog-standared">
                            <h2 class="f-700 mb-20 lh-12">{{$post->title}}</h2>
                            <div class="blog-img-detail mb-25">
                                <img src="{{$post->image}}" alt="">
                                <div class="blog-date text-center">
                                    <h2 class="day green mb-10 f-700">{{substr($post->created, 8, 10)}}</h2>
                                    <p class="month mb-0">MAY</p>
                                </div>
                            </div>
                            <div class="blog-list-content">
                                <div class="blog-by-info mb-10">
                                    <ul class="list-inline fs-12">
                                        <li class="list-inline-item pr-15">
                                            <i class="far fa-calendar mr-10 fs-14 green"></i> {{$post->created}}</li>
                                        <li class="list-inline-item pr-15">
                                            <i class="far fa-user mr-10 fs-14 green"></i> {{$post->author}}</li>
                                        <li class="list-inline-item pr-15">
                                            <i class="far fa-comments mr-10 fs-14 green"></i> {{$post->comment == '' ? '0' : $post->comment}} Comments</li>
                                    </ul>
                                </div>
                                <p class="mb-20">{{substr($post->post, 0, 150)}}...</p>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                    <a href="{{route('detail.get', ['id'=> $post->post_id])}}" class="btn btn-square">LEARN MORE<i class="fas fa-long-arrow-alt-right ml-20"></i></a>
                                    </div>
                                    <div class="col-md-6 text-left text-md-right">
                                        <ul class="social-icons black mt-sm-25">
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
                        </div>
                        @endforeach
                        

                        <div class="left-align mb-md-50">
                            
                            {{$posts->links()}}
                            
                        </div>

                    </div>
                </div>
                <!-- right-part -->
                <div class="col-xl-4 col-lg-5">

                    <div class="right-box bg-light-white mb-30">
                        <div class="right-box-head">
                            <h4>Categories</h4>
                        </div>
                        <div class="right-box-content">
                            <div class="categories mb-5">
                                <ul>
                                    <li>
                                        <a href="{{route('category.get', ['category' => 'Business'])}}">Business<span class="count-number">{{$business}}</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('category.get', ['category' => 'Market'])}}">Market<span class="count-number">{{$market}}</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('category.get', ['category' => 'Financial'])}}">Financial<span class="count-number">{{$finance}}</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('category.get', ['category' => 'Events'])}}">Events<span class="count-number">{{$event}}</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('category.get', ['category'=> 'Growth'])}}">Growth info<span class="count-number">{{$growth}}</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('category.get', ['category'=> 'Technology'])}}">Technology<span class="count-number">{{$tech}}</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="right-box bg-light-white mb-30">
                        <div class="right-box-head">
                            <h4>Popular Posts</h4>
                        </div>
                        <div class="right-box-content mt-10 mb-10">
                            @foreach ($popular as $pop)
                                <a href="{{route('detail.get', ['id'=> $pop->post_id])}}" class="popular-post d-flex align-items-center">
                                    <div class="popular-post-img mr-20">
                                        <img src="{{$pop->image}}" alt="">
                                        <div class="full-cover bg-green-op-8 transition-4">
                                            <i class="fas fa-external-link-alt transform-center"></i>
                                        </div>
                                    </div>
                                    <div class="popular-post-text">
                                        <p class="mb-5">{{substr($post->post, 0, 30)}}...</p>
                                        <span>{{$pop->created}}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="right-box bg-light-white mb-30">
                        <div class="right-box-head">
                            <h4>Follow Us</h4>
                        </div>
                        <div class="right-box-content">
                            <div class="social-profile mt-10 mb-10">
                                <a href="#" class="social-profile-box">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-profile-box">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-profile-box">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#" class="social-profile-box">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#" class="social-profile-box">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="right-box ad-banner bg-light-white mb-30">
                        <a href="#" class="d-block ">
                            <img src="img/service/ad-banner.jpg" class="w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog details area end -->

@endsection

