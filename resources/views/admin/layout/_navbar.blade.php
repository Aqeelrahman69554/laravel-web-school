<nav class="main-header navbar navbar-expand navbar-white navbar-light">
{{-- <marquee><h1>holaaa</h1></marquee> --}}

    <!-- LEFT -->
    <ul class="navbar-nav">
        <!-- Toggle Sidebar -->
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- RIGHT -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">3</span>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Notifications</span>

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 3 New Messages
                </a>

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All</a>
            </div>
        </li>

        <!-- Fullscreen -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>


        <!-- Profile Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    width="30" height="30" style="object-fit: cover;">
                <span class="ml-2">{{ Auth::user()->name ?? 'Admin' }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <span class="dropdown-item text-center font-weight-bold">
                    {{ Auth::user()->email ?? '-' }}
                </span>

                <div class="dropdown-divider"></div>


                <div class="dropdown-divider"></div>

                <!-- Logout -->
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                </form>
            </div>
        </li>

    </ul>
</nav>
