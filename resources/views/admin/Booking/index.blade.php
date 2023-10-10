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
                                    <th>Penyakit/Kondisi</th>
                                    <th>Tanggal Janji</th>
                                    <th>Waktu</th>
                                    <th>No Telp</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($book as $row)
                                <tr>
                                    {{-- <th scope="row">{{ $no++ }}</th> --}}
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                                <label class="form-check-label" for="customCheckBox1"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        {{-- <span>
                                            <img src="{{ asset('eres/eres.dexignzone.com/laravel/demo/public/images/avatar/1.jpg') }}" alt="">
                                        </span> --}}
                                        <span class="text-nowrap ms-2">{{ $row->nama }}</span>
                                    </td>
                                    <td >{{ $row->kelas }}</td>
                                    <td>{{ $row->penyakit }}</td>
                                    <td>{{ $row->tanggal }}</td>
                                    <td>{{ $row->pukul }}</td>
                                    <td >{{ $row->telp }}</td>
                                    <td>@if($row->status)
                                        <span class="badge badge-soft-warning text-uppercase">Darurat</span>
                                    @else
                                        <span class="badge badge-soft-success text-uppercase">Ringan</span>
                                    @endif</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment" id="edit" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-kelas="{{ $row->kelas}}" data-nama="{{ $row->nama}}" data-tanggal="{{ $row->tanggal}}" data-telp=" {{ $row->telp}} " data-penyakit="{{ $row->penyakit}}" data-pukul="{{ $row->pukul}}"><i class="fa fa-pencil fs-18 "  aria-hidden="true" ></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
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

        <form action="{{ route('booking.store') }}" method="post"
            enctype="multipart/form-data">
            @csrf
                <div class="col-xl-12">
                    <div class="form-group">
                        <label class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama"  name="nama" placeholder="Name">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label class="col-form-label">Kelas:</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="kelas">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label  class="col-form-label">No Telp:</label>
                        <input type="number" class="form-control" id="telp" name="telp" placeholder="Mobile">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label  class="col-form-label">Keluhan:</label>
                        <textarea class="form-control" id="penyakit" name="penyakit"></textarea>
                    </div>
                </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label class="col-form-label">Tanggal Appointment:</label>
                      <input size="16" type="date" name="tanggal" class="form-control">
                  </div>
              </div>
              <div class="col-xl-12">
                  <label class="form-label mt-3">Waktu<span class="text-danger">*</span></label>
                  <div class="input-group clockpicker">
                      <input type="time" class="form-control" name="pukul"><span class="input-group-text"><i
                                  class="fas fa-clock"></i></span>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Status:</label>
                      <select class="form-control" name="status">
                        <option>Darurat</option>
                         <option>Ringan</option>
                      </select>
                   </div>
              </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">

        <form   method="post"
            enctype="multipart/form-data">
            @csrf
            
                <div class="col-xl-12">
                    <div class="form-group">
                        <label class="col-form-label">Nama:</label>
                        <input type="text" class="form-control"   id="namaedit"  placeholder="id">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label class="col-form-label">Kelas:</label>
                        <input type="text" class="form-control"id="kelasedit" placeholder="kelas">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label  class="col-form-label">No Telp:</label>
                        <input type="number" class="form-control"  id="telpedit" placeholder="Mobile">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label  class="col-form-label">Keluhan:</label>
                        <textarea class="form-control"  id="penyakitedit"></textarea>
                    </div>
                </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label class="col-form-label">Tanggal Appointment:</label>
                      <input size="16" type="date" id="tanggaledit" class="form-control">
                  </div>
              </div>
              <div class="col-xl-12">
                  <label class="form-label mt-3">Waktu<span class="text-danger">*</span></label>
                  <div class="input-group clockpicker">
                      <input type="time" class="form-control" id="pukuledit"><span class="input-group-text"><i
                                  class="fas fa-clock"></i></span>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Status:</label>
                      <select class="form-control" id="status">
                        <option>Darurat</option>
                         <option>Ringan</option>
                      </select>
                   </div>
              </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
      </div>
    </div>
  </div>
        <!--**********************************
            Footer start
        ***********************************-->
          <!--**********************************
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
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    (function($) {

        var table = $('#example5').DataTable({
            searching: false,
            paging:false,
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

<script>

    $('#edit').on('click',function () {

        var nama = $(this).data("nama");
        var kelas = $(this).data("kelas");
        var penyakit = $(this).data("penyakit");
        var tanggal = $(this).data("tanggal");
        var telp = $(this).data("telp");
        var pukul = $(this).data('pukul');

console.log(pukul)

        $('#namaedit').val(nama);
        $('#tanggaledit').val(tanggal);
        $('#telpedit').val(telp);
        $('#kelasedit').val(kelas);
        $('#penyakitedit').val(penyakit);
        $('#pukuledit').val(pukul);

    })
</script>


</body>

<!-- Mirrored from eres.dexignzone.com/laravel/demo/appointment by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:26:59 GMT -->
</html>
