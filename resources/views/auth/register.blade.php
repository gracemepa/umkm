<!DOCTYPE html>
<html lang="en" class="loading" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Syailendra Admin Dashboard - A modern, responsive template for your projects.">
    <meta name="keywords" content="admin template, dashboard, responsive, modern">
    <meta name="author" content="PIXINVENT">
    <title>{{ $title ?? 'Login | Syailendra App' }}</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/forms/icheck/custom.css') }}">
    <!-- Modern CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!-- Page Level CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/pages/login-register.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body class="vertical-layout vertical-menu-modern 1-column bg-gradient-x-purple-blue menu-expanded blank-page blank-page">
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
          <!-- Login Section -->
          <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
              <div class="col-md-5 col-12 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                  <div class="card-header border-0 text-center">
                    <!-- Syailendra Logo -->
                    <img src="{{ asset('assets/images/logo.jpg') }}" alt="Syailendra App Logo" class="login-logo mb-3" style="max-width: 120px;">
                    <h4 class="text-primary font-weight-bold" style="font-size: 24px; margin-top: 15px;">Sign In to Get Started</h4>
                  </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" name="username" id="user-name" placeholder="Username" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="email" class="form-control" name="email" id="user-email" placeholder="Alamat Email" required>
                                <div class="form-control-position">
                                    <i class="ft-mail"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control" name="password" id="user-password" placeholder="Password" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-user"></i> Register</button>
                        </form>
                        
                    </div>
                    <div class="card-body">
                        <a href="{{ route('login.form')}}" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i> Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/js/scripts/forms/form-login-register.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>