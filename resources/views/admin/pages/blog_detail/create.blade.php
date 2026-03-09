@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Blog Detail Baru</h3>
    </div>
    
    <form action="{{ route('admin.blog_detail.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6" style="border-right: 1px solid #eee;">
                    <h5><b>Konten Bagian 1</b></h5>
                    <hr>
                    <div class="form-group">
                        <label>Judul 1</label>
                        <input type="text" name="title_1" class="form-control" placeholder="Masukkan judul pertama..." required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi 1</label>
                        <textarea name="desc_title_1" class="form-control" rows="5" placeholder="Tuliskan isi paragraf pertama..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar 1</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image_1" class="custom-file-input" id="image1">
                                <label class="custom-file-label" for="image1">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5><b>Konten Bagian 2</b></h5>
                    <hr>
                    <div class="form-group">
                        <label>Judul 2</label>
                        <input type="text" name="title_2" class="form-control" placeholder="Masukkan judul kedua...">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi 2</label>
                        <textarea name="desc_title_2" class="form-control" rows="5" placeholder="Tuliskan isi paragraf kedua..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar 2</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image_2" class="custom-file-input" id="image2">
                                <label class="custom-file-label" for="image2">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="{{ route('admin.blog_detail.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    // Script agar nama file muncul di input custom-file AdminLTE/Bootstrap
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
@endsection