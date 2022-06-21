@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
<div class="page-header">
    <h2 class="header-title">Career</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{URL::to('admin/news/list')}}">News</a>
            <span class="breadcrumb-item active">Details</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="container">
            <h2 class="font-weight-normal m-b-10">{{$news->title}}</h2>
            <div class="d-flex m-b-30">
                <div class="avatar avatar-cyan avatar-img">
                    <img src="assets/images/avatars/thumb-6.jpg" alt="">
                </div>
                <div class="m-l-15">
                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">{{$news->author}}</a>
                    <p class="m-b-0 text-muted font-size-13">{{$news->created_at}}</p>
                </div>
            </div>
            @if($news->image)
                <img class="img-fluid center" src="{{$news->image}}" alt="">
            @else
                <img class="img-fluid center" src="{{URL::to('public/asset/admin/assets/images/others/img-2.jpg')}}" alt="">
            @endif
            
            <div class="m-t-30">
                {!!$news->description!!}
            </div>
            <!-- <div class="d-flex m-t-40 align-items-center">
                <span class="m-r-15">Share this post: </span>
                <ul class="list-inline m-b-0">
                    <li class="list-inline-item">
                        <button class="font-size-16 btn btn-hover btn-icon btn-rounded">
                            <i class="anticon anticon-facebook"></i>
                        </button>
                    </li>
                    <li class="list-inline-item">
                        <button class="font-size-16 btn btn-hover btn-icon btn-rounded">
                            <i class="anticon anticon-twitter"></i>
                        </button>
                    </li>
                    <li class="list-inline-item">
                        <button class="font-size-16 btn btn-hover btn-icon btn-rounded">
                            <i class="anticon anticon-instagram"></i>
                        </button>
                    </li>
                </ul>
            </div> -->
            <!-- <hr>
            <h5>Comments (28)</h5>
            <div class="m-t-20">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-h-0">
                        <div class="media m-b-15">
                            <div class="avatar avatar-image">
                                <img src="assets/images/avatars/thumb-8.jpg" alt="">
                            </div>
                            <div class="media-body m-l-20">
                                <h6 class="m-b-0">
                                    <a href="" class="text-dark">Lillian Stone</a>
                                </h6>
                                <span class="font-size-13 text-gray">28th Jul 2018</span>
                            </div>
                        </div>
                        <span>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and
                            illustrious history. It was born from humble roots, only to rise to well-seasoned
                            greatness.</span>
                        <div class="m-t-15">
                            <ul class="list-inline text-right">
                                <li class="d-inline-block m-r-20">
                                    <a class="text-dark" href="javascript:void(0)">
                                        <i class="anticon m-r-5 anticon-like"></i>
                                        <span>43</span>
                                    </a>
                                </li>
                                <li class="d-inline-block m-r-30">
                                    <a class="text-dark" href="javascript:void(0)">
                                        <i class="anticon m-r-5 anticon-message"></i>
                                        <span>Reply</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-group-item p-h-0">
                        <div class="media m-b-15">
                            <div class="avatar avatar-image">
                                <img src="assets/images/avatars/thumb-9.jpg" alt="">
                            </div>
                            <div class="media-body m-l-20">
                                <h6 class="m-b-0">
                                    <a href="" class="text-dark">Victor Terry</a>
                                </h6>
                                <span class="font-size-13 text-gray">28th Jul 2018</span>
                            </div>
                        </div>
                        <span>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and
                            illustrious history. It was born from humble roots, only to rise to well-seasoned
                            greatness.</span>
                        <div class="m-t-15">
                            <ul class="list-inline text-right">
                                <li class="d-inline-block m-r-20">
                                    <a class="text-dark" href="javascript:void(0)">
                                        <i class="anticon m-r-5 anticon-like"></i>
                                        <span>18</span>
                                    </a>
                                </li>
                                <li class="d-inline-block m-r-30">
                                    <a class="text-dark" href="javascript:void(0)">
                                        <i class="anticon m-r-5 anticon-message"></i>
                                        <span>Reply</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-group-item p-h-0">
                        <div class="media m-b-15">
                            <div class="avatar avatar-image">
                                <img src="assets/images/avatars/thumb-10.jpg" alt="">
                            </div>
                            <div class="media-body m-l-20">
                                <h6 class="m-b-0">
                                    <a href="" class="text-dark">Wilma Young</a>
                                </h6>
                                <span class="font-size-13 text-gray">28th Jul 2018</span>
                            </div>
                        </div>
                        <span>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and
                            illustrious history. It was born from humble roots, only to rise to well-seasoned
                            greatness.</span>
                        <div class="m-t-15">
                            <ul class="list-inline text-right">
                                <li class="d-inline-block m-r-20">
                                    <a class="text-dark" href="javascript:void(0)">
                                        <i class="anticon m-r-5 anticon-like"></i>
                                        <span>95</span>
                                    </a>
                                </li>
                                <li class="d-inline-block m-r-30">
                                    <a class="text-dark" href="javascript:void(0)">
                                        <i class="anticon m-r-5 anticon-message"></i>
                                        <span>Reply</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="m-t-30">
                <nav>
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div> -->
        </div>
    </div>
</div>

@endsection

<!-- @push('custom_scripts')

@endpush -->
