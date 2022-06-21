<input type="hidden" id="base_url" value="{{url('/')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
<!-- Core Vendors JS -->
<script src="{{URL::to('public/asset/admin/assets/js/vendors.min.js')}}"></script>

<!-- page js -->
<script src="{{URL::to('public/asset/admin/assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{URL::to('public/asset/admin/assets/js/pages/dashboard-default.js')}}"></script>

<!-- Core JS -->
<script src="{{URL::to('public/asset/admin/assets/js/app.min.js')}}"></script>

<script src="{{asset('public/asset/admin/assets/js/bootbox.min.js')}}"></script>
<!-- page js -->
<script src="{{asset('public/asset/admin/assets/vendors/quill/quill.min.js')}}"></script>
<script src="{{asset('public/asset/admin/assets/js/pages/form-elements.js')}}"></script>
{{--<script src="{{asset('public/asset/admin/assets/ckeditor/js/plugins/ckeditor/ckeditor.js')}}"></script>--}}


<script>
    var BASE_URL = $("#base_url").val();
    var CSRF_TOKEN = $("#_token").val();
    setTimeout(function() {
        $('.flash-message').fadeOut('slow');
    }, 3000);

    new Quill('#editor', {
    theme: 'snow'
    });

</script>


