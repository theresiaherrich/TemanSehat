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







    @include('sidebar')


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


    @include('footer')


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
