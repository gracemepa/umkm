<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>{{ $title ?? 'Syailendra App' }}</title> 
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/extensions/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/ui/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/forms/icheck/icheck.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/extensions/noui-slider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-noui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/ecommerce-shop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/forms/checkboxes-radios.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css') }}">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern content-detached-left-sidebar   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-left-sidebar">
    
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="{{ asset('assets/images/logo.jpg') }}">
                <h3 class="brand-text">Syailendra App</h3></a></li>
            <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
            <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <span class="mr-1">Hello, <span class="user-name text-bold-700">{{ Auth::user()->nama }}</span></span>
                        <span class="avatar avatar-online">
                            <img src="{{ asset('assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                        <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                        <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                        <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')

        <!-- Sidebar Menu -->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="la la-home"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="navigation-header">
                        <span>Ecommerce</span>
                        <i class="undefined ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
                    </li>

                    <li class="nav-item {{ Request::routeIs('admin.barangmasuk.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.barangmasuk.index') }}">
                            <i class="la la-inbox"></i>
                            <span class="menu-title">Barang Masuk</span>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::routeIs('admin.kategori.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.kategori.index') }}">
                            <i class="la la-th-large"></i>
                            <span class="menu-title">Kategori Barang</span>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::routeIs('admin.produk.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.produk.index') }}">
                            <i class="la la-cube"></i>
                            <span class="menu-title">Produk</span>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::routeIs('admin.produkdetail.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.produkdetail.index') }}">
                            <i class="ft-file-text"></i>
                            <span class="menu-title">Produk Detail</span>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('create-admin') ? 'active' : '' }}">
                        <a href="../create">
                            <i class="la la-user-plus"></i>
                            <span class="menu-title">Tambah Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">
                Copyright &copy; 2024
                <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">SYAILENDRA APP</a>, All rights reserved.
            </span>
            <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">
                Hand-crafted & Made with <i class="ft-heart pink"></i>
            </span>
        </p>
    </footer>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>

    <!-- Page Vendor JS -->
    <script src="{{ asset('assets/vendors/js/ui/prism.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/jquery.raty.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/jquery.treeview.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/wNumb.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>

    <!-- Modern JS -->
    <script src="{{ asset('assets/js/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @yield('scripts')
</body>

</html>
