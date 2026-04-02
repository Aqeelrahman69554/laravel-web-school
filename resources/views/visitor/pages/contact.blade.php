<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Layanan Informasi</span>
            </p>
            <h1 class="mb-4">{{ $contact->title }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5">
                @if (session('success'))
                    <div id="success-alert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf

                    <div class="control-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                    </div>

                    <div class="control-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                    </div>

                    <div class="control-group mb-3">
                        <input type="text" name="subject" class="form-control" placeholder="Subjek" required>
                    </div>

                    <div class="control-group mb-3">
                        <textarea name="message" class="form-control" rows="6" placeholder="Pesan Anda" required></textarea>
                    </div>

                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            let alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s";
                alert.style.opacity = "0";
                setTimeout(() => alert.remove(), 500);
            }
        }, 3000);
    });
</script>
<!-- Contact End -->
