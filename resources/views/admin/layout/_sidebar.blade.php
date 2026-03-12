<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">

        <!-- User Info -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Home -->
                <li class="nav-item">
                    <a href="{{ route('admin.home.index') }}"
                        class="nav-link {{ Route::is('admin.home.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <!-- ABOUT (dropdown karena banyak tabel) -->
                <li class="nav-item {{ Request::is('admin/about*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/about*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Tentang
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.about.index') }}"
                                class="nav-link {{ Route::is('admin.about.*') ? 'active' : '' }}">
                                <i
                                    class="far {{ Route::is('admin.about.*') ? 'fa-dot-circle' : 'fa-circle' }} nav-icon"></i>
                                <p>About Utama</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.about2.index') }}"
                                class="nav-link {{ Route::is('admin.about2.*') ? 'active' : '' }}">
                                <i
                                    class="far {{ Route::is('admin.about2.*') ? 'fa-dot-circle' : 'fa-circle' }} nav-icon"></i>
                                <p>About Section 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.about3.index') }}"
                                class="nav-link {{ Route::is('admin.about3.*') ? 'active' : '' }}">
                                <i
                                    class="far {{ Route::is('admin.about3.*') ? 'fa-dot-circle' : 'fa-circle' }} nav-icon"></i>
                                <p>About Section 3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- FAKULTAS -->
                <li class="nav-item {{ Route::is('admin.class1.*') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.class1.index') }}" class="nav-link {{ Route::is('admin.class1.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Fakultas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.class1.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fakultas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.class2.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Informasi Tambahan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- TEACHER -->
                <li class="nav-item {{ Route::is('admin.teacher.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('admin.teacher.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Pengajar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.teacher.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.teacher2.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Testimoni</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- BLOG -->
                <li class="nav-item {{ Route::is('admin.blog.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('admin.blog.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.blog_grid.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Grid</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blog_detail.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Detail</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- GALLERY -->
                <li class="nav-item">
                    <a href="{{ route('admin.gallery.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Gallery</p>
                    </a>
                </li>

                <!-- CONTACT -->
                <li class="nav-item">
                    <a href="{{ route('admin.contact.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>Contact</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
