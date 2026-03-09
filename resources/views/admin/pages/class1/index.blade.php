@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Data Fakultas (Class 1)</b></h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.class1.create') }}" class="btn btn-primary btn-sm">
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
                                    <th>Banner Fakultas</th>
                                    <th>Informasi Utama</th>
                                    <th>Detail Pendaftaran</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>
                                            @if ($item->image)
                                                {{-- Cek apakah file dari seeder (public/images) atau upload (storage) --}}
                                                @php
                                                    $imagePath = file_exists(public_path('images/' . $item->image)) 
                                                                ? asset('images/' . $item->image) 
                                                                : asset('storage/' . $item->image);
                                                @endphp
                                                <img src="{{ $imagePath }}" width="120" class="img-thumbnail">
                                            @else
                                                <span class="badge badge-secondary">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $item->title_1 }}</strong>
                                            <p class="text-primary mb-1" style="font-size: 0.9rem;">{{ $item->title_2 }}</p>
                                            <p class="text-muted" style="text-align: justify; font-size: 0.85rem;">
                                                {{ $item->desc_title_2 }}
                                            </p>
                                        </td>
                                        <td>
                                            <div style="font-size: 0.9rem;">
                                                <b>Sasaran:</b> {{ $item->age }} <br>
                                                <b>Kapasitas:</b> {{ $item->seats }} <br>
                                                <b>Waktu:</b> {{ $item->time }} <br>
                                                <b>Biaya:</b> <span class="badge badge-success">{{ $item->fee }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.class1.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{ route('admin.class1.destroy', $item->id) }}" method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Yakin ingin menghapus data fakultas ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                
                                @if($data->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data fakultas belum tersedia.</td>
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