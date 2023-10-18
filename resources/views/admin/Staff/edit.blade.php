<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/xray/html/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:22:44 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Add Staff | Admin</title>
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
            <!-- TOP Nav Bar -->
            @include('admin.header')
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Staff</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                            <form>
                              <div class="form-group">
                                 <div class="add-img-user profile-img-edit">
                                    <img class="profile-pic img-fluid avatar-100" src="{{ asset('storage/staff/'.$sat->foto) }}" alt="profile-pic">
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
                              <h4 class="card-title">Staff Information</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                            <form action="{{ route('datastaff.update', $sat ->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="nama">Name:</label>
                                       <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" value="{{ old('nama', $sat->nama) }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="divisi">Divisi:</label>
                                       <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi" value="{{ old('divisi', $sat->divisi) }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="ttl">TTL:</label>
                                       <input type="date" class="form-control" id="ttl" name="ttl" placeholder="TTL" value="{{ old('ttl', $sat->ttl) }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="telp">Telp
                                       <input type="number" class="form-control" id="telp" name="telp" placeholder="Telp" value="{{ old('telp', $sat->telp) }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="foto">Foto</label>
                                        <input type="file" id="foto" name="foto" placeholder="foto">
                                     </div>
                                    <div class="form-group col-sm-12">
                                       <label>Jenis Kelamin:</label>
                                       <br><input type="radio" name="jeniskelamin" id="jeniskelamin" value="cowo" <?php echo ($sat['jeniskelamin'] == "cowo")?"checked":""?>> LAKI-LAKI
                                       <br><input type="radio" name="jeniskelamin" id="jeniskelamin" value="cewe" <?php echo ($sat['jeniskelamin'] == "cewe")?"checked":""?>> PEREMPUAN
                                    </div>
                                 <button type="submit" class="btn btn-primary">Add New Staff</button>
                              </form>
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

<!-- Mirrored from templates.iqonic.design/xray/html/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:22:45 GMT -->
</html>
