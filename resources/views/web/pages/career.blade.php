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
                            <h2>Career</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Career</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Start Contact Details One-->
    <section class="contact-details-one">
        <div class="container">
            <h2 class="mb-5">Job Openings</h2>
            <div class="row">
                <!--Start Single Contact Details One-->
                @foreach($career as $v)
                <div class="col-xl-4 col-lg-4 mb-3">
                    <div class="contact-details-one__single" style="height: 100%">
                        <div class="contact-details-one__single-text">
                            <h4><a href="{{URL::to('career',$v->id)}}">{{$v->title}}</a></h4>
                            <p>{{str_replace("_"," ",$v->jobType)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--End Single Contact Details One-->
            </div>
        </div>
    </section>
    <!--End Contact Details One-->

@endsection

{{--@push('custom_scripts)--}}
{{--@endpush--}}
