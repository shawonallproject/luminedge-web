@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table data-table table-hover" id="admin-user-list-table">
                <thead>
                <tr>
                    <th class="hide-td">No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="admin-table">
                @foreach ($adminList as $k=>$v)
                    <tr>
                        <td>{{(($page-1) * $limit) +($k+1)}}</td>
                        <td>{{$v->name}}</td>
                        <td>{{$v->email}}</td>
                        <td><a href="{{url('admin/edit/'.$v->id)}}"
                               class="btn btn-success btn-sm">Edit</a>
                            <button class="delete btn btn-sm btn-danger"
                                    data-id="{{$v->id}}">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$adminList->appends(request()->input())->links() }}
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
                        window.location.href = BASE_URL + "/admin/delete/" + id;
                    }
                });
            });
        })
    </script>

@endpush
