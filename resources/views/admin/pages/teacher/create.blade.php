<!-- Very little is needed to make a happy life. - Marcus Aurelius -->
@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Tambah Tenaga Pendidik</b></h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.teacher.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>

                <form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        {{-- Tampilkan error validasi jika ada --}}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Nama --}}
                        <div class="form-group">
                            <label for="name">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                placeholder="Contoh: Dr. Budi Santoso, M.Kom">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Status / Jabatan --}}
                        <div class="form-group">
                            <label for="status">Jabatan / Status <span class="text-danger">*</span></label>
                            <input type="text" name="status" id="status"
                                class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}"
                                placeholder="Contoh: Dosen Tetap, Dosen Luar Biasa">
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Foto --}}
                        <div class="form-group">
                            <label for="image">Foto <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" id="image"
                                        class="custom-file-input @error('image') is-invalid @enderror" accept="image/*"
                                        onchange="previewImage(this)">
                                    <label class="custom-file-label" for="image">Pilih foto...</label>
                                </div>
                            </div>
                            @error('image')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                            {{-- Preview foto sebelum upload --}}
                            <div class="mt-2" id="preview-container" style="display:none;">
                                <img id="preview-image" src="#" width="100" class="img-circle border shadow-sm">
                                <small class="text-muted d-block mt-1">Preview foto</small>
                            </div>
                        </div>

                        {{-- Facebook --}}
                        <div class="form-group">
                            <label for="facebook">Link Facebook</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-facebook text-primary"></i></span>
                                </div>
                                <input type="text" name="facebook" id="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ old('facebook', '#') }}"
                                    placeholder="https://facebook.com/username (isi # jika tidak ada)">
                            </div>
                            @error('facebook')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Twitter --}}
                        <div class="form-group">
                            <label for="twiter">Link Twitter / X</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-twitter text-info"></i></span>
                                </div>
                                <input type="text" name="twiter" id="twiter"
                                    class="form-control @error('twiter') is-invalid @enderror"
                                    value="{{ old('twiter', '#') }}"
                                    placeholder="https://twitter.com/username (isi # jika tidak ada)">
                            </div>
                            @error('twiter')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- LinkedIn --}}
                        <div class="form-group">
                            <label for="linkedin">Link LinkedIn</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-linkedin text-secondary"></i></span>
                                </div>
                                <input type="text" name="linkedin" id="linkedin"
                                    class="form-control @error('linkedin') is-invalid @enderror"
                                    value="{{ old('linkedin', '#') }}"
                                    placeholder="https://linkedin.com/in/username (isi # jika tidak ada)">
                            </div>
                            @error('linkedin')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>{{-- end card-body --}}

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ route('admin.teacher.index') }}" class="btn btn-default">Batal</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        // Preview foto sebelum diupload
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-image').src = e.target.result;
                    document.getElementById('preview-container').style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);

                // Tampilkan nama file di label
                var fileName = input.files[0].name;
                input.nextElementSibling.textContent = fileName;
            }
        }
    </script>
@endsection
