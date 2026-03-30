@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Tambah Data Fakultas (Class 1)</b></h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.class1.index') }}" class="btn btn-secondary btn-sm">
                            Kembali
                        </a>
                    </div>
                </div>

                <form action="{{ route('admin.class1.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        {{-- Validasi Error --}}
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_1">Nama Fakultas (Title 1)</label>
                                    <input type="text" name="title_1" class="form-control" id="title_1"
                                        value="{{ old('title_1') }}" placeholder="Contoh: Fakultas Ilmu Komputer" required>
                                </div>

                                <div class="form-group">
                                    <label for="title_2">Sub Judul (Title 2)</label>
                                    <input type="text" name="title_2" class="form-control" id="title_2"
                                        value="{{ old('title_2') }}" placeholder="Contoh: Program Sarjana" required>
                                </div>

                                <div class="form-group">
                                    <label for="desc_title_2">Deskripsi</label>
                                    <textarea name="desc_title_2" class="form-control" id="desc_title_2" rows="4"
                                        placeholder="Masukkan deskripsi fakultas...">{{ old('desc_title_2') }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Foto <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image"
                                                class="custom-file-input @error('image') is-invalid @enderror"
                                                accept="image/*" onchange="previewImage(this)">
                                            <label class="custom-file-label" for="image">Pilih Foto...</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                    {{-- Preview foto sebelum upload --}}
                                    <div class="mt-2" id="preview-container" style="display:none;">
                                        <img id="preview-image" src="#" width="100"
                                            class="img-circle border shadow-sm">
                                        <small class="text-muted d-block mt-1">Preview foto</small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="age">Sasaran (Age)</label>
                                    <input type="text" name="age" class="form-control" id="age"
                                        value="{{ old('age') }}" placeholder="Contoh: 18-22 Tahun">
                                </div>

                                <div class="form-group">
                                    <label for="seats">Kapasitas (Seats)</label>
                                    <input type="text" name="seats" class="form-control" id="seats"
                                        value="{{ old('seats') }}" placeholder="Contoh: 100 Kursi">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="time">Waktu</label>
                                            <input type="text" name="time" class="form-control" id="time"
                                                value="{{ old('time') }}" placeholder="Contoh: 08:00 - 16:00">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="fee">Biaya (Fee)</label>
                                            <input type="text" name="fee" class="form-control" id="fee"
                                                value="{{ old('fee') }}" placeholder="Contoh: Rp 5.000.000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
