@extends('admin.layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b>Edit Data Kontak</b></h3>
        </div>
        <form action="{{ route('admin.contact.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="form-group">
                    <label>Judul Utama</label>
                    <input type="text" name="title" class="form-control" value="{{ $item->title }}" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi Singkat</label>
                    <textarea name="desc_title" class="form-control" rows="3" required>{{ $item->desc_title }}</textarea>
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea name="address" class="form-control" rows="2" required>{{ $item->address }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $item->email }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="phone" class="form-control" value="{{ $item->phone }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Jam Operasional</label>
                    <input type="text" name="open" class="form-control" value="{{ $item->open }}"
                        placeholder="Contoh: Senin - Jumat: 07:30 - 16:00 WIB" required>
                </div>

                <hr>
                <div class="form-group">
                    <label>Informasi Tambahan (List Dinamis)</label>
                    <div id="list-container">
                        {{-- Cek jika data list ada dan didecode jika bentuknya JSON --}}
                        @php
                            $listData = is_array($item->list) ? $item->list : json_decode($item->list, true);
                        @endphp

                        @if ($listData)
                            @foreach ($listData as $val)
                                <div class="input-group mb-2">
                                    <input type="text" name="list[]" class="form-control" value="{{ $val }}">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-danger remove-list">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button type="button" id="add-list" class="btn btn-success btn-sm mt-2">
                        <i class="fas fa-plus"></i> Tambah Baris Info
                    </button>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

    <script>
        // Script Tambah Baris
        document.getElementById('add-list').addEventListener('click', function() {
            const container = document.getElementById('list-container');
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" name="list[]" class="form-control">
                <div class="input-group-append">
                    <button type="button" class="btn btn-danger remove-list"><i class="fas fa-times"></i></button>
                </div>
            `;
            container.appendChild(div);
        });

        // Script Hapus Baris
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-list') || e.target.parentElement.classList.contains('remove-list')) {
                e.target.closest('.input-group').remove();
            }
        });
    </script>
@endsection
