<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Sistem Reset Password untuk Aplikasi.">
    <meta name="keywords" content="reset password, aplikasi, sistem keamanan">
    <meta name="author" content="PIXINVENT">
    <title>{{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/ico/favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Quicksand:400,500,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/forms/icheck/custom.css') }}">

    <!-- Application CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/login-register.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="vertical-layout vertical-menu-modern 1-column bg-full-screen-image menu-expanded blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <!-- Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 text-center">
                                <img src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Brand Logo">
                                <h4 class="card-title mt-2">Reset Password</h4>
                            </div>

                            <div class="card-body">
                                <!-- Pesan Sukses -->
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!-- Pesan Error -->
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Form Reset Password -->
                                <form action="{{ route('password.update') }}" method="POST" id="resetPasswordForm">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" autocomplete="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password Baru</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Baru Anda" autocomplete="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Konfirmasi Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Password Anda" autocomplete="email" required>
                                    </div>
                                    <button type="submit" class="btn btn-outline-info btn-block">
                                        <i class="ft-unlock"></i>Konfirmasi  Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/forms/form-login-register.js') }}"></script>
</body>
</html>
