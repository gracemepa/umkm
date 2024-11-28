<!DOCTYPE html>
<html lang="en" class="loading" data-textdirection="ltr">
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

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/extensions/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/ui/prism.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/forms/icheck/icheck.css') }}">

    <!-- Modern CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- Page Level CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/ecommerce-shop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/forms/checkboxes-radios.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="fixed-navbar content-detached-left-sidebar menu-expanded">

<!-- Header Navbar -->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
  <div class="navbar-wrapper">
      <div class="navbar-header">
          <a class="navbar-brand d-flex align-items-center" href="#">
              <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" class="brand-logo rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
              <h3 class="brand-text mb-0 text-info" style="font-size: 1.75rem; font-weight: bold;">Syailendra App</h3> <!-- Judul aplikasi -->
          </a>
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
  </div>
</nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2024
                <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">SYAILENDRA APP</a>, All rights reserved.
            </span>
            <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
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
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>

    <!-- Page Level JS -->
    <script src="{{ asset('assets/js/scripts/pages/content-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/ecommerce-product-shop.js') }}"></script>
</body>
</html>
