@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
@foreach ($newsList as $k=>$v)
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
            @if($v->image)
                <img class="img-fluid" src="{{$v->image}}" alt="">
            @else
                <img class="img-fluid" src="{{URL::to('public/asset/admin/assets/images/others/img-2.jpg')}}" alt="">
            @endif
                
            </div>
            <div class="col-md-8">
                <h4 class="m-b-10">{{$v->title}}</h4>
                <div class="d-flex align-items-center m-t-5 m-b-15">
                    <div class="avatar avatar-image avatar-sm">
                    @if($v->image)
                        <img class="img-fluid" src="{{$v->image}}" alt="">
                    @else
                        <img class="img-fluid" src="{{URL::to('public/asset/admin/assets/images/others/img-2.jpg')}}" alt="">
                    @endif
                    </div>
                    <div class="m-l-10">
                        <span class="text-gray font-weight-semibold">{{$v->author}}</span>
                        <span class="m-h-5 text-gray">|</span>
                        <span class="text-gray">{{$v->created_at}}</span>
                    </div>
                </div>
                <p class="m-b-20">
                {{str_limit(strip_tags($v->description),200,'...')}}
                </p>
                <div class="text-right">
                <a href="{{url('admin/news/edit/'.$v->id)}}"
                               class="btn btn-success btn-sm">Edit</a>

                            <button class="delete btn btn-sm btn-danger"
                                    data-id="{{$v->id}}">Delete
                            </button>
                    <a class="btn btn-hover font-weight-semibold" href="{{URL::to('admin/news/details',$v->id)}}">
                        <span>Read More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{$newsList->appends(request()->input())->links() }}
    <!-- <div class="card">
        <div class="card-body">
            <table class="table data-table table-hover" id="admin-career-list-table">
                <thead>
                <tr>
                    <th class="hide-td">No.</th>
                    <th>Title</th>
                    <th>Vacancy</th>
                    <th>DeadLine</th>
                    <th>JobType</th>
                    <th>Salary</th>
                    <th>Location</th>
                    <th>IsActive</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="admin-table">
                @foreach ($newsList as $k=>$v)
                    <tr>
                        <td>{{(($page-1) * $limit) +($k+1)}}</td>
                        <td>{{$v->title}}</td>
                        <td>{{$v->vacancy}}</td>
                        <td>{{$v->deadLine}}</td>
                        <td>{{$v->jobType}}</td>
                        <td>{{$v->salary}}</td>
                        <td>{{$v->location}}</td>
                        <td>{{$v->isActive}}</td>
                        <td>
                            <a class="btn btn-sm btn-default"
                                    href="{{url('admin/career/details/'.$v->id)}}">Details
                            </button>
                            <a href="{{url('admin/career/edit/'.$v->id)}}"
                               class="btn btn-success btn-sm">Edit</a>

                            <button class="delete btn btn-sm btn-danger"
                                    data-id="{{$v->id}}">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$newsList->appends(request()->input())->links() }}
        </div>

    </div> -->


@endsection

@push('custom_scripts')
    <script>
        $(document).ready(function () {
            $(".delete").click(function () {
                var id = $(this).data("id");
                console.log(id)
                //console.log(id);
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        window.location.href = BASE_URL + "/admin/news/delete/" + id;
                    }
                });
            });
        })
    </script>

@endpush
