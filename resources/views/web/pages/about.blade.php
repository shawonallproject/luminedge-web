@extends('web.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{URL::to('public/asset/web/assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__title">
                            <h2>About</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">about</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="about-two__single-img">
                        <img src="{{URL::to('public/asset/web/assets/images/about/about-v2-img2.jpg')}}" alt=""/>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-two__single-img">
                        <img src="{{URL::to('public/asset/web/assets/images/about/about-v2-img1.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>

            <div class="about-two__bottom-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-two__title-box">
                            <div class="section-title">
                                <span class="section-title__tagline">About Company</span>
                                <h2 class="section-title__title">The Best Global <br>Experts</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="about-two__text-box">
                            {!! $about->company !!}
{{--                            <p class="about-one__right-text">Luminedge Pty Ltd was created to provide uniquely re-designed premium services in the world of education and--}}
{{--                                migration. After 2019 our world has changed and we need one stop services more than ever before in the field of--}}
{{--                                education and migration. Our HYBRID SERVICE MODEL truly nurtures our clients' needs and find the best and--}}
{{--                                risk free solution through expert assessment. We listen to you as it is our own story and act on it to create a--}}
{{--                                sustainable and lasting impression for our valued clients. </p>--}}
{{--                            <p>--}}
{{--                                We proudly put you first. We listen carefully , assess thoroughly and get a second opinion to get peace of mind for the decision--}}
{{--                                you make.--}}

{{--                            </p>--}}
{{--                            <p>--}}
{{--                                We do things from our heart for our clients , we are available in person, over the phone and virtually. Our cutting edge service--}}
{{--                                team is happily ready to provide one stop solution to all our clients.--}}

{{--                            </p>--}}
{{--                            <p>--}}
{{--                                Ethical business practice is in our DNA and client satisfaction is our definition of success--}}
{{--                            </p>--}}
                        </div>

                        <div class="">
                            <h3>Mission</h3>
                            {!! $about->mission !!}
{{--                            <p>We will take zero risk with your education planning and find least risky pathway to visa and immigration.</p>--}}
                        </div>
                        <div class="">
                            <h3>Vision</h3>
                            {!! $about->vision !!}
{{--                            <p>We want to be world leader in placing the right talent in the right industry and create a home world for the ones truly willing.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->


    <!--Company Logos One Start-->
    <section class="company-logos-one">
        <div class="container">
            <div class="company-logos-one__title text-center">
                <h6>Study at leading universities & colleges</h6>
            </div>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
            <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <strong>Monash <span>University</span></strong>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <strong>The University of <span>Adelaide</span></strong>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <strong>The University of <span>Melbourne</span></strong>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <strong>The University of <span>Western Australia</span></strong>
                    </div>
                    <div class="swiper-slide">
                        <strong>Monash <span>University</span></strong>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <strong>The University of <span>Adelaide</span></strong>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <strong>The University of <span>Melbourne</span></strong>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <strong>The University of <span>Western Australia</span></strong>
                    </div>
                    <!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Company Logos One End-->

    <section class="company-logos-one">
        <div class="container">
            <div class="company-logos-one__title text-center">
                <h6>We are partnered with</h6>
            </div>
            <div class="partners">
                <a href="#">
                    <img src="{{URL::to('public/asset/web/assets/images/svg/idp-logo.svg')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{URL::to('public/asset/web/assets/images/svg/global.svg')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{URL::to('public/asset/web/assets/images/svg/logo-kanpore.svg')}}" alt="">
                </a>
            </div>
        </div>
    </section>




    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Daily Blogs</span>
                <h2 class="section-title__title">News and topics Discussed</h2>
            </div>
            <div class="row">
                @foreach($news as $v)
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{$v->image}}" alt="" />
                            </div>
                            <div class="blog-one__single-content">
                                <div class="blog-one__single-content-overlay-mata-info">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span class="icon-clock"></span>{{date('d-m-Y', strtotime($v->created_at))}}</a></li>
                                        <li><a href="#"><span class="icon-user"></span>{{$v->author}} </a></li>
{{--                                        <li><a href="#"><span class="icon-chat"></span> Comments</a></li>--}}
                                    </ul>
                                </div>
                                <h2 class="blog-one__single-content-title"><a href="{{URL::to('news',$v->id)}}">{{$v->title}}</a></h2>
                                <p class="blog-one__single-content-text">
                                    {{str_limit(strip_tags($v->description),100,'...')}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Blog One End-->
@endsection

{{--@push('custom_scripts)--}}
{{--@endpush--}}
