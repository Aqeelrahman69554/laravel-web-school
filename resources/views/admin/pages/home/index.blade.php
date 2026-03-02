@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Home Data</h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.home.create') }}" class="btn btn-primary btn-sm">
                            Tambah Data
                        </a>
                    </div>
                </div>

                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tagline</th>
                                <th>Title</th>
                                <th>Desc</th>
                                <th>Image</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->tagline }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->desc_title }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->image) }}" width="80">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.home.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>

                                        <form action="{{ route('admin.home.destroy', $item->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
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
@endsection
