<input type="hidden" id="base_url" value="{{url('/')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">

<script src="{{URL::to('public/asset/web/assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/wow/wow.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/twentytwenty/twentytwenty.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/twentytwenty/jquery.event.move.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/vendors/parallax/parallax.min.js')}}"></script>


<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

<!-- template js -->
<script src="{{URL::to('public/asset/web/assets/js/zilom.js')}}"></script>
<script src="{{URL::to('public/asset/web/assets/js/script.js')}}"></script>


<script>
    var BASE_URL = $("#base_url").val();
    var CSRF_TOKEN = $("#_token").val();
    setTimeout(function() {
        $('.flash-message').fadeOut('slow');
    }, 3000);
</script>

<script>
        var BASE_URL = $("#base_url").val();
        var CSRF_TOKEN = $("#_token").val();
        $('#SubscriptionSubmitForm').on('submit',function(e){
            e.preventDefault();

            var email = $('#subscriptionEmail').val();

            $.ajax({
                url: BASE_URL+"/subscribe",
                type:"POST",
                data:{
                    "_token": CSRF_TOKEN,
                    email:email,
                },
                success:function(response){
                    $('#subscriptionSuccessMsg').show()
                    setTimeout(function() {
                        $('#subscriptionSuccessMsg').fadeOut('slow');
                        // $('.flash-message').fadeOut('slow');
                    }, 3000);

                    $('#SubscriptionSubmitForm').trigger("reset");
                    console.log(response);
                },
            });
        });
    </script>


