
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('title')</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('assets/frontend') }}/css/font-awesome-all.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/flaticon.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/owl.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/animate.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/imagebg.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/style.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/responsive.css" rel="stylesheet">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper ltr">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!-- main header -->
    <header class="main-header">
        <div class="outer-container">
            <div class="header-upper clearfix">
                <div class="outer-box pull-left">
                    <div class="logo-box pull-left">
                        <div class="logo">
                            <span style="font-size: 24px; font-weight: bold; color: purple;">CekGinjal</span>
                        </div>
                        
                    </div>
                    <div class="menu-area pull-left">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">            
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="menu-right-content pull-right">
                    @guest
                    <div class="btn-box"><a href="{{ url('/login') }}">Login</a></div>
                    @else
                        <div class="btn-box">
                            <a href="{{ url('/users/dashboard') }}">{{ Auth::user()->name }}</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    @yield('content')

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <footer class=" text-white py-4 text-center">
                <p>©2024 CEKGINJAL. All Right Reserved.</p>
            </footer>
        </body>
        </div>
    </footer>
    <!-- main-footer end -->

<!-- jequery plugins -->
<script src="{{ asset('assets/frontend') }}/js/jquery.js"></script>
<script src="{{ asset('assets/frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/owl.js"></script>
<script src="{{ asset('assets/frontend') }}/js/wow.js"></script>
<script src="{{ asset('assets/frontend') }}/js/validation.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('assets/frontend') }}/js/appear.js"></script>
<script src="{{ asset('assets/frontend') }}/js/scrollbar.js"></script>
<script src="{{ asset('assets/frontend') }}/js/tilt.jquery.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jQuery.style.switcher.min.js"></script>

<!-- main-js -->
<script src="{{ asset('assets/frontend') }}/js/script.js"></script>

@stack('js')

</body>
</html>
