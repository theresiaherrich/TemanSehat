<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/xray/html/profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:22:51 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Add Patient | Admin</title>
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
                  <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Add Patient</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form>
                                      <div class="form-group">
                                         <div class="add-img-user profile-img-edit">
                                            <img class="profile-pic img-fluid" src="{{ asset('xrayy/templates.iqonic.design/xray/html/images/user/11.png') }}" alt="profile-pic">
                                            <div class="p-image">
                                               {{-- <input type="file" name="foto" multiple="multiple"> --}}
                                            </div>
                                         </div>
                                         <div class="img-extension mt-3">
                                            <div class="d-inline-block align-items-center">
                                               <span>Only</span>
                                               <a href="javascript:void();">.jpg</a>
                                               <a href="javascript:void();">.png</a>
                                               <a href="javascript:void();">.jpeg</a>
                                               <span>allowed</span>
                                               <div class="form-group col-sm-6">
                                                <label for="foto">Foto</label>
                                                <input type="file" id="foto" name="foto" placeholder="foto">
                                             </div>
                                            </div>
                                         </div>
                                      </div>
                                   </form>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-9">
                            <div class="iq-card">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Patient Information</h4>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <div class="new-user-info">
                                    <form action="{{ route('pasien.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label for="nama">Nama :</label>
                                             <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="kelas">Kelas :</label>
                                             <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan Kelas">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="telp">No Telp :</label>
                                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No Telp">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Jenis Kelamin:</label>
                                                <select class="form-control" id="exampleFormControlSelect2" name="jeniskelamin">
                                                    <option selected>Jenis Kelamin</option>
                                                    <option >Laki-Laki</option>
                                                    <option >Perempuan</option>
                                                </select>
                                            </div>
                                          <div class="form-group col-sm-6">
                                             <label for="tanggal">Ruangan:</label>
                                             <input type="text"  class="form-control" id="ruangan" name="ruangan" placeholder="Masukan Ruanganmu">
                                          </div>
                                          <div class="form-group col-sm-6">
                                              <div class="form-group col-sm-6">
                                                  <label>Status:</label>
                                                  <br><input type="radio" name="status" value="ringan" required="" /> Ringan
                                                  <br><input type="radio" name="status" value="darurat" required="" /> Darurat
                                                </div>
                                                <div class="form-group col-sm-12">
                                                   <label>Keluhan:</label>
                                                   <textarea class="form-control" id="penyakit" name="penyakit" rows="5" style="line-height: 22px;"></textarea>
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
