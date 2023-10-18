<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="/admin">
       <img src="{{asset('xrayy/templates.iqonic.design/xray/html/images/logo.png') }}" class="img-fluid" alt="">
       <span>Healthy</span>
       </a>
       <div class="iq-menu-bt-sidebar">
             <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                   <div class="main-circle"><i class="ri-more-fill"></i></div>
                   <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                </div>
             </div>
          </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
             <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
             <li>
                <a href="/admin" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Dashboard Admin</span></a>
             </li>
             <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
             <li>
                <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Staff</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="/datastaff"><i class="ri-file-list-fill"></i>All Staff</a></li>
                   <li><a href="{{ route('datastaff.create')}}"><i class="ri-user-add-fill"></i> Add Staff</a></li>
                </ul>
             </li>
             <li>
                <a href="#patient-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-users"></i><span>Patient</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="patient-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="/pasien"><i class="ri-file-list-fill"></i>All Patient</a></li>
                   <li><a href="add-patient.html"><i class="ri-user-add-fill"></i> Add Patient</a></li>
                   <li><a href="patient-edit.html"><i class="ri-file-edit-fill"></i> Edit Patient</a></li>
                </ul>
             </li>
             <li><a href="/booking" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Appointment</span></a></li>
          </ul>
       </nav>
       <div class="p-3"></div>
    </div>
 </div>

 <div id="content-page" class="content-page">
