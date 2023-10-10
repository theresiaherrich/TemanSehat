<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/xray/html/profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:22:51 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Edit Appointment</title>
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
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
            @include('admin.header')
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="iq-edit-list-data">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Edit Appointment</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form action="{{ route('booking.update', $book ->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label for="nama">Nama :</label>
                                             <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $book->nama) }}">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="kelas">Kelas :</label>
                                             <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas', $book->kelas) }}">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="telp">No Telp :</label>
                                             <input type="text" class="form-control" id="telp" name="telp" value="{{ old('telp', $book->telp) }}">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="pukul">Waktu :</label>
                                             <input type="text" class="form-control" id="pukul" name="pukul" value="{{ old('pukul', $book->pukul) }}">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="tanggal">Tanggal Appointment:</label>
                                             <input  class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $book->tanggal) }}">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label>Status:</label>
                                             <select class="form-control" id="exampleFormControlSelect2" name="status">
                                                <option value="1" {{ $book->status == 1 ? 'selected' : '' }}>
                                                    Ringan</option>
                                                <option value="0" {{ $book->status == 0 ? 'selected' : '' }}>
                                                    Berat</option>
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-12">
                                             <label>Keluhan:</label>
                                             <textarea class="form-control" name="penyakit" rows="5" style="line-height: 22px;">{{ old('penyakit', $book->penyakit) }}</textarea>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                       <button type="reset" class="btn iq-bg-danger">cancel</button>
                                    </form>
                                 </div>
                              </div>
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

<!-- Mirrored from templates.iqonic.design/xray/html/profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:22:51 GMT -->
</html>
