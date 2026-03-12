@extends('admin.layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Dosen</h3>
        </div>
        <form action="{{ route('admin.teacher.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                        </div>
                        <div class="form-group">
                            <label>Jabatan/Status</label>
                            <input type="text" name="status" class="form-control" value="{{ $item->status }}">
                        </div>
                        <div class="form-group">
                            <label>Label Atas (Title 1)</label>
                            <input type="text" name="title_1" class="form-control" value="{{ $item->title_1 }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Link Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="{{ $item->facebook }}">
                        </div>
                        <div class="form-group">
                            <label>Link Twitter</label>
                            <input type="text" name="twiter" class="form-control" value="{{ $item->twiter }}">
                        </div>
                        <div class="form-group">
                            <label>Link Linkedin</label>
                            <input type="text" name="linkedin" class="form-control" value="{{ $item->linkedin }}">
                        </div>
                        <div class="form-group">
                            <label>Foto Saat Ini / Preview</label><br>

                            @php
                                if ($item->image) {
                                    // Jika di database mengandung kata 'teachers/' (hasil upload baru)
                                    if (strpos($item->image, 'teachers/') !== false) {
                                        $imagePath = asset('storage/' . $item->image);
                                    }
                                    // Jika hanya nama file pendek (hasil seeder/lama)
                                    else {
                                        $imagePath = asset('images/teacher/' . $item->image);
                                    }
                                } else {
                                    $imagePath = 'https://via.placeholder.com/200x250?text=No+Image';
                                }
                            @endphp

                            <div class="mb-3">
                                <img src="{{ $imagePath }}" id="preview" class="img-fluid border rounded shadow-sm"
                                    style="max-height: 250px; width: auto; display: block;">
                            </div>

                            <input type="file" name="image" class="form-control-file" onchange="previewImage(this)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('admin.teacher.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
@endsection
