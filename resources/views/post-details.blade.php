@extends('layouts.app')

@section('sections')
    <section class="inner-banner pt-80 pb-95" style="background-image: {{asset('img/banner/inner-banner.jpg')}};" data-overlay="7">
        <div class="container">
            <div class="row z-5 align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="f-700 green">{{ $details->title > 15 ? substr($details->title, 0, 15).'...' : $details->title }}</h1>
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
                <div class=" col-lg-10 offset-lg-1">
                    <!-- left part -->
                    <div class="left-blog-detail">
                        <div class="blog-by-info">
                            <ul class="list-inline fs-12">
                                <li class="list-inline-item pr-15">
                                    <i class="far fa-calendar mr-10 fs-14 green"></i>{{ $details->created }}</li>
                                <li class="list-inline-item pr-15">
                                    <i class="far fa-user mr-10 fs-14 green"></i> {{ $details->author }}</li>
                                <li class="list-inline-item pr-15">
                                    <i class="far fa-comments mr-10 fs-14 green"></i> {{$details->comment == '' ? '0' : $details->comment}} Comments</li>
                            </ul>
                        </div>
                        <h1 class="f-700 lh-13 mt-5 mb-10">{{ $details->title }}</h1>
                        
                        <div class="blog-img-detail mb-15">
                            <img src="{{ asset($details->image) }}" class="img-100" alt="">
                            <div class="blog-date text-center">
                                <h2 class="day green mb-10 f-700">{{substr($details->created, 8, 10)}}</h2>
                                <p class="month mb-0">MAY</p>
                            </div>
                        </div>

                        <div> {{ $details->post }} </div>
                        
                        <div class="hr-1 bg-light-white mb-25 mt-20"></div>
                        <!-- blog by -->
                        <div class="d-flex flex-column flex-sm-row align-items-center">
                            <div class="team-round">
                                <img src="{{ asset('img/team/team-round.png') }}" alt="">
                            </div>
                            <div class="team-round-detail">
                                <h5 class="fs-19 f-700 mb-5">{{ $details->author }}</h5>
                                <p class="mb-15">Nunc quis lorem quis sapien tristique blandit. Etiam ac interdum sem. Pellentesque volutpat id neque et viverra. Nulla lacinia metus quam, id vehicula nisl commodo sed. </p>
                                <ul class="social-icons black">
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
                        <!-- next-prev button -->
                        
                        <!-- comments -->
                        <div class="comments">
                            <h4 class="f-700 mt-45 mb-20">Comments (<span>{{ $count }}</span>)</h4>
                            <ul class="connent-lists">

                                @if ($count > 0)
                                    @foreach ($comments as $comment)
                                        <li>
                                            <div class="d-flex flex-column flex-sm-row">
                                                <div class="comment-text">
                                                    <div class="top-head">
                                                        <h6 class="f-700">{{ $comment->created }}</h6>
                                                    </div>
                                                    <p class="mt-5">{{ $comment->message }}</p>
                                                    <div class="name-replay">
                                                        <ul class="list-inline fs-12">
                                                            <li class="list-inline-item pr-15">
                                                                <i class="far fa-user mr-10 fs-14 green"></i>{{ $comment->name }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <hr>
                                @endif
                                
                            </ul>
                        </div>
                        
                        <div class="form-messege">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="post-comment mb-md-60">
                            <h4 class="f-700 mt-40 mb-20">Leave Your Comment </h4>
                            <form method="POST" action="{{route('detail.post', ['id' => $details->post_id])}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group relative mb-30">
                                            <input type="text" class="form-control input-white green-border" name="name" placeholder="Enter your name" required>
                                            <i class="far fa-user transform-v-center"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group relative mb-30">
                                            <input type="email" class="form-control input-white green-border" name="email_address"  placeholder="Enter your email"  required>
                                            <i class="far fa-envelope transform-v-center"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control input-white green-border mb-30" name="message" cols="30" rows="7" placeholder="Your message"  required></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" class="btn">SUBMIT<i class="fas fa-long-arrow-alt-right ml-20"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- right-part -->

            </div>
        </div>
    </section>
    <!-- Blog details area end -->

@endsection
