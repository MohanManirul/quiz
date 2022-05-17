<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Admin Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, auth panel, bootstrap 4, auth template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" type="image/x-icon" href="auth/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('auth/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/fonts/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/fonts/feather.css') }}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap-material.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/shreerang-material.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/uikit.css') }}">
    
    <!---page loader css --->
    <link rel="stylesheet" href="{{ asset('auth/css/loader.css') }}">
    
    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('auth/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('auth/css/pages/authentication.css') }}">
</head>

<body>
    <!--page loader start from j-->
    <div class="loading">Loading&#8230;</div>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!--page loader ends from j-->

    <!-- End Page Loading -->

    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('auth/img/bg/21.jpg');">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="{{ asset('backend/img/logo-dark.png') }}" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->

                    <h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>

                    <!-- Form -->
                    <form class="ajax-form" method="post" action="{{ route('do.login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label d-flex justify-content-between align-items-end">
                                <span>Password</span>
                                <a href="pages_authentication_password-reset.html" class="d-block small">Forgot password?</a>
                            </label>
                            <input type="password" class="form-control" name="password">
                            <div class="clearfix"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-0">
                            <label class="custom-control custom-checkbox m-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Remember me</span>
                            </label>
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </form>
                    <!-- [ Form ] End -->

                </div>
                <div class="card-footer py-3 px-4 px-sm-5">
                    <div class="text-center text-muted">
                        Don't have an account yet?
                        <a href="pages_authentication_register-v2.html">Sign Up</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->

    <!-- jQuery Library -->
    <script src="{{ asset('auth/js/pace.js') }}"></script>
    <script type="text/javascript" src="{{ asset('auth/js/jquery-1.11.2.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('backend/js/ajax_form_submit.js') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.js') }}"></script>
    <script src="{{ asset('auth/js/sidenav.js') }}"></script>
    <script src="{{ asset('auth/js/layout-helpers.js') }}"></script>
    <script src="{{ asset('auth/js/material-ripple.js') }}"></script>

    <!-- Libs -->
    <script src="{{ asset('auth/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <!-- Demo -->
    <script src="{{ asset('auth/js/demo.js') }}"></script>
    <script src="{{ asset('auth/js/analytics.js') }}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset('auth/js/custom-script.js') }}"></script> 
   

</body>

</html>
