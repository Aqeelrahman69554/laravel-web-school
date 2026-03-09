@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Blog Detail List</b></h3>
                <div class="card-tools">
                    <a href="{{ route('admin.blog_detail.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Gambar 1</th>
                                <th>Judul 1</th>
                                <th>Gambar 2</th>
                                <th>Judul 2</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->image_1) }}" width="80" class="img-thumbnail">
                                    </td>
                                    <td>{{ $item->title_1 }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->image_2) }}" width="80" class="img-thumbnail">
                                    </td>
                                    <td>{{ $item->title_2 }}</td>
                                    <td>
                                        <a href="{{ route('admin.blog_detail.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.blog_detail.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection