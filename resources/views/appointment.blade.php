<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from Teman Sehat.dreamguystech.com/lightblue/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:09:26 GMT -->

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
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/select2.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/style.css') }}">

    {{-- <!--[if lt IE 9]>
		<script src="{{asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/html5shiv.min.js') }}"></script>
		<script src="{{asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/respond.min.js') }}"></script>
		<![endif]--> --}}
</head>

<body>
@include('navbar')
  
    


   


    <div class="sidebar sidebar-menu" id="side_menu">
        <div class="sidebar-inner slimscroll">
            <a id="close_menu" href="#"><i class="fas fa-times"></i></a>
            <ul class="mobile-menu-wrapper" style="display: block;">
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="index.html">Home</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="about-us.html">Tentang Kami</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="doctors.html">Konsultan</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="contact-us.html">Kontak Kami</a>
                    </div>
                </li>
                <li class="active">
                    <div class="mobile-menu-item clearfix">
                        <a href="appointment.html">Konsultasi</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="login.html">Login</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="register.html">Register</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="main-content account-content">
        <div class="content">
            <div class="container">
                <div class="account-box">
                    <div class="appointment">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                                <a href="#" aria-expanded="false" class="nav-link active"><span>Clinic
                                        Consultation</span></a>
                            </li>
                            <!-- <li class="nav-item">
<a href="#online-consultation" data-toggle="tab" aria-expanded="true" class="nav-link"><span>Online Consultation</span></a>
</li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="clinic-consultation">
                                <form action="{{ route('booking.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama <span class="text-red">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas<span class="text-red">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="kelas">
                                    </div>
                                    <div class="form-group">
                                        <label>Telp <span class="text-red">*</span>
                                        </label>
                                        <input type="number" class="form-control" name="telp">
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe Keadaan <span class="text-red">*</span>
                                        </label>
                                        <br><input type="radio" name="status" value="ringan" required="" /> Ringan
                                            <br><input type="radio" name="status" value="darurat" required="" /> Darurat
                                    </div>
                                    <div class="form-group">
                                        <label>Keluhan</label>
                                        <textarea class="form-control" name="penyakit"></textarea>
                                    </div>
                                        <div class="form-group">
                                            <label>Choose the Date</label>
                                            <div class="calendar">
                                                <div class="input-wrapper">
                                                    <input type="date" name="tanggal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="m-b-20">Choose your Convenient Time</label>
                                            <input type="time" name="pukul" class="appoint-time">
                                        </div>
                                        <div class="form-group text-center m-b-0">
                                            <button class="btn btn-primary account-btn" type="submit">Confirm
                                                Booking</button>
                                        </div>
                                    <!-- <div class="form-group text-center m-b-0">
<input type="submit" class="btn btn-primary account-btn" value="Submit">
</div> -->
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Location</h4>
                            <div class="about-clinic">
                                <p><strong>Address:</strong>
                                    <br>Jl. Teluk Pacitan
                                    <br>Malang,65126
                                </p>
                                <p class="m-b-0"><strong>Phone</strong>:
                                    <a href="tel:+8503867896">(850) 386-7896</a>
                                    <br> <strong>Fax</strong>:
                                    <a href="tel:+8503867896">(850) 386-7896</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Sitemap</h4>
                            <ul class="footer-menu">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <a href="doctors.html">Doctors</a>
                                </li>
                                <li>
                                    <a href="contact-us.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Appointment</h4>
                            <div class="appointment-btn">
                                <p>Dengan adanya fitur ini dapat memudahkan komunikasi antar tim uks dengan siswa</p>
                                <ul class="social-icons clearfix">
                                    <li>
                                        <a href="#" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Linkedin"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Google Plus"><i
                                                class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Youtube"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-12">
                            <div class="copy-text text-center">
                                <p>&#xA9; 2023 <a href="#">Teman Sehat</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="sidebar-overlay" data-reff="#side_menu"></div>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/moment.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/bootstrap-datetimepicker.min.js') }}">
    </script>
    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/datepicker.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/theme.js') }}"></script>
</body>

<!-- Mirrored from Teman Sehat.dreamguystech.com/lightblue/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:09:32 GMT -->

</html>
