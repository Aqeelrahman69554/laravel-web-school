@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Edit Data Fakultas</b></h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.class1.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>

                <form action="{{ route('admin.class1.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-7 border-right">
                                <h5 class="text-primary mb-3"><i class="fas fa-university"></i> Identitas Fakultas</h5>

                                <div class="form-group">
                                    <label>Nama Fakultas (Title 1)</label>
                                    <input type="text" name="title_1" class="form-control"
                                        value="{{ old('title_1', $item->title_1) }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Program/Fokus (Title 2)</label>
                                    <input type="text" name="title_2" class="form-control"
                                        value="{{ old('title_2', $item->title_2) }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi Singkat</label>
                                    <textarea name="desc_title_2" class="form-control" rows="6" required>{{ old('desc_title_2', $item->desc_title_2) }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <h5 class="text-success mb-3"><i class="fas fa-info-circle"></i> Detail & Media</h5>

                                <div class="form-group">
                                    <label>Foto Saat Ini / Preview</label><br>

                                    @php
                                        if ($item->image) {
                                            // Jika di database mengandung kata 'class/' (hasil upload baru)
                                            if (strpos($item->image, 'class/') !== false) {
                                                $imagePath = asset('storage/' . $item->image);
                                            }
                                            // Jika hanya nama file pendek (hasil seeder/lama)
                                            else {
                                                $imagePath = asset('images/class/' . $item->image);
                                            }
                                        } else {
                                            $imagePath = 'https://via.placeholder.com/200x250?text=No+Image';
                                        }
                                    @endphp

                                    <div class="mb-3">
                                        <img src="{{ $imagePath }}" id="preview"
                                            class="img-fluid border rounded shadow-sm"
                                            style="max-height: 250px; width: auto; display: block;">
                                    </div>

                                    <input type="file" name="image" class="form-control-file"
                                        onchange="previewImage(this)">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Sasaran (Age)</label>
                                            <input type="text" name="age" class="form-control"
                                                value="{{ old('age', $item->age) }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Kapasitas (Seats)</label>
                                            <input type="text" name="seats" class="form-control"
                                                value="{{ old('seats', $item->seats) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Waktu Kuliah</label>
                                            <input type="text" name="time" class="form-control"
                                                value="{{ old('time', $item->time) }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Biaya (Fee/UKT)</label>
                                            <input type="text" name="fee" class="form-control"
                                                value="{{ old('fee', $item->fee) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
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
