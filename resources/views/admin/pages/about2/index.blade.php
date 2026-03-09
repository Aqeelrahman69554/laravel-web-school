@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>About Sekunder (Fitur)</b></h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.about2.create') }}" class="btn btn-primary btn-sm">
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

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th width="100">Icon Class</th>
                                    <th width="80">Preview Icon</th>
                                    <th>Title</th>
                                    <th>Deskripsi</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>
                                            <code>{{ $item->icon }}</code>
                                        </td>
                                        <td class="text-center">
                                            {{-- Menampilkan preview icon menggunakan class dari database --}}
                                            <i class="{{ $item->icon }}" style="font-size: 24px; color: #007bff;"></i>
                                        </td>
                                        <td><b>{{ $item->title }}</b></td>
                                        <td>
                                            <div style="max-height: 150px; overflow-y: auto; width: 300px; text-align: justify">
                                                {{ $item->desc_title }}
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.about2.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{ route('admin.about2.destroy', $item->id) }}" method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Yakin ingin menghapus data fitur ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                @if($data->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">Data kosong. Silakan jalankan seeder atau tambah data manual.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection