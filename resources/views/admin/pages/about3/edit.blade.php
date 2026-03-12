@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Edit About Ketiga (Sejarah & Komitmen)</b></h3>
                <div class="card-tools">
                    <a href="{{ route('admin.about3.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
            </div>

            <form action="{{ route('admin.about3.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

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

                    <div class="form-group">
                        <label>Banner Image (Landscape)</label>
                        <div class="mb-3">
                            @if ($about->image)
                                @php
                                    $imagePath = file_exists(public_path('images/' . $about->image)) 
                                                ? asset('images/' . $about->image) 
                                                : asset('images/about/' . $about->image);
                                @endphp
                                <img src="{{ $imagePath }}" id="preview" class="img-fluid border rounded" style="max-height: 250px;">
                            @endif
                        </div>
                        <input type="file" name="image" class="form-control-file" onchange="previewImage(this)">
                        <small class="text-muted">*Pilih file jika ingin mengganti gambar banner</small>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 border-right">
                            <h5 class="text-primary mb-3"><i class="fas fa-history"></i> Bagian 1: Sejarah & Identitas</h5>
                            <div class="form-group">
                                <label>Judul 1</label>
                                <input type="text" name="title_1" class="form-control" value="{{ old('title_1', $about->title_1) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Sejarah</label>
                                <textarea name="desc_title_1" class="form-control" rows="12" required>{{ old('desc_title_1', $about->desc_title_1) }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="text-success mb-3"><i class="fas fa-award"></i> Bagian 2: Komitmen & Inklusivitas</h5>
                            <div class="form-group">
                                <label>Judul 2</label>
                                <input type="text" name="title_2" class="form-control" value="{{ old('title_2', $about->title_2) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Komitmen</label>
                                <textarea name="desc_title_2" class="form-control" rows="12" required>{{ old('desc_title_2', $about->desc_title_2) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk preview gambar sebelum diupload
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection