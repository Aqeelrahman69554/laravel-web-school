<!-- Class Start -->
<div class="container-fluid pt-5" id="class1">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Program Unggulan</span>
            </p>
            <h1 class="mb-4">{{$class1->title_1}}</h1>
        </div>
        <div class="row">
            @foreach ($classes as $item)

                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="{{ asset('images/class/' . $item->image) }}" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title" style="font-family: 'Times New Roman', Times, serif">{{ $item->title_2 }}</h4>
                            <p class="card-text">
                                {{ $item->desc_title_2 }}
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Masa Studi</strong>
                                </div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Kuota Pendaftar</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Waktu Kuliah</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Biaya Kuliah</strong>
                                </div>
                                <div class="col-6 py-1">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Daftar Sekarang</a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Class End -->
