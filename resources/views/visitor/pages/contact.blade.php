<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Layanan Informasi</span>
            </p>
            <h1 class="mb-4">Sampaikan Pertanyaan Anda</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Alamat Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subjek"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Pesan Anda" required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <p>
                    {{ $contact->desc_title }}
                </p>
                <div class="d-flex">
                    <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                        style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>Alamat</h5>
                        <p>{{ $contact->address }}</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                        style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                        style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>No. Telepon</h5>
                        <p>{{ $contact->phone }}</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                        style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>Jam Operasional Layanan</h5>
                        
                        <p class="m-0">{{ $contact->open }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
