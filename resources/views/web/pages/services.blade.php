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
                            <h2>Visa And Immigration</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Start Immigration Services One-->
    <section class="features-one service-block">
        <div class="container">
            <h3 class="section-title__title text-center mb-5">Immigration Services</h3>
            <p style="text-align: center;">All immigration matters are assessed by our industry experienced Lawyers.</p>
            <p style="text-align: center;">Thinking of Canada to study, Work or Migrate? Please send your resume to info@luminedge.com.au for a constructive assessment from our Canadian lawyer.</p>
            <div class="row">
                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/popular.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Corporate</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/talk.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Advisory</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/office.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Individuals</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->
            </div>
        </div>
    </section>
    <!--End Contact Details One-->

    <section class="features-one service-block">
        <div class="container">
            <h3 class="section-title__title text-center mb-5">Visa Cancellation</h3>
            <div class="row">
                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/popular.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Section 501 Visa Cancellation</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/talk.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Section 116 Visa Cancellation</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/office.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Immigration Detention</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->
            </div>
        </div>
    </section>

    <section class="features-one service-block">
        <div class="container">
            <h3 class="section-title__title text-center mb-5">Visa Appeal</h3>
            <div class="row">
                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/popular.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Administrative Appeal Tribunal (AAT)</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/talk.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Immigration Assessment Authority (IAA)</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/office.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Court Appeals</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/office.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Ministerial Intervention</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->
            </div>
        </div>
    </section>

    <section class="features-one service-block">
        <div class="container">
            <h3 class="section-title__title text-center mb-5">Corporate Immigration</h3>
            <div class="row">
                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/popular.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Sponsored Visa Application Service</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/talk.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Employer Sponsored Visa</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/office.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Sponsorship Obligations</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/popular.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Human Resources & Recruitment Support</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/talk.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Auditing & Compliance</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->

                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-icon">
{{--                            <img src="{{URL::to('public/asset/web/assets/images/svg/office.svg')}}" alt="">--}}
                        </div>
                        <div class="features-one__single-text">
                            <h4><a href="#">Appealing an Sponsorsed Visa Decision</a></h4>
                        </div>
                    </div>
                </div>
                <!--End Single Features One-->
            </div>
        </div>
    </section>



    <section class="features-one service-list">
        <div class="container">
            <h3 class="section-title__title text-left mb-5">Personal Immigration / Individuals</h3>
            <div class="row">
                <!--Start Single Features One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <ul>
                        <li>Personal Visa Application Services</li>
                        <li>Skilled Visa</li>
                        <li>Partnered Visa</li>
                        <li>Family Visa</li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <ul>
                        <li>Tourist Visa</li>
                        <li>Temporaty Activity Visa</li>
                        <li>Business Visa</li>
                        <li>Refugee, Humanitarian and Protecton Visa</li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <ul>
                        <li>Bridging</li>
                        <li>Student Visa</li>
                        <li>Appealing and Personal Visa</li>
                        <li>Applying for Australian Citizenship</li>
                    </ul>
                </div>
                <!--End Single Features One-->
            </div>
        </div>
    </section>

@endsection

{{--@push('custom_scripts)--}}
{{--@endpush--}}
