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
                            <h2>News</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">News</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->


    <!--Blog One Start-->
    <section class="blog-one blog-one--blog">
        <div class="container">
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
                                        <li><a href="#"><span class="icon-user"></span>Admin </a></li>
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

            {{$news->appends(request()->input())->links() }}


        </div>
    </section>
    <!--Blog One End-->
@endsection

{{--@push('custom_scripts)--}}
{{--@endpush--}}
