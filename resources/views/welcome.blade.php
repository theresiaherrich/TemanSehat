<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from Teman Sehat.dreamguystech.com/lightblue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:08:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Teman Sehat</title>

    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/favicon.png') }}">

    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/style.css') }}">

    <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    @include('navbar')


    @include('sidebar')


    <div class="main-content">
        <section class="section home-banner row-middle">
            <div class="inner-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="banner-content">
                            <h1>Teman Sehat</h1>
                            <p>Teman sehat merupakan web penyedia fasilitas tambahan untuk UKS sekolah dalam bidang
                                kesehetan</p>
                            <a title="Konsultasi" class="btn btn-primary Konsultasi-btn"
                                href="/appointment">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section features">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Tentang Teman Sehat</h3>
                            <div class="line"></div>
                            <p>Teman sehat merupakan web penyedia fasilitas tambahan untuk UKS sekolah dalam bidang
                                kesehetan, yang bertujuan untuk memudahkan murid berkomunikasi/konsultasi dengan pihal
                                UKS. Kami berharap dengan adanya Teman Sehat ini dapat membantu semaksimal mungkin :)
                            </p>
                        </div>
                    </div>
                </div>
                -<div class="row">
                    <div class="col-md-6">
                        <div class="dept-box">
                            <div class="dept-img">
                                <img width="67" height="80" alt="Dentists"
                                    src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/uks.jpeg') }}"></a>
                            </div>
                            <h4>UKS</h4>
                            <p>Usaha Kesehatan Sekolah (UKS) adalah upaya untuuk membina dan mengembangkan kebiasaan
                                hidup sehat yang dilakukan secara terpadu
                                melalui program pendidikan dan pelayanan kesehatan sekolah.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dept-box">
                            <div class="dept-img">
                                <img width="63" height="80" alt="Appointment"
                                    src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/appointment.png') }}"></a>
                            </div>
                            <h4>Appointment</h4>
                            <p>Dengan adanya fitur ini dapat memudahkan komunikasi antara tim UKS dengan siswa.
                            </p>
                        </div>
                    </div>

                    <section class="section meet-doctors">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-header text-center">
                                        <h3 class="header-title">Konsultan</h3>
                                        <div class="line"></div>
                                        <p>Selain adanya tim UKS kami juga menyediakan konsultan terpercaya
                                            yang akan memberikan informasi tentang kesehatan dan mealayani keluhan
                                            kesehatan masyarakat sekolah.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="doctor text-center">
                                    <a href="doctor-details.html">
                                        <img src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/diagnosis.png') }}"
                                            alt="Bu Tania" class="rounded-circle" width="170" height="170">
                                        <div class="doctors-name">Bu Tania</div>
                                        <div class="doctors-position">Konsultan</div>
                                    </a>
                                </div>
                            </div>
                    </section>

                    @include('footer')


                    <div class="sidebar-overlay" data-reff="#side_menu"></div>

                    <script data-cfasync="false"
                        src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
                    </script>
    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/theme.js') }}"></script>
</body>

<!-- Mirrored from Teman Sehat.dreamguystech.com/lightblue/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:09:26 GMT -->

</html>
