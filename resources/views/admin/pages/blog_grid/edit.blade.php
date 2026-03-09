@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Berita</h3>
    </div>
    <form action="{{ route('admin.blog_grid.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Judul Utama (Subtitle)</label>
                        <input type="text" name="subtitle" class="form-control" value="{{ $item->subtitle }}" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori (Title 1)</label>
                        <input type="text" name="title_1" class="form-control" value="{{ $item->title_1 }}" placeholder="Contoh: Riset, Prestasi...">
                    </div>
                    <div class="form-group">
                        <label>Isi Singkat (Description)</label>
                        <textarea name="desc_subtitle" class="form-control" rows="5">{{ $item->desc_subtitle }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gambar Banner</label>
                        <div class="mb-2">
                            @php
                                $url = file_exists(public_path('images/'.$item->image)) ? asset('images/'.$item->image) : asset('storage/'.$item->image);
                            @endphp
                            <img src="{{ $url }}" id="preview" class="img-fluid border rounded shadow-sm">
                        </div>
                        <input type="file" name="image" class="form-control-file" onchange="previewImage(this)">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('admin.blog_grid.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
        </div>
    </form>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) { $('#preview').attr('src', e.target.result); }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection