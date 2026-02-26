<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                style="font-size: 40px; line-height: 40px">
                {{-- <i class="flaticon-043-teddy-bear"></i> --}}
                <img style="width:60px; height:60px; padding:5px;" src="{{ asset('uin.ico') }}" alt="" />
                <span class="text-white" style="font-size: 20px">{{ $footer->title }}</span>
            </a>
            <p>
                {{ $footer->desc_title }}
            </p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px" href="https://x.com/UINSK" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px" href="https://www.facebook.com/UINSK/" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px" href="https://www.linkedin.com/school/uin-sunan-kalijaga/"
                    target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px" href="https://www.instagram.com/uinsk/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Hubungi Kami</h3>
            <div class="d-flex">
                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Alamat Pusat</h5>
                    <p>123 Street, New York, USA</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-envelope text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-phone-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">No. Telepon</h5>
                    <p>+012 345 67890</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Tautan Langsung</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#home"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                <a class="text-white mb-2" href="#about1"><i class="fa fa-angle-right mr-2"></i>Tentang Kami</a>
                <a class="text-white mb-2" href="#class1"><i class="fa fa-angle-right mr-2"></i>Fakultas Kita</a>
                <a class="text-white mb-2" href="#pengajar"><i class="fa fa-angle-right mr-2"></i>Tenaga Pengajar</a>
                <a class="text-white mb-2" href="#berita"><i class="fa fa-angle-right mr-2"></i>Berita</a>
                <a class="text-white" href="{{ route('visitor.contact') }}"><i class="fa fa-angle-right mr-2"></i>Kontak
                    Kami</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Langganan Informasi</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" placeholder="Nama Lengkap"
                        required="required" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border-0 py-4" placeholder="Email" required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                        Kirim Sekarang
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2)">
        <p class="m-0 text-center text-white">
            &copy;
            <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by
            <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            <br />Distributed By:
            <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
        </p>
    </div>
</div>
<!-- Footer End -->
