@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>About Utama</b></h3>

                    <div class="card-tools">
                    </div>
                </div>

                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="callout callout-info border-left-3">
                        <h5><i class="fas fa-info-circle mr-2 text-info"></i> Info Pengeditan</h5>
                        <p class="mb-0 text-muted">Data <b>List Item</b> bersifat relasional. Untuk menambah atau menghapus
                            butir list, harap gunakan tombol <b><i class="fas fa-edit"></i> Edit</b>.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr style="text-align: center">
                                    <th width="50">No</th>
                                    <th>Gambar 1</th>
                                    <th>Gambar 2</th>
                                    <th>Title</th>
                                    <th>Deskripsi</th>
                                    <th>List Item</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>
                                            @if ($item->image_1)
                                                <img src="{{ asset('images/about/' . $item->image_1) }}" width="80"
                                                    class="img-thumbnail">
                                            @else
                                                <span class="badge badge-secondary">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->image_2)
                                                <img src="{{ asset('images/about/' . $item->image_2) }}" width="80"
                                                    class="img-thumbnail">
                                            @else
                                                <span class="badge badge-secondary">No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <div
                                                style="max-height: 200px; overflow-y: auto; width: 250px; padding-right: 5px; text-align: justify">
                                                {{ $item->desc_title }}
                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->list)
                                                <ul class="pl-3">
                                                    @foreach ($item->list as $list_item)
                                                        <li>{{ $list_item }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.about.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm" style="width: 150px">Edit</a>
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
