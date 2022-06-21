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
                                <li class="active">Career Details</li>
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
            <h4 class="mb-5">{{$career->title}}</h4>
            <h5 style="margin-bottom: 10px;"><strong>DeadLine:</strong> {{date('d-m-Y', strtotime($career->deadLine))}}</h5>
{{--            <h5 class="mb-2">Job Description</h5>--}}
            {!! $career->description  !!}
        </div>
    </section>
    <!--End Contact Details One-->

@endsection

{{--@push('custom_scripts)--}}
{{--@endpush--}}
