<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kumpul KeBo @yield('title')</title>

    <link href='https://fonts.googleapis.com/css?family=Nunito:wght@300;400;500;600;700&display=swap' rel='stylesheet'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.2.1/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/dist/css/adminlte.min.css') }}">
    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')
</head>

<body
    class="hold-transition sidebar-collapse layout-top-nav layout-footer-fixed layout-navbar-fixed layout-fixed dark-mode">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('storage/img/logo.png') }}" alt="Best-logo" height="100"
                width="100">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md border-bottom-0 navbar-dark"
            style="background-image: linear-gradient(to right, #1acab2, #00b9b7, #00a8b7, #0096b1, #2984a6);">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="Logo" width="50px">
                    <span class="brand-text font-weight-bold" style="font-size: 25x">Kumpul KeBo</span>
                </a>
                {{-- 
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div> --}}

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    @auth
                        <li class="nav-item user-menu">
                            <a href="#" class="nav-link" data-widget="pushmenu" href="#" role="button">
                                <span class="d-none d-md-inline"
                                    style="font-size: 20px;font-weight: 900"><span>@</span>{{ Auth::user()->username }}</span>
                                <img src="{{ asset('assets/adminLTE/dist/img/avatar5.png') }}"
                                    class="user-image img-circle elevation-2" alt="User Image">
                            </a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-outline-light mx-2">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn btn-outline-light mx-2">Sign up</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        @auth
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="brand-link">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="AdminLTE Logo" width="30px">
                    <span class="brand-text font-weight-bold">Kumpul KeBo</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('assets/adminLTE/dist/img/avatar5.png') }}" class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Hi! {{ Auth::user()->username }}</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-header">Setting</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            {{-- <li class="nav-header">Setting</li> --}}
                            <li class="nav-item mt-5">
                                <a href="{{ route('logout') }}" class="nav-link btn-secondary text-center"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <p><strong>Logout</strong></p>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        @endauth

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer"
            style="background-image: radial-gradient(circle, #1ddec3, #00c8c6, #00b2c2, #009bb7, #2984a6);">
            {{-- <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved. --}}
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('assets/adminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @stack('script')

    <!-- AdminLTE App -->
    <script src="{{ asset('assets/adminLTE/dist/js/adminlte.min.js') }}"></script>

</body>

</html>
