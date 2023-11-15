@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:23:27 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Teman Sehat Login</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('xrayy/templates.iqonic.design/xray/html/images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('xrayy/templates.iqonic.design/xray/html/css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('xrayy/templates.iqonic.design/xray/html/css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('xrayy/templates.iqonic.design/xray/html/css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('xrayy/templates.iqonic.design/xray/html/css/responsive.css') }}">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('xrayy/templates.iqonic.design/xray/html/images/logo-white.png') }}" class="img-fluid" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="{{ asset('xrayy/templates.iqonic.design/xray/html/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Daftar untuk membuat janji temu</h4>
                                    <p>Buat janji temu untuk konsultasi keluhan anda.</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('xrayy/templates.iqonic.design/xray/html/images/login/2.png') }}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Daftar untuk membuat janji temu</h4>
                                    <p>Buat janji temu untuk konsultasi keluhan anda.</p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('xrayy/templates.iqonic.design/xray/html/images/login/3.png') }}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Daftar untuk membuat janji temu</h4>
                                    <p>Buat janji temu untuk konsultasi keluhan anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Log In</h1>
                            <p>Masukkan alamat email dan kata sandi Anda untuk mengakses website kami.</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="#" class="float-right">Lupa password?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customCheck1">Ingat saya</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Log In</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Belum punya Akun? <a href="{{ route('register') }}">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/jquery.min.js') }}"></script>
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/popper.min.js') }}"></script>
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/bootstrap.min.js') }}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/jquery.appear.js') }}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/countdown.min.js') }}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/waypoints.min.js') }}"></script>
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/jquery.counterup.min.js') }}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/select2.min.js') }}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/owl.carousel.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/smooth-scrollbar.js') }}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/custom.js') }}"></script>
   </body>

<!-- Mirrored from templates.iqonic.design/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:23:35 GMT -->
</html>
@endsection

