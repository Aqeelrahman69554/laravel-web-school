<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Gallery Kami</span>
            </p>
            <h1 class="mb-4">Gallery</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active" data-filter="*">
                        All
                    </li>
                    <li class="btn btn-outline-primary m-1" data-filter=".pergedungan">
                        Pergedungan
                    </li>
                    <li class="btn btn-outline-primary m-1" data-filter=".acara">
                        Acara
                    </li>
                    <li class="btn btn-outline-primary m-1" data-filter=".prestasi">
                        Prestasi
                    </li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach ($gallery as $item)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{ $item->category }}">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('images/gallery/' . $item->image) }}"
                            alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('images/gallery/' . $item->image) }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
</div>
<!-- Gallery End -->

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
