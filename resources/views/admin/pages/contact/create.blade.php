@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header"><h3>Tambah Kontak</h3></div>
    <form action="{{ route('admin.contact.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="desc_title" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="address" class="form-control" rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Jam Buka</label>
                        <input type="text" name="open" class="form-control" placeholder="Senin - Jumat: 08:00 - 16:00">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection