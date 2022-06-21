<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
    @stack('custom_styles')
</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        @include('admin.partials.header')
        <!-- Header END -->

        <!-- Side Nav START -->
        @include('admin.partials.aside')
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">

            <!-- Content Wrapper START -->
            <div class="main-content">
                @include('admin.partials.flashes')
                @yield('content')
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            @include('admin.partials.footer')
            <!-- Footer END -->

        </div>
        <!-- Page Container End -->

    </div>
</div>

@include('admin.partials.scripts')
@stack('custom_scripts')
</body>

</html>
