<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/backend/fontawesome/css/all.css') }}">

    @stack('css')

</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header" style="padding: 0 20px;"> <!-- Menambahkan padding di kiri dan kanan -->
            <div class="logo" style="flex-grow: 1;">
                <span style="font-size: 24px; font-weight: bold; color: purple;">CekGinjal</span>
            </div>
            <div style="margin-left: auto;"></div> <!-- Ini akan memindahkan elemen setelahnya ke kanan -->
            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="fas fa-desktop header-icon d-none d-sm-inline-block" data-fullscreen></i>
            </div>
        </div>
        
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">

                    @if (Request::is('admin*'))
                        
                    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a class="nav-item-hold active" href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/symptoms') ? 'active' : '' }}">
                        <a class="nav-item-hold" href="/admin/symptoms"><i class="fas fa-stethoscope"></i><span class="nav-text">Gejala</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/diseases') ? 'active' : '' }}">
                        <a class="nav-item-hold" href="/admin/diseases"><i class="fas fa-disease"></i><span class="nav-text">Penyakit</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/rules') ? 'active' : '' }}">
                        <a class="nav-item-hold" href="/admin/rules"><i class="fas fa-hand-sparkles"></i><span class="nav-text">Rules</span></a>
                        <div class="triangle"></div>
                    </li>

                @endif
                
                @if (Request::is('users*'))
                    <li class="nav-item {{ Request::is('users/dashboard') ? 'active' : '' }}">
                        <a class="nav-item-hold active" href="/users/dashboard"><i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item {{ Request::is('users/diagnosis') ? 'active' : '' }}">
                        <a class="nav-item-hold active" href="/users/diagnosis"><i class="fas fa-diagnoses"></i><span class="nav-text">Diagnosis</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item {{ Request::is('users/consultations') ? 'active' : '' }}">
                        <a class="nav-item-hold" href="/users/consultations"><i class="fas fa-hospital-user"></i><span class="nav-text">Consultations</span></a>
                        <div class="triangle"></div>
                    </li>
                @endif

                    <!-- Logout Menu Item -->
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i><span class="nav-text">Logout</span>
                        </a>
                        <div class="triangle"></div>
                    </li>

                </ul>
            </div>

            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <!-- Secondary menu items if needed -->
            </div>

            <div class="sidebar-overlay"></div>
        </div>

        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Logout form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <script src="{{ asset('assets/backend') }}/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/scripts/script.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/scripts/sidebar.large.script.min.js"></script>

    @stack('js')
    @include('sweetalert::alert')

</body>

</html>
