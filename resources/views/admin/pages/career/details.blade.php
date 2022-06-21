@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
<div class="page-header">
    <h2 class="header-title">Career</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{URL::to('admin/career/list')}}">Career</a>
            <span class="breadcrumb-item active">Details</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="container">
            <h2 class="font-weight-normal m-b-10">{{$career->title}}</h2>
            <div class="col-md-12" style="display:flex">
                <div class="col-md-6">
                    <h4 style="font-weight: 800;">Job Vacancy:</h4>
                    <p>{{$career->vacancy}}</p>
                </div>
                
                <div class="col-md-6">
                    <h4 style="font-weight: 800;">Job DeadLine:</h4>
                    <p>{{$career->deadLine}}</p>
                </div>
            </div>

            <div class="col-md-12" style="display:flex">
                <div class="col-md-6">
                    <h4 style="font-weight: 800;">Job Type:</h4>
                    <p>{{$career->jobType}}</p>
                </div>
                
                <div class="col-md-6">
                    <h4 style="font-weight: 800;">Salary:</h4>
                    <p>{{$career->salary}}</p>
                </div>
            </div>

            <div class="col-md-12" style="display:flex">
                <div class="col-md-6">
                    <h4 style="font-weight: 800;">Job Location:</h4>
                    <p>{{$career->location}}</p>
                </div>
                
                <div class="col-md-6">
                    <h4 style="font-weight: 800;">Created At:</h4>
                    <p>{{$career->createdAt}}</p>
                </div>
            </div>

            <h4 style="font-weight: 800;">Job Description:</h4>
            <div class="m-t-30">
                {!!$career->description!!}
            </div>
            <hr>
            
        </div>
    </div>
</div>


@endsection

<!-- @push('custom_scripts')

@endpush -->
