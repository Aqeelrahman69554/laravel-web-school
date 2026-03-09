@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Informasi Tambahan</h3>
    </div>
    <form action="{{ route('admin.class2.update', $item->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="title_1" class="form-control" value="{{ $item->title_1 }}">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="desc_title_1" class="form-control" rows="3">{{ $item->desc_title_1 }}</textarea>
            </div>
            
            <div class="form-group">
                <label>Daftar Item (List)</label>
                <div id="list-container">
                    @foreach($item->list as $val)
                        <div class="input-group mb-2">
                            <input type="text" name="list[]" class="form-control" value="{{ $val }}">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-danger remove-list"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-list" class="btn btn-success btn-sm mt-2">
                    <i class="fas fa-plus"></i> Tambah Baris List
                </button>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.class2.index') }}" class="btn btn-secondary">Batal</a>
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
