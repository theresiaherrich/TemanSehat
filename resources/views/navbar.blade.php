<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2 float-left">
                    <div class="logo">
                        <a title="Teman Sehat" href="/"><img alt="Logo"
                                src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/logo.png') }}"
                                width="600" height="90"></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav class="navbar navbar-expand-md p-0">
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav main-nav float-right ml-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about" class="nav-link">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/staff" class="nav-link">Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">Kontak Kami</a>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                <li class="active nav-item">
                                    <a class="btn btn-primary appoint-btn nav-link" href="/appointment">Appointment</a>
                                </li>
                                <li class="dropdown nav-item">
                                    <a class="nav-link" data-toggle="dropdown" href="#"><i
                                        class="fas fa-cog"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @if (auth()->User()->role== 'admin')
                                            <a class="dropdown-item" href="/admin">Admin</a>
                                    @endif
                                        </div>

                                    </li>
                                @else
                                <li class="dropdown nav-item">
                                    <a class="nav-link" data-toggle="dropdown" href="#"><i
                                        class="fas fa-cog"></i></a>
                                        {{-- <a class="dropdown-toggle settings-icon nav-link" data-toggle="dropdown"><i class="fas fa-cog"></i></a> --}}
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="/login">Login</a>
                                            <a class="dropdown-item" href="/register">Register</a>
                                        </div>
                                        {{-- <li class="dropdown nav-item-active">
                                            <a class="nav-link" data-toggle="dropdown" href="#"><i class="fas fa-cog"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="login.html">Login</a>
                                                <a class="dropdown-item" href="register.html">Register</a>
                                            </div>
                                        </li> --}}
                                    </li>
                                    @endauth
                                    @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="mobile-header">
    <div class="panel-control-left">
        <a class="toggle-menu" href="#side_menu"><i class="fas fa-bars"></i></a>
    </div>
    <div class="page_title">
        <a href="/"><img src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/logo.png') }}"
                alt="Logo" class="img-fluid" width="60" height="60"></a>
    </div>
</header>

