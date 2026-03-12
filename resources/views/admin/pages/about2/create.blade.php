@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="callout callout-info shadow-sm">
                <h5><i class="fas fa-info-circle text-info"></i> Petunjuk Pengisian Icon</h5>
                <p>Gunakan class dari <b>Font Awesome 5</b>. Contoh: <code>fas fa-heart</code> atau <code>fas
                        fa-user-shield</code>.</p>
                <small class="text-muted">Cari icon lainnya di: <a href="https://fontawesome.com/v5/search?m=free"
                        target="_blank">FontAwesome 5 Free</a></small>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Fitur (About Sekunder)</h3>
                </div>

                <form action="{{ route('admin.about2.store') }}" method="POST">
                    @csrf
                    <div class="card-body">

                        {{-- Input Icon --}}
                        <div class="form-group">
                            <label for="icon">Icon Class (Font Awesome)</label>
                            <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror"
                                id="icon" placeholder="Contoh: fas fa-fire" value="{{ old('icon') }}" required>
                            @error('icon')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Input Title --}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" placeholder="Masukkan judul fitur" value="{{ old('title') }}" required>
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Input Deskripsi --}}
                        <div class="form-group">
                            <label for="desc_title">Deskripsi</label>
                            <textarea name="desc_title" class="form-control @error('desc_title') is-invalid @enderror" id="desc_title"
                                rows="4" placeholder="Masukkan deskripsi singkat" required>{{ old('desc_title') }}</textarea>
                            @error('desc_title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('admin.about2.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary ml-2">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
