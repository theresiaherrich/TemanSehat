<div class="sidebar sidebar-menu" id="side_menu">
    <div class="sidebar-inner slimscroll">
        <a id="close_menu" href="#"><i class="fas fa-times"></i></a>
        <ul class="mobile-menu-wrapper" style="display: block;">
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="/">Home</a>
                </div>
            </li>
            <li class="active">
                <div class="mobile-menu-item clearfix">
                    <a href="/about"> Tentang Kami</a>
                </div>
            </li>
            <li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="/staff">Staff</a>
                </div>
            </li>
            <li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="/contact">Kontak Kami</a>
                </div>
            </li>
            @if (Route::has('login'))
            @auth
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="/appointment">Appointment</a>
                </div>
            </li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="{{ route('logout') }}">Logout</a>
                </div>
            </li>
            @else
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </li>
            @endauth
            @endif
        </ul>
    </div>
</div>

