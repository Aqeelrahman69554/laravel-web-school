@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit About Utama</h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary btn-sm">
                            Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    {{-- Menampilkan error validasi jika ada --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.about.update', $about->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ $about->title }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc_title">Description</label>
                            <textarea name="desc_title" class="form-control" id="desc_title" rows="4" required>{{ $about->desc_title }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image_1">Gambar 1</label>
                                    <div class="mb-2">
                                        @if ($about->image_1)
                                            <img src="{{ asset('storage/' . $about->image_1) }}" width="150"
                                                class="img-thumbnail shadow-sm">
                                        @else
                                            <p class="text-muted">Tidak ada gambar</p>
                                        @endif
                                    </div>
                                    <input type="file" name="image_1" class="form-control-file" id="image_1">
                                    <small class="text-muted">*Kosongkan jika tidak ingin mengubah Gambar 1</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image_2">Gambar 2</label>
                                    <div class="mb-2">
                                        @if ($about->image_2)
                                            <img src="{{ asset('storage/' . $about->image_2) }}" width="150"
                                                class="img-thumbnail shadow-sm">
                                        @else
                                            <p class="text-muted">Tidak ada gambar</p>
                                        @endif
                                    </div>
                                    <input type="file" name="image_2" class="form-control-file" id="image_2">
                                    <small class="text-muted">*Kosongkan jika tidak ingin mengubah Gambar 2</small>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label>List Items</label>
                            <div id="list-container">
                                @if ($about->list)
                                    @foreach ($about->list as $item)
                                        <div class="input-group mb-2">
                                            <input type="text" name="list[]" class="form-control"
                                                value="{{ $item }}">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-danger remove-list">Hapus</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="input-group mb-2">
                                        <input type="text" name="list[]" class="form-control"
                                            placeholder="Tambahkan item list...">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-danger remove-list">Hapus</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <button type="button" class="btn btn-success btn-sm mt-2" id="add-list">
                                <i class="fas fa-plus"></i> Tambah Item List
                            </button>
                        </div>

                        <hr>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Data About
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    {{-- Script untuk menambah/menghapus input list dinamis --}}
    @push('scripts')
        <script>
            document.getElementById('add-list').addEventListener('click', function() {
                const container = document.getElementById('list-container');
                const newInput = document.createElement('div');
                newInput.className = 'input-group mb-2';
                newInput.innerHTML = `
            <input type="text" name="list[]" class="form-control" placeholder="Tambahkan item list...">
            <div class="input-group-append">
                <button type="button" class="btn btn-danger remove-list">Hapus</button>
            </div>
        `;
                container.appendChild(newInput);
            });

            document.addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-list')) {
                    e.target.closest('.input-group').remove();
                }
            });
        </script>
    @endpush

@endsection
