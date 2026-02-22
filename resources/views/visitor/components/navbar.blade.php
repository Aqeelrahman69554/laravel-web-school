<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-primary" style="font-size: 30px">{{ $footer->title }}</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{ route('visitor.home') }}" class="nav-item nav-link active {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('visitor.about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('visitor.class1') }}" class="nav-item nav-link {{ request()->is('class1') ? 'active' : '' }}">Fakultas Kami</a>
                <a href="{{ route('visitor.teacher') }}" class="nav-item nav-link {{ request()->is('teacher') ? 'active' : '' }}">Tenaga Pengajar</a>
                <a href="gallery.html" class="nav-item nav-link">Foto</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Halaman</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="{{ route('visitor.contact') }}" class="nav-item nav-link">Kontak</a>
            </div>
            {{-- <a href="" class="btn btn-primary px-4">Join Class</a> --}}
        </div>
    </nav>
</div>
<!-- Navbar End -->
