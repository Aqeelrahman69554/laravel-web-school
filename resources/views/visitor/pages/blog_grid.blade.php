<!-- Blog Start -->
<div class="container-fluid pt-5" id="berita">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Seputar Kampus</span>
            </p>
            <h1 class="mb-4">{{ $bloggrid->title_1 }}</h1>
        </div>
        <div class="row pb-3">
            @foreach ($bloggrids as $item)
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ asset('images/bloggrid/' . $item->image) }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">{{ $item->subtitle }}/h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i>
                                    Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i>
                                    Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i>
                                    15</small>
                            </div>
                            <p>
                                {{ $item->desc_subtitle }}
                            </p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Blog End -->
