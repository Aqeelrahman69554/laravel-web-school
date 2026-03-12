@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title"><b>Data Gallery</b></h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($data as $i => $item)
                                    <tr>

                                        <td>{{ $i + 1 }}</td>

                                        <td>
                                            <img src="{{ asset('images/gallery/' . $item->image) }}" width="80"
                                                height="60" class="img-thumbnail" style="object-fit:cover;">
                                        </td>

                                        <td><b>{{ $item->title }}</b></td>

                                        <td>{{ $item->category }}</td>

                                        <td>

                                            <a href="{{ route('admin.gallery.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST"
                                                style="display:inline;" onsubmit="return confirm('Hapus data ini?')">

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
    </div>

    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
@endsection
