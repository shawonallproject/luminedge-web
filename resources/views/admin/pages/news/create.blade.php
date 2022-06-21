@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{URL::to('admin/news/save')}}" method="post" id="news-form" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Enter title" value="{{ old('title') }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" id="author" name="author"
                               placeholder="Enter Author" value="{{ old('author') }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="custom-file">
                            <input accept="image/*" type="file" onchange="loadFile(event)" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                    </div>
                    <div class="form-group col-md-6">

                        <img id="output" style="max-height:200px"/>
                    </div>
                </div>
                <div class="checkbox">
                    <input id="checkbox1" type="checkbox" name="activeBanner">
                    <label for="checkbox1">Active as banner<span>(*Please maintain ratio 1894 * 916 pixel)</span></label>
                </div>

                <div class="form-row" id="banner-row" style="display: none;">
                    <div class="form-group col-md-6">
                        <div class="custom-file">
                            <input accept="image/*" type="file" onchange="loadBannerFile(event)" class="custom-file-input" id="bannerImage" name="bannerImage">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                    </div>
                    <div class="form-group col-md-6">

                        <img id="banner-output" style="max-height:200px"/>
                    </div>
                </div>

                <div class="card-body">
                    <h4>Description</h4>
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
$("#news-form").on("submit",function() {
    $("#hiddenArea").val($(".ql-editor").html());
})
</script>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  var loadBannerFile = function(event) {
      var output = document.getElementById('banner-output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
      }
  };

  $('#checkbox1').change(function() {
      if($(this).is(":checked")) {
          $("#banner-row").show()
      }else{
          $("#banner-row").hide()
      }
  });

</script>
@endpush
