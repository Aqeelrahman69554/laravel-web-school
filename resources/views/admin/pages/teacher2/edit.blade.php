@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Testimoni</h3>
    </div>
    <form action="{{ route('admin.teacher2.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 border-right">
                    <div class="form-group">
                        <label>Nama Pengirim</label>
                        <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Jabatan / Status Alumni</label>
                        <input type="text" name="status" class="form-control" value="{{ $item->status }}" required>
                    </div>
                    <div class="form-group">
                        <label>Label Testimoni (Kategori)</label>
                        <input type="text" name="title" class="form-control" value="{{ $item->title }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Isi Testimoni (Comment)</label>
                        <textarea name="coment" class="form-control" rows="5" required>{{ $item->coment }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Profil</label><br>
                        <input type="file" name="image" class="mb-2">
                        <br>
                        <small class="text-muted">Foto saat ini:</small><br>
                        @php
                            $url = file_exists(public_path('images/'.$item->image)) ? asset('images/'.$item->image) : asset('images/teacher2/'.$item->image);
                        @endphp
                        <img src="{{ $url }}" width="100" class="img-thumbnail mt-1">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('admin.teacher2.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection