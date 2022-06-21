@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{URL::to('admin/career/save')}}" method="post" id="career-form">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Job Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Enter Job title" value="{{ old('title') }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vacancy">Job Vacancy</label>
                        <input type="text" class="form-control" id="vacancy" name="vacancy"
                               placeholder="Enter Job Vacancy" value="{{ old('vacancy') }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jobType">Job Type</label>
                        <select class="form-control" id="jobType" name="jobType">
                        <option value="full_time">Full Time</option>
                        <option value="part_time">Part Time</option>
                        </select>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="salary">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary"
                               placeholder="Salary" required>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="confirmPassword">DeadLine</label>
                        <input type="date" class="form-control" id="deadLine" name="deadLine"
                        value="<?php echo date('Y-m-d'); ?>" placeholder="DeadLine" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                               placeholder="Location" required>
                    </div>
                </div>
                <div class="card-body">
                    <h4>Job Description</h4>
                    <div class="m-t-25">
                        <div id="editor">

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
