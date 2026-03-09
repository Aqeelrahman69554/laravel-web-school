@extends('admin.layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Blog Detail</h3>
        </div>
        <form action="{{ route('admin.blog_detail.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title 1</label>
                            <input type="text" name="title_1" class="form-control" value="{{ $item->title_1 }}">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi 1</label>
                            <textarea name="desc_title_1" class="form-control" rows="4">{{ $item->desc_title_1 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image 1</label>
                            <input type="file" name="image_1" class="form-control-file">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title 2</label>
                            <input type="text" name="title_2" class="form-control" value="{{ $item->title_2 }}">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi 2</label>
                            <textarea name="desc_title_2" class="form-control" rows="4">{{ $item->desc_title_2 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image 2</label>
                            <input type="file" name="image_2" class="form-control-file">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update Data</button>
                <a href="{{ route('admin.blog_detail.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
