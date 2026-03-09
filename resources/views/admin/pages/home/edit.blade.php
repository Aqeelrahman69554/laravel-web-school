@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Home Data</h3>

                <div class="card-tools">
                    <a href="{{ route('admin.home.index') }}" class="btn btn-secondary btn-sm">
                        Kembali
                    </a>
                </div>
            </div>

            <div class="card-body">
                {{-- Menampilkan error validasi jika ada --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.home.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="tagline">Tagline</label>
                        <input type="text" name="tagline" class="form-control" id="tagline" value="{{ $data->tagline }}" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="desc_title">Description</label>
                        <textarea name="desc_title" class="form-control" id="desc_title" rows="4" required>{{ $data->desc_title }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="mb-2">
                            <img src="{{ asset('images/home/' . $data->image) }}" width="150" class="img-thumbnail shadow-sm">
                        </div>
                        <input type="file" name="image" class="form-control-file" id="image">
                        <small class="text-muted text-italic">*Biarkan kosong jika tidak ingin mengubah gambar</small>
                    </div>

                    <hr>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Data
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection
