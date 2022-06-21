<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.partials.head')
    @stack('custom_styles')
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
    </div>
    <div class="social-aside">
        <a href="https://mobile.twitter.com/luminedgePL" target="_blank" class="fab fa-twitter"></a>
        <a href="https://www.facebook.com/Luminedge/" target="_blank" class="fab fa-facebook-square"></a>
        <a href="https://instagram.com/luminedge?utm_medium=copy_link" target="_blank" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/luminedge-consultancy-324891234" target="_blank" class="fab fa-linkedin"></a>
        <a href="https://www.youtube.com/channel/UCYulYAfXt2ecHEKDIXx-kpw" target="_blank" class="fab fa-youtube"></a>
    </div>

    <!-- /.preloader -->
    <!-- /.page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Header START -->
        @include('web.partials.header')
        <!-- Header END -->
        @yield('content')

        <!--Start Newsletter One-->
        @include('web.partials.newsletter')
        <!--end Newsletter One-->
        
        <!-- Footer START -->
        @include('web.partials.footer')
        <!-- Footer END -->
    </div>
    <!-- /.page-wrapper End-->

    <!-- Mobile Nav START -->
    @include('web.partials.mobilenav')
    <!-- Mobile Nav START -->

@include('web.partials.scripts')
@stack('custom_scripts')
</body>

</html>
