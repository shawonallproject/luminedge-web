@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{URL::to('admin/content/about/update/'.$type)}}" method="post" id="career-form">
                @csrf

                <div class="card-body">
                    <h4>{{$type}}</h4>
                    <div class="m-t-25">
                        <div id="editor">
                                {!! $about->$type !!}
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
