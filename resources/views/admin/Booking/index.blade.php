<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/xray/html/table-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:23:22 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Appointment</title>
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
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('admin.sidebar')
        <!-- Page Content  -->
            <!-- TOP Nav Bar -->
            @include('admin.header')
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Data Appointment</h4>
                                </div>
                                <a href="{{ route('booking.create') }}" class="btn btn-sm btn-primary mr-2 mb-2">
                                    Make Appointment
                                  </a>
                            </div>
                            <div class="iq-card-body">
                                <div id="table" class="table-editable">
                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>No Telp</th>
                                                <th>Keluhan</th>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @forelse ($book as $row)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td contenteditable="true">{{ $row->nama }}</td>
                                                    <td contenteditable="true">{{ $row->kelas }}</td>
                                                    <td contenteditable="true">{{ $row->telp }}</td>
                                                    <td contenteditable="true">{{ $row->penyakit }}</td>
                                                    <td contenteditable="true">{{ $row->tanggal }}</td>
                                                    <td contenteditable="true">{{ $row->pukul }}</td>
                                                    <td contenteditable="true">
                                                        {{ $row->status }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('booking.edit', $row->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                                                          Edit
                                                        </a>
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"  action="{{ route('booking.destroy', $row->id) }}" method="post" style="display:inline;">
                                                          @csrf
                                                          {{ method_field('delete') }}
                                                          <button type="submit" class="btn btn-sm btn-danger mb-2">
                                                            Hapus
                                                          </button>
                                                        </form>

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
            <!-- Footer -->

            <!-- Footer END -->
        </div>
    </div>
    <!-- Wrapper END -->
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
    <!-- lottie JavaScript -->
    <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/lottie.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('xrayy/templates.iqonic.design/xray/html/js/custom.js') }}"></script>
</body>

<!-- Mirrored from templates.iqonic.design/xray/html/table-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:23:22 GMT -->

</html>
