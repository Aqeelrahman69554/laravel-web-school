@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Informasi Tambahan (Class 2)</b></h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Judul & Deskripsi</th>
                                <th>Daftar Layanan/Jalur</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>
                                    <strong>{{ $item->title_1 }}</strong>
                                    <p class="text-muted small mt-1">{{ $item->desc_title_1 }}</p>
                                </td>
                                <td>
                                    @if($item->list)
                                        <ul class="pl-3 mb-0">
                                            @foreach($item->list as $list_item)
                                                <li>{{ $list_item }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.class2.edit', $item->id) }}" class="btn btn-warning btn-sm btn-block">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
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
<script>
    // Tunggu sampai dokumen selesai dimuat
    document.addEventListener('DOMContentLoaded', function() {
        // Cari elemen dengan class alert
        const alert = document.querySelector('.alert');
        
        if (alert) {
            // Set timer 3000ms (3 detik)
            setTimeout(function() {
                // Tambahkan transisi halus menggunakan jQuery (karena AdminLTE pakai Bootstrap)
                $('.alert').fadeOut('slow', function() {
                    $(this).remove();
                });
            }, 300); 
        }
    });
</script>