@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Daftar Berita (Blog Grid)</b></h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.blog_grid.create') }}" class="btn btn-primary btn-sm">Tulis Berita Baru</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th width="50">No</th>
                                    <th width="150">Banner</th>
                                    <th>Kategori & Judul</th>
                                    <th>Deskripsi</th>
                                    <th width="130">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $item)
                                    <tr>
                                        <td class="text-center">{{ $i + 1 }}</td>
                                        <td class="text-center">
                                            @php
                                                $url = file_exists(public_path('images/blogrid/' . $item->image))
                                                    ? asset('images/bloggrid/' . $item->image)
                                                    : asset('storage/' . $item->image);
                                            @endphp
                                            <img src="{{ $url }}" width="120" class="img-thumbnail shadow-sm">
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-outline-primary text-uppercase">{{ $item->title_1 }}</span><br>
                                            <strong class="d-block mt-1">{{ $item->subtitle }}</strong>
                                        </td>
                                        <td class="small text-justify">{{ Str::limit($item->desc_subtitle, 100) }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.blog_grid.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <form action="{{ route('admin.blog_grid.destroy', $item->id) }}" method="POST"
                                                style="display:inline;" onsubmit="return confirm('Hapus berita ini?')">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </button>
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
