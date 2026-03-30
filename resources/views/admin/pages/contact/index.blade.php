@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>Data Kontak</b></h3>
        <div class="card-tools">
            {{-- <a href="{{ route('admin.contact.create') }}" class="btn btn-primary btn-sm">Tambah Kontak</a> --}}
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Jam Operasional</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->open }}</td>
                    <td>
                        <a href="{{ route('admin.contact.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.contact.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
