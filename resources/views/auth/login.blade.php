<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author" content="Rezki Ramadhan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mapping Competencies CG')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/theme/images/logo/logo-sq.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />


</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo.svg')}}" alt="logo">
                            </div>
                            @include('include.alert')
                            <h4>Selamat datang di Maapping Competencies CG</h4>
                            <h6 class="font-weight-light">Masuk untuk memulai </h6>
                            <form class="pt-3" action="{{ route('postlogin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="nik" class="form-control form-control-lg" id="nik" name="nik" placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script src="{{ asset('assets/theme/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('assets/js/template.js')}}"></script>
    <script src="{{ asset('assets/js/settings.js')}}"></script>
    <script src="{{ asset('assets/js/todolist.js')}}"></script>

    <script>
        $(document).ready(function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }

            $('#form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Email tidak boleh kosong",
                        email: "Format email tidak sesuai"
                    },
                    password: {
                        required: "Password tidak boleh kosong",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });

        });
    </script>
</body>
<!-- END: Body-->

</html>