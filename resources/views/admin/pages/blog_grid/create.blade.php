@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Tulis Berita Baru</b></h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.blog_grid.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>

                <form action="{{ route('admin.blog_grid.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_1">Kategori (Title 1)</label>
                                    <input type="text" name="title_1" class="form-control"
                                        placeholder="Contoh: BERITA, EVENT" value="{{ old('title_1') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subtitle">Judul (Subtitle)</label>
                                    <input type="text" name="subtitle" class="form-control"
                                        placeholder="Masukkan judul berita" value="{{ old('subtitle') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="desc_subtitle">Deskripsi Singkat</label>
                            <textarea name="desc_subtitle" class="form-control" rows="4" placeholder="Masukkan cuplikan berita..." required>{{ old('desc_subtitle') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Banner Berita</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image"
                                        accept="image/*" required>
                                    <label class="custom-file-label" for="image">Pilih gambar...</label>
                                </div>
                            </div>
                            <small class="text-muted">Format: JPG, PNG, JPEG. Maksimal 2MB.</small>
                        </div>

                        <div class="mt-2">
                            <img id="preview" src="#" alt="Preview" class="img-thumbnail shadow-sm"
                                style="display: none; width: 200px;">
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Berita
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Preview Gambar sebelum upload
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            readURL(this);
            // Update label nama file
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@endsection
