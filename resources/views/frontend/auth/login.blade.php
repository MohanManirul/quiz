<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Empire | B4+ admin template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" type="image/x-icon" href="frontend/img/favicon.ico">

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
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->
    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-3">
        <div class="authentication-inner">

            <!-- [ Side container ] Start -->
            <!-- Do not display the container on extra small, small and medium screens -->
            <div class="d-none d-lg-flex col-lg-8 align-items-center ui-bg-cover ui-bg-overlay-container p-5" style="background-image: url('frontend/img/bg/21.jpg');">
                <div class="ui-bg-overlay bg-dark opacity-50"></div>
                <!-- [ Text ] Start -->
                <div class="w-100 text-white px-5">
                    <h1 class="display-2 font-weight-bolder mb-4">JOIN OUR<br>COMMUNITY</h1>
                    <div class="text-large font-weight-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula ex eu gravida faucibus. Suspendisse viverra pharetra purus. Proin fringilla ac lorem at sagittis. Proin tincidunt dui et nunc ultricies dignissim.
                    </div>
                </div>
                <!-- [ Text ] End -->
            </div>
            <!-- [ Side container ] End -->

            <!-- [ Form container ] Start -->
            <div class="d-flex col-lg-4 align-items-center bg-white p-5">
                <!-- Inner container -->
                <!-- Have to add `.d-flex` to control width via `.col-*` classes -->
                <div class="d-flex col-sm-7 col-md-5 col-lg-12 px-0 px-xl-4 mx-auto">
                    <div class="w-100">

                        <!-- [ Logo ] Start -->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="ui-w-60">
                                <div class="w-100 position-relative">
                                    <img src="frontend/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Logo ] End -->

                        <h4 class="text-center text-lighter font-weight-normal mt-5 mb-0">Login to Your Account</h4>

                        <!-- [ Form ] Start -->
                        <form class="ajax-form" method="post" action="{{ route('do.frontend.login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control"  name="email">
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label d-flex justify-content-between align-items-end">
                                        <span>Password</span>
                                        <a href="pages_authentication_password-reset.html" class="d-block small">Forgot password?</a>
                                    </label>
                                <input type="password" class="form-control"  name="password">
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

                        <div class="text-center text-muted">
                            Don't have an account yet?
                            <a href="{{ route('frontend.register') }}">Sign Up</a>
                        </div>
                      

                    </div>
                </div>
            </div>
            <!-- [ Form container ] End -->

        </div>
    </div>
    <!-- [ content ] End -->

    <!-- Core scripts -->
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
 <script>      

          $("#addToWishList").on('click',function(){  
              console.log('ok'); 
               
          });

     </script>
</body>

</html>
