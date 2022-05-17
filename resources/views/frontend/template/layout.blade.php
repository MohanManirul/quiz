<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Admin Panel</title>

    @include('frontend.includes.meta')
    @include('frontend.includes.css')
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
          @include('frontend.includes.leftsidebar')
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
             @include('frontend.includes.navbar')

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                   @yield('body-content')

                 @include('frontend.includes.footer')
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    {{-- @include('frontend.includes.welcome_modal') --}}
    @include('frontend.includes.script')
</body>

</html>
