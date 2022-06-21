@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')

    <div class="card">
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
                @foreach ($careerList as $k=>$v)
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
                            </a>
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
            {{$careerList->appends(request()->input())->links() }}
        </div>

    </div>


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
                        window.location.href = BASE_URL + "/admin/career/delete/" + id;
                    }
                });
            });
        })
    </script>

@endpush
