<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Admin Panel</title>

    @include('backend.includes.meta')
    @include('backend.includes.css')
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
          @include('backend.includes.leftsidebar')
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
             @include('backend.includes.navbar')

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                   @yield('body-content')

                 @include('backend.includes.footer')
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    {{-- @include('backend.includes.welcome_modal') --}}
    @include('backend.includes.script')
</body>

</html>
