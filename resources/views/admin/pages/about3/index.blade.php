@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>About Ketiga (Sejarah & Komitmen)</b></h3>

                    <div class="card-tools">
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
                            <thead style="text-align: center;">
                                <tr>
                                    <th width="50">No</th>
                                    <th>Banner Image</th>
                                    <th>Konten Bagian 1 (Sejarah)</th>
                                    <th>Konten Bagian 2 (Komitmen)</th>
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
                                                                : asset('images/about/' . $item->image);
                                                @endphp
                                                <img src="{{ $imagePath }}" width="700" class="img-thumbnail">
                                            @else
                                                <span class="badge badge-secondary">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $item->title_1 }}</strong>
                                            <p class="text-muted mt-2" style="text-align: justify; font-size: 0.9rem;">
                                                {{ $item->desc_title_1 }}
                                            </p>
                                        </td>
                                        <td>
                                            <strong>{{ $item->title_2 }}</strong>
                                            <p class="text-muted mt-2" style="text-align: justify; font-size: 0.9rem;">
                                                {{ $item->desc_title_2 }}
                                            </p>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.about3.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm" style="width: 140px; text">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach

                                @if($data->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data belum tersedia.</td>
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
