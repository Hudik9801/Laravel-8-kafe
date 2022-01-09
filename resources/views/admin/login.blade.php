<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/admin/images/favicon.png">
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="index.html">ADMİN</a>
                                </div>
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                @include('home.message')
                                <form method="POST" action="{{ route('admin_logincheck') }}" class="md-float-material">
                                    @csrf
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                                        <div class="form-control-icon">
                                            <i class="bi bi-shield-lock"></i>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="form-check form-check-lg d-flex align-items-end">
                                        <input class="form-check-input me-2" type="checkbox" value="remember_me" id="remember_me" name="remember_me">
                                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                            Keep me logged in
                                        </label>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                                </form>

                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="{{asset('assets')}}/admin/page-register.html">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('assets')}}/admin/vendor/global/global.min.js"></script>
<script src="{{asset('assets')}}/admin/js/custom.min.js"></script>
<script src="{{asset('assets')}}/admin/js/dlabnav-init.js"></script>
<script src="{{asset('assets')}}/admin/js/styleSwitcher.js"></script>
</body>
</html>
