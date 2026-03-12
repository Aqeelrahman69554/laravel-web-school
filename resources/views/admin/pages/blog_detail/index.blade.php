@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Data Blog Detail</b></h3>
                </div>
                <div class="card-body">

                    {{-- ✅ Notifikasi sukses (muncul otomatis kalau ada session 'success') --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th>Gambar 1</th>
                                    <th>Title 1</th>
                                    <th>Deskripsi 1</th>
                                    <th>Gambar 2</th>
                                    <th>Title 2</th>
                                    <th>Deskripsi 2</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $item)
                                    <tr>
                                        {{-- Nomor urut --}}
                                        <td>{{ $i + 1 }}</td>

                                        {{-- Gambar 1 --}}
                                        <td>
                                            @php
                                                $url1 = file_exists(public_path('images/' . $item->image_1))
                                                    ? asset('images/' . $item->image_1)
                                                    : asset('images/blog_detail/' . $item->image_1);
                                            @endphp
                                            <img src="{{ $url1 }}" width="80" height="60"
                                                class="img-thumbnail" style="object-fit: cover;"
                                                onerror="this.src='{{ asset('images/no-image.png') }}'">
                                        </td>

                                        {{-- Title 1 --}}
                                        <td><strong>{{ $item->title_1 }}</strong></td>

                                        {{-- Deskripsi 1 (dibatasi 80 karakter supaya tabel tidak terlalu lebar) --}}
                                        <td>{{ Str::limit($item->desc_title_1, 80) }}</td>

                                        {{-- Gambar 2 --}}
                                        <td>
                                            @php
                                                $url2 = file_exists(public_path('images/' . $item->image_2))
                                                    ? asset('images/' . $item->image_2)
                                                    : asset('images/blog_detail/' . $item->image_2);
                                            @endphp
                                            <img src="{{ $url2 }}" width="80" height="60"
                                                class="img-thumbnail" style="object-fit: cover;"
                                                onerror="this.src='{{ asset('images/no-image.png') }}'">
                                        </td>

                                        {{-- Title 2 --}}
                                        <td><strong>{{ $item->title_2 }}</strong></td>

                                        {{-- Deskripsi 2 --}}
                                        <td>{{ Str::limit($item->desc_title_2, 80) }}</td>

                                        {{-- Tombol Aksi --}}
                                        <td>
                                            <a href="{{ route('admin.blog_detail.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{ route('admin.blog_detail.destroy', $item->id) }}"
                                                method="POST" style="display:inline;"
                                                onsubmit="return confirm('Hapus data blog detail ini?')">
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

    {{-- ✅ Alert otomatis hilang setelah 3 detik --}}
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
@endsection
