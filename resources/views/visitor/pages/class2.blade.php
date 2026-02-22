<!-- Registration Start -->
<div style="text-align: justify;">
    <div class="container">
        <div class="row align-items-center">
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mb-5 mb-lg-0">
                            <p class="section-title pr-5">
                                <span class="pr-2">Registrasi Jalur Masuk</span>
                            </p>
                            <h1 class="mb-4">{{ $class2->title_1 }}</h1>

                            <p class="text-justify" style="text-align: justify;">
                                {{ $class2->desc_title_1 }}
                            </p>

                            <ul class="list-inline m-0">
                                @foreach ($class2->list as $item)
                                    <li class="py-2 border-top border-bottom">
                                        <i class="fa fa-check text-success mr-3"></i>{{ $item }}
                                    </li>
                                @endforeach
                            </ul>

                            <a href="" class="btn btn-primary mt-4 py-2 px-4">Klik Untuk Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-center p-4">
                        <h1 class="text-white m-0">Book A Seat</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px">
                                    <option selected>
                                        Select A Class
                                    </option>
                                    <option value="1">Class 1</option>
                                    <option value="2">Class 1</option>
                                    <option value="3">Class 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-secondary btn-block border-0 py-3" type="submit">
                                    Book Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Registration End -->
