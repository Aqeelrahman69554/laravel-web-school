{{-- @extends('visitor.layouts.main') --}}

{{-- @section('content') --}}
    <!-- About Start -->
    <div class="container-fluid py-5" id="about1">
        <div class="">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" style="width: 500px; height:450px;"
                        {{-- src="{{ asset('images/about/' . $about3->image) }}" alt="" /> --}}
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5">
                        <span class="pr-2">Mengenal Profil Kami</span>
                    </p>
                    <h1 class="mb-4">{{ $about3->title }}</h1>
                    <p>
                        {{ $about3->desc_title_1 }}
                    </p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            {{-- <img class="img-fluid rounded" src="{{ asset('images/about/' . $about->image_1) }}" --}}
                                alt="" />
                        </div>
                        {{-- <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                @foreach ($about->list as $item)
                                    <li class="py-2 border-top border-bottom">
                                        <i class="fa fa-check text-primary mr-3"></i>{{ $item }}
                                    </li>
                                @endforeach


                            </ul>
                        </div> --}}
                    </div>
                    <a href="" class="btn btn-primary mt-2 py-2 px-4">Pelajari Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    {{-- @include('visitor.pages.about2') --}}
{{-- @endsection --}}
