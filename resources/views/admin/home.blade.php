<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/Healthy/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:22:12 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Healthy</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('xrayy/templates.iqonic.design/xray/html/images/favicon.icon') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('xrayy/templates.iqonic.design/xray/html/css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('xrayy/templates.iqonic.design/xray/html/css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('xrayy/templates.iqonic.design/xray/html/css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('xrayy/templates.iqonic.design/xray/html/css/responsive.css') }}">
       <!-- Full calendar -->
      <link href='{{asset('xrayy/templates.iqonic.design/xray/html/fullcalendar/core/main.css') }}' rel='stylesheet' />
      <link href='{{asset('xrayy/templates.iqonic.design/xray/html/fullcalendar/daygrid/main.css') }}' rel='stylesheet' />
      <link href='{{asset('xrayy/templates.iqonic.design/xray/html/fullcalendar/timegrid/main.css') }}' rel='stylesheet' />
      <link href='{{asset('xrayy/templates.iqonic.design/xray/html/fullcalendar/list/main.css') }}' rel='stylesheet' />

      <link rel="stylesheet" href="{{asset('xrayy/templates.iqonic.design/xray/html/../../../cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css') }}">


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
                  <div class="col-lg-12">
                     <div class="row">
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-primary rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                    <div class="text-right">
                                       <h2 class="mb-0"><span class="counter">5600</span></h2>
                                       <h5 class="">Doctors</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-warning rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                    <div class="text-right">
                                       <h2 class="mb-0"><span class="counter">3450</span></h2>
                                       <h5 class="">Nurses</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-danger rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                    <div class="text-right">
                                       <h2 class="mb-0"><span class="counter">3500</span></h2>
                                       <h5 class="">Patients</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-info rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-info"><i class="ri-hospital-line"></i></div>
                                    <div class="text-right">
                                       <h2 class="mb-0"><span class="counter">4500</span></h2>
                                       <h5 class="">Pharmacists</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                  <div class="row">
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                <h4 class="card-title">Nearest Treatment</h4>
                             </div>
                          </div>
                          <div class="iq-card-body smaill-calender-home">
                             <input type="text" class="flatpicker d-none">
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                          <div class="iq-card-body">
                             <h6>APPOINTMENTS</h6>
                             <h3><b>5075</b></h3>
                          </div>
                          <div id="wave-chart-7"></div>
                       </div>
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                          <div class="iq-card-body">
                             <h6>NEW PATIENTS</h6>
                             <h3><b>1200</b></h3>
                          </div>
                          <div id="wave-chart-8"></div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                <h4 class="card-title">Hospital Management</h4>
                             </div>
                          </div>
                          <div class="iq-card-body hospital-mgt">
                             <div class="progress mb-3" style="height: 30px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 20%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">OPD</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">80%</div>
                             </div>
                             <div class="progress mb-3" style="height: 30px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Treatment</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">70%</div>
                             </div>
                             <div class="progress mb-3" style="height: 30px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Laboratory Test</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">85%</div>
                             </div>
                             <div class="progress mb-3" style="height: 30px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">New Patient</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">70%</div>
                             </div>
                             <div class="progress mb-3" style="height: 30px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Doctors</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">95%</div>
                             </div>
                             <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Discharge</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">35%</div>
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
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/jquery.min.js') }}"></script>
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/popper.min.js') }}"></script>
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/bootstrap.min.js') }}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/jquery.appear.js') }}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/countdown.min.js') }}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/waypoints.min.js') }}"></script>
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/jquery.counterup.min.js') }}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/select2.min.js') }}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/owl.carousel.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/lottie.js') }}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/core.js') }}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/charts.js') }}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/animated.js') }}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/kelly.js') }}"></script>
      <!-- Flatpicker Js -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/flatpickr.js') }}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('xrayy/templates.iqonic.design/xray/html/js/custom.js') }}"></script>
   </body>

<!-- Mirrored from templates.iqonic.design/Healthy/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 01:22:15 GMT -->
</html>
