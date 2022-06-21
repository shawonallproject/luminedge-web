@extends('web.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <section class="main-slider main-slider-two">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>

            <div class="swiper-wrapper">
                <!--Start Single Swiper Slide-->
                @foreach($hotNews as $k=>$v)
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{$v->bannerImage}});"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-two__content text-center">
                                    <h2 class="main-slider-two__tagline">{{$v->title}}</h2>
                                    <h2 class="main-slider__title">{{str_limit(strip_tags($v->description),80,'...')}}</h2>
                                </div>
                                <div class="main-slider-two__button-box text-center">
                                    <a href="{{URL::to('news',$v->id)}}" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{URL::to('public/asset/web/assets/images/backgrounds/main-slider-v2-1.jpg')}});"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-two__content text-center">
                                    <h2 class="main-slider-two__tagline">Study and Career Expo22</h2>
                                    <h2 class="main-slider__title">Kick start your study journey <br>to Abroad</h2>
                                </div>
                                <div class="main-slider-two__button-box text-center" style="visibility:hidden;">
                                    <a href="#" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->
                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{URL::to('public/asset/web/assets/images/backgrounds/main-slider-v2-2.jpg')}});"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-two__content text-center">
                                    <h2 class="main-slider-two__tagline">Apply Online</h2>
                                    <h2 class="main-slider__title">Visa Application is <br>Much Easier</h2>
                                </div>
                                <div class="main-slider-two__button-box text-center" style="visibility:hidden;">
                                    <a href="#" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->
                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{URL::to('public/asset/web/assets/images/backgrounds/main-slider-v2-3.jpg')}});"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-two__content text-center">
                                    <h2 class="main-slider-two__tagline">Study Abroad</h2>
                                    <h2 class="main-slider__title">Get selected <br>Among the finest</h2>
                                </div>
                                <div class="main-slider-two__button-box text-center" style="visibility:hidden;">
                                    <a href="#" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->


            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>
        </div>
    </section>




    <!--Features One Start-->
    <section class="features-one">
        <div class="container">
            <h2 class="section-title__title text-center mb-5">Services</h2>
            <div class="row">
                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
                            <img src="{{URL::to('public/asset/web/assets/images/svg/popular.svg')}}" alt="">
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="{{URL::to('service')}}">Education</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
                            <img src="{{URL::to('public/asset/web/assets/images/svg/talk.svg')}}" alt="">
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="{{URL::to('service')}}">Immigration</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
                            <img src="{{URL::to('public/asset/web/assets/images/svg/office.svg')}}" alt="">
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="{{URL::to('service')}}">Language</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
                            <img src="{{URL::to('public/asset/web/assets/images/svg/pulse.svg')}}" alt="">
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="{{URL::to('service')}}">Overseas Student Health Cover (OSHC)</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->
                
            </div>
        </div>
    </section>
    <!--Features One End-->



    <!--About One Start-->
    <section class="about-one clearfix">
        <div class="container">
            <div class="row">
                <!-- Start About One Left-->
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <ul class="about-one__left-img-box list-unstyled clearfix">
                            <li class="about-one__left-single">
                                <div class="about-one__left-img1">
                                    <img src="{{URL::to('public/asset/web/assets/images/about/about-v1-img1.jpg')}}" alt="" />
                                </div>
                            </li>
                            <li class="about-one__left-single">
                                <div class="about-one__left-img2">
                                    <img src="{{URL::to('public/asset/web/assets/images/about/about-v1-img2.jpg')}}" alt="" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End About One Left-->


                <!-- Start About One Right-->
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title">
                            <span class="section-title__tagline">About Luminedge</span>
                            <h2 class="section-title__title">Our Story</h2>
                        </div>
                        <div class="about-one__right-inner">
                            <p class="about-one__right-text">
                                {{str_limit(strip_tags($about->company),500,'...')}}
                            </p>

                            <button class="registration-one__right-form-btn mt-3">
                                <a href="{{URL::to('about')}}" class="thm-btn">Read full story</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End About One Right-->
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Courses One Start-->

    <section class="courses-one mission-container">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Study to migrate</h2>
            </div>
            <div class=" flex-box-flag text-center">
                <img src="{{URL::to('public/asset/web/assets/images/map.png')}}" class="img-fluid" alt="">
            </div>
            <div class="flex-language">
                <p>With language support</p>
                <p class="languages">
                    <span>IELTS</span>
                    <span>PTE</span>
                    <span>NAATI</span>
                </p>
            </div>
        </div>
    </section>


    <!--Courses One End-->
    <!--Courses One Start-->
    <!-- <section class="courses-one">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Explore Courses</h2>
            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{URL::to('public/asset/web/assets/images/resources/courses-v1-img1.jpg')}}" alt="" />

                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Mathemetics</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="100ms"
                         data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{URL::to('public/asset/web/assets/images/resources/courses-v1-img2.jpg')}}" alt="" />

                        </div>
                        <div class="courses-one__single-content">

                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Social Science</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="courses-one__single wow fadeInRight" data-wow-delay="0ms"
                         data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{URL::to('public/asset/web/assets/images/resources/courses-v1-img3.jpg')}}" alt="" />

                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Biology</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="courses-one__single wow fadeInRight" data-wow-delay="100ms"
                         data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{URL::to('public/asset/web/assets/images/resources/courses-v1-img4.jpg')}}" alt="" />
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Chemistry</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{URL::to('public/asset/web/assets/images/resources/courses-v1-img5.jpg')}}" alt="" />
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Programming</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="100ms"
                         data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{URL::to('public/asset/web/assets/images/resources/courses-v1-img6.jpg')}}" alt="" />

                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Electrical Engineering</a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--Courses One End-->



    <!--Registration One Start-->
    <section class="registration-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%">
        <div class="registration-one__bg"
             style="background-image: url({{URL::to('public/asset/web/assets/images/resources/registration-one-bg.jpg')}})"></div>
        <div class="container">
            <div class="row">
                <!--Start Registration One Left-->
                <div class="col-xl-7 col-lg-7">
                    <div class="registration-one__left">
                        <div class="section-title">
                            <h2 class="section-title__title">Student support we provide</h2>
                        </div>
                        <ul class="student-facilities">
                            <li>
                                <span>&check;</span>Pre departure Counselling
                            </li>
                            <li>
                                <span>&check;</span>Arrival pick up and support (on shore)
                            </li>
                            <li>
                                <span>&check;</span>OSHC
                            </li>
                            <li>
                                <span>&check;</span> Homestay
                            </li>
                            <li>
                                <span>&check;</span>Free sim card
                            </li>
                            <li>
                                <span>&check;</span>Assist to find rental accommodation
                            </li>
                            <li>
                                <span>&check;</span> Career Counselling
                            </li>
                            <li>
                                <span>&check;</span> Support hotline
                            </li>
                            <li>
                                <span>&check;</span> Popular course list
                            </li>
                            <li>
                                <span>&check;</span> RPL
                            </li>
                            <li>
                                <span>&check;</span> Skill Assessment
                            </li>
                            <li>
                                <span>&check;</span> Discounted Partner services
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Registration One Left-->

                <!--Start Registration One Right-->
                <div class="col-xl-5 col-lg-5">
                    <div class="registration-one__right wow slideInRight" data-wow-delay="100ms"
                         data-wow-duration="2500ms">
                        <div class="registration-one__right-form">
                            <div class="title-box">
                                <h4>About You</h4>
                            </div>
                            <div class="form-box">
                                <form id="SubmitForm">
                                    <div class="form-group">
                                        <input type="text" name="name" id="first_name" placeholder="Full name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="dob" id="dob" placeholder="DOB" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Email Address" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" placeholder="Phone" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="area_of_interest" id="area_of_interest" placeholder="Area of Interest" required="required">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <select name="area_of_interest" id="area_of_interest" placeholder="area_of_interest">--}}
{{--                                            <Option>Area of Interest to study</Option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <input type="text" name="hobby" id="hobby" placeholder="Hobby" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="weather_you_like" id="weather_you_like" placeholder="Weather you like" required="required">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <select name="" id="">--}}
{{--                                            <Option>Weather you like</Option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                    <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                                        Thank you for getting in touch! We will contact you soon
                                    </div>
                                    <button class="registration-one__right-form-btn" type="submit"
                                            name="submit-form">
                                        <span class="thm-btn">Amazing</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Registration One Right-->
            </div>
        </div>
    </section>
    <!--Registration One End-->


    <!--Categories One Start-->
    <!-- <section class="categories-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Students share their stories</span>
                <h2 class="section-title__title">Student Recommendation</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="categories-one__wrapper">
                        <div class="row">

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms"
                                 data-wow-duration="1500ms">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{URL::to('public/asset/web/assets/images/resources/categories-v1-img1.jpg')}}" alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p>Graduate</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>Barbara Syndey</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                                 data-wow-duration="1500ms">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{URL::to('public/asset/web/assets/images/resources/categories-v1-img2.jpg')}}" alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p>Appeared Student</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>John H. McKay</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                                 data-wow-duration="1500ms">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{URL::to('public/asset/web/assets/images/resources/categories-v1-img3.jpg')}}" alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p>Undergrad</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>Julian Lelkavo</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                                 data-wow-duration="1500ms">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{URL::to('public/asset/web/assets/images/resources/categories-v1-img4.jpg')}}" alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p>Graduate</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>Parna Gelleliya</h4>
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
    </section> -->
    <!--Categories One End-->



    <!--Testimonials One Start-->
    <!-- <section class="testimonials-one clearfix">
        <div class="auto-container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Testimonials</span>
                <h2 class="section-title__title">What They Say?</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonials-one__wrapper">
                        <div class="testimonials-one__pattern"><img
                                src="{{URL::to('public/asset/web/assets/images/pattern/testimonials-one-left-pattern.png')}}" alt="" /></div>
                        <div class="shape1"><img src="{{URL::to('public/asset/web/assets/images/shapes/thm-shape3.png')}}" alt="" /></div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">

                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                         data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner">
                                            <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <img src="assets/images/testimonial/testimonials-v1-client-info-img1.png"
                                                         alt="" />
                                                </div>
                                                <div class="testimonials-one__single-client-info-text">
                                                    <h5>Kevin Martin</h5>
                                                    <p>Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                         data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner">
                                            <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <img src="{{URL::to('public/asset/web/assets/images/testimonial/testimonials-v1-client-info-img2.png')}}"
                                                         alt="" />
                                                </div>
                                                <div class="testimonials-one__single-client-info-text">
                                                    <h5>Christine Eve</h5>
                                                    <p>Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                         data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner">
                                            <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <img src="{{URL::to('public/asset/web/assets/images/testimonial/testimonials-v1-client-info-img3.png')}}"
                                                         alt="" />
                                                </div>
                                                <div class="testimonials-one__single-client-info-text">
                                                    <h5>David Cooper</h5>
                                                    <p>Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                         data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner">
                                            <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <img src="{{URL::to('public/asset/web/assets/images/testimonial/testimonials-v1-client-info-img1.png')}}"
                                                         alt="" />
                                                </div>
                                                <div class="testimonials-one__single-client-info-text">
                                                    <h5>Kevin Martin</h5>
                                                    <p>Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                         data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner">
                                            <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <img src="{{URL::to('public/asset/web/assets/images/testimonial/testimonials-v1-client-info-img2.png')}}"
                                                         alt="" />
                                                </div>
                                                <div class="testimonials-one__single-client-info-text">
                                                    <h5>Christine Eve</h5>
                                                    <p>Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                         data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner">
                                            <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <img src="assets/images/testimonial/testimonials-v1-client-info-img3.png"
                                                         alt="" />
                                                </div>
                                                <div class="testimonials-one__single-client-info-text">
                                                    <h5>David Cooper</h5>
                                                    <p>Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                         data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner">
                                            <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <img src="{{URL::to('public/asset/web/assets/images/testimonial/testimonials-v1-client-info-img1.png')}}"
                                                         alt="" />
                                                </div>
                                                <div class="testimonials-one__single-client-info-text">
                                                    <h5>Kevin Martin</h5>
                                                    <p>Developer</p>
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
    </section> -->
    <!--Testimonials One End-->


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
                <!--Start Single Blog One-->
                @foreach($news as $k=>$v)
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{$v->image}}" alt="" />
                            </div>
                            <div class="blog-one__single-content">
                                <div class="blog-one__single-content-overlay-mata-info">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span class="icon-clock"></span>{{date('d-m-Y', strtotime($v->created_at))}}</a></li>
                                        <li><a href="#"><span class="icon-user"></span>{{$v->author}}</a></li>
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

                <!--End Single Blog One-->
            </div>
        </div>
    </section>
    <!--Blog One End-->



    <input type="hidden" id="base_url" value="{{url('/')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
    <!--End Newsletter One-->
@endsection

@push('custom_scripts')
    <script>
        var BASE_URL = $("#base_url").val();
        var CSRF_TOKEN = $("#_token").val();
        $('#SubmitForm').on('submit',function(e){
            e.preventDefault();

            var name = $('#name').val();
            var dob = $('#dob').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var area_of_interest = $('#area_of_interest').val();
            var hobby = $('#hobby').val();
            var weather_you_like = $('#weather_you_like').val();

            $.ajax({
                url: BASE_URL+"/client-information",
                type:"POST",
                data:{
                    "_token": CSRF_TOKEN,
                    name:name,
                    email:email,
                    dob:dob,
                    phone:phone,
                    area_of_interest:area_of_interest,
                    hobby:hobby,
                    weather_you_like:weather_you_like,
                },
                success:function(response){
                    $('#successMsg').show()
                    setTimeout(function() {
                        $('#successMsg').fadeOut('slow');
                        // $('.flash-message').fadeOut('slow');
                    }, 3000);

                    $('#SubmitForm').trigger("reset");
                    console.log(response);
                },
                // error: function(response) {
                //     $('#nameErrorMsg').text(response.responseJSON.errors.name);
                //     $('#emailErrorMsg').text(response.responseJSON.errors.email);
                //     $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                //     $('#messageErrorMsg').text(response.responseJSON.errors.message);
                // },
            });
        });
    </script>
@endpush