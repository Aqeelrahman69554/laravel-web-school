@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

               

                <div class="card-body">

                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control" required>
                                <option value="">--Pilih Opsi--</option>
                                <option value="pergedungan">Pergedugan</option>
                                <option value="prestasi">Prestasi</option>
                                <option value="acara">Acara</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button class="btn btn-success">Simpan</button>

                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
