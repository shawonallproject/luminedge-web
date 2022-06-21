@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table data-table table-hover" id="admin-career-list-table">

                <tr>
                    <th>Company</th>
                    <td>{!! $about->company !!}</td>
                    <td>
                        <a href="{{url('admin/content/about/edit/company')}}"
                            class="btn btn-success btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th>Mission</th>
                    <td>{!! $about->mission !!}</td>
                    <td>
                        <a href="{{url('admin/content/about/edit/mission')}}"
                            class="btn btn-success btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th>Vision</th>
                    <td>{!! $about->vision !!}</td>
                    <td>
                        <a href="{{url('admin/content/about/edit/vision')}}"
                        class="btn btn-success btn-sm">Edit</a>
                    </td>
                </tr>

            </table>

        </div>

    </div>


@endsection


