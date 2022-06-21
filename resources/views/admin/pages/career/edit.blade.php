@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{URL::to('admin/career/update/'.$career->id)}}" method="post" id="career-form">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Job Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Enter Job title" value="{{$career->title}}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vacancy">Job Vacancy</label>
                        <input type="text" class="form-control" id="vacancy" name="vacancy"
                               placeholder="Enter Job Vacancy" value="{{$career->vacancy}}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jobType">Job Type</label>
                        <select class="form-control" id="jobType" name="jobType">
                        <option value="full_time" @if($career->jobType=='full_time'){{'selected'}}  @endif>Full Time</option>
                        <option value="part_time" @if($career->jobType=='part_time') {{'selected'}} @endif>Part Time</option>
                        </select>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="salary">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary"
                        value="{{$career->salary}}" placeholder="Salary" required>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="confirmPassword">DeadLine</label>
                        <input type="date" class="form-control" id="deadLine" name="deadLine"
                        value="<?php echo date('Y-m-d',strtotime($career->deadLine)) ?>" placeholder="DeadLine" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                        value="{{$career->location}}" placeholder="Location" required>
                    </div>
                </div>
                <div class="card-body">
                    <h4>Job Description</h4>
                    <div class="m-t-25">
                        <div id="editor">
                                 {!!$career->description!!}
                        </div>
                    </div>
                    <textarea name="description" style="display:none" id="hiddenArea"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>


@endsection

@push('custom_scripts')
<script>
$("#career-form").on("submit",function() {
    $("#hiddenArea").val($(".ql-editor").html());
})
</script>
@endpush
