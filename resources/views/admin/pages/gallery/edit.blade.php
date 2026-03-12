@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title"><b>Edit Gallery</b></h3>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.gallery.update', $data->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $data->title }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control" id="">
                                <option value="pergedungan" {{ $data->category == 'pergedungan' ? 'selected' : '' }}>
                                    Pergedungan</option>
                                <option value="prestasi" {{ $data->category == 'prestasi' ? 'selected' : '' }}>prestasi
                                </option>
                                <option value="acara" {{ $data->category == 'acara' ? 'selected' : '' }}>acara</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>Image</label>

                            <br>

                            <img src="{{ asset('images/gallery/' . $data->image) }}" width="120" class="mb-2">

                            <input type="file" name="image" class="form-control">
                        </div>

                        <button class="btn btn-success">Update</button>

                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
