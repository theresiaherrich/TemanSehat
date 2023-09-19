<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eres.dexignzone.com/laravel/demo/appointment by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:26:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	   <!-- Title -->
	<title>TemanSehat | Appointment </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="csrf-token" content="bPakjybVUgQcQWokzlwVoHKW0JCUTEtpM62AT4LX">

	<meta name="keywords" content="admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
	<meta name="description" content="Some description for the page">

	<meta property="og:title" content="ERES - Hospital Admin Dashboard Bootstrap Laravel Templates">
	<meta property="og:description" content="ERES Laravel | Appointment ">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/favicon.png') }}">
						<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/') }}"/>
					<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>
					<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>
					<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
					<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
					<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>


						<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>
					<link href="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/css/style.css') }}" rel="stylesheet" type="text/css"/>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        @include('admin.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		@include('admin.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        		<div class="content-body  ">
			<div class="container-fluid">
    <div class="form-head d-flex mb-3 mb-md-4 align-items-center">
        <div class="input-group search-area d-inline-flex me-2">
            <input type="text" class="form-control" placeholder="Search here">
            <div class="input-group-append">
                <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
            </div>
        </div>
        <div class="ms-auto">
            <a href="javascript:void(0);" class="btn btn-primary btn-rounded add-appointment" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Book Appointment</a>
            <a href="doctor-list.html" class="btn btn-primary btn-rounded">Data Ruangan</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Kelas</th>
                                    <th>Tanggal Janji</th>
                                    <th>Waktu</th>
                                    <th>No Telp</th>
                                    <th>Penyakit/Kondisi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                                <label class="form-check-label" for="customCheckBox1"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/1.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Matthew</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/2.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/3.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Acne</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/4.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Asher Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anaphylaxis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
                                                <label class="form-check-label" for="customCheckBox8"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/6.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Carter Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Angioedema</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
                                                <label class="form-check-label" for="customCheckBox7"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/4.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">David Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anxiety</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                                                <label class="form-check-label" for="customCheckBox6"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/6.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Anthony David</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Arthritis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                                <label class="form-check-label" for="customCheckBox1"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/1.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Matthew</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/2.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/3.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Acne</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/4.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Asher Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anaphylaxis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
                                                <label class="form-check-label" for="customCheckBox8"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/6.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Carter Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Angioedema</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
                                                <label class="form-check-label" for="customCheckBox7"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/4.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">David Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anxiety</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                                                <label class="form-check-label" for="customCheckBox6"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/6.jpg') }}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Anthony David</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Arthritis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <form>
            <input type="hidden" name="_token" value="bPakjybVUgQcQWokzlwVoHKW0JCUTEtpM62AT4LX">          <div class="row">
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Title:</label>
                      <select class="form-control">
                        <option>Miss</option>
                         <option>Mr.</option>
                          <option>Mrs.</option>
                      </select>
                   </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Name:</label>
                       <input type="text" class="form-control" id="name1" placeholder="Name">
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Last Name:</label>
                       <input type="text" class="form-control" id="name2" placeholder="Last Name">
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label class="col-form-label">Date Of Appointment:</label>
                      <input size="16" type="date"  class="form-control">
                  </div>
              </div>
              <div class="col-xl-6">
                  <label class="form-label mt-3">Form<span class="text-danger">*</span></label>
                  <div class="input-group clockpicker">
                      <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
                                  class="fas fa-clock"></i></span>
                  </div>
              </div>
              <div class="col-xl-6">
                  <label class="form-label mt-3">To<span class="text-danger">*</span></label>
                  <div class="input-group clockpicker">
                      <input type="text" class="form-control" value="10:30"><span class="input-group-text"><i
                                  class="fas fa-clock"></i></span>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Address :</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label  class="col-form-label">Mobile No:</label>
                       <input type="number" class="form-control" id="moblie1" placeholder="Mobile">
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Email Id:</label>
                       <input type="email" class="form-control" id="email1" placeholder="Email">
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Consulting Doctor:</label>
                      <select class="form-control">
                        <option>Dr.HANI B BARADI</option>
                         <option>Dr.NAJJIA N MAHMOUD</option>
                          <option>Dr. SANKAR NAIDU ADUSUMILLI</option>
                      </select>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label  class="col-form-label">Injury/Condition:</label>
                       <input type="text" class="form-control" id="fever" placeholder="fever">
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Note:</label>
                      <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                  </div>
              </div>
          </div>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">

      <div class="copyright">
          <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
      </div>
  </div>        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
                        <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/global/global.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
                                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/chart.js/Chart.bundle.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/js/plugins-init/clock-picker-init.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-datetimepicker/js/moment.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/vendor/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
                                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/js/custom.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/js/deznav-init.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/js/demo.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/js/styleSwitcher.js') }}" type="text/javascript"></script>

    <script>
    (function($) {

        var table = $('#example5').DataTable({
            searching: false,
            paging:true,
            select: false,
            //info: false,
            lengthChange:false

        });
        $('#example tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();

        });

    })(jQuery);

    jQuery('#datetimepicker2').datetimepicker({
        datepicker:false,
        format:'H:i'
    });
</script>



</body>

<!-- Mirrored from eres.dexignzone.com/laravel/demo/appointment by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:26:59 GMT -->
</html>
