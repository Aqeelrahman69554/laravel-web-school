@extends('visitor.layouts.main')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5" id="about1">
        <div class="">
            <div class="row align-items-center">
                <div class="col-lg-5 pl-5">
                    <img class="img-fluid rounded pb-5" style="width: 500px; height:350px;" src="{{ asset('images/about/' . $about->image_1) }}" --}}
                                alt="" />
                    <img class="img-fluid rounded mb-5 mb-lg-0" style="width: 500px; height:350px;"
                        src="{{ asset('images/about/' . $about3->image) }}" alt="" />
                </div>
                <div class="col-lg-7 pr-5" style="text-align: justify">
                    <p class="section-title pr-5">
                        <span class="pr-2">Mengenal Profil Kami</span>
                    </p>
                    <h1 class="mb-4">{{ $about3->title_1 }}</h1>
                    <p>
                        {{ $about3->desc_title_1 }}
                    </p>

                    <h1 class="mb-4">{{ $about3->title_2 }}</h1>
                    <p>
                        {{ $about3->desc_title_2 }}
                    </p>
                    {{-- < class="row pt-2 pb-4">
                        {{-- < class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="{{ asset('images/about/' . $about->image_1) }}" --}}
                                {{-- alt="" /> --}}
                        
                        {{-- <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                @foreach ($about->list as $item)
                                    <li class="py-2 border-top border-bottom">
                                        <i class="fa fa-check text-primary mr-3"></i>{{ $item }}
                                    </li>
                                @endforeach


                            </ul>
                        </div> --}}
                    
                    <a href="{{ route('visitor.home') }}" class="btn btn-primary mt-2 py-2 px-4">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    {{-- @include('visitor.pages.about2') --}}
@endsection
