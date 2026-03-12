<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Daftar Tenaga Pendidik</b></h3>
                <div class="card-tools">
                    <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary btn-sm">Tambah Dosen</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Foto</th>
                                <th>Nama & Jabatan</th>
                                <th>Sosial Media</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>
                                    @php
                                        $url = file_exists(public_path('images/'.$item->image)) ? asset('images/'.$item->image) : asset('images/teacher/'.$item->image);
                                    @endphp
                                    <img src="{{ $url }}" width="80" class="img-circle border shadow-sm">
                                </td>
                                <td>
                                    <strong>{{ $item->name }}</strong><br>
                                    <span class="badge badge-info">{{ $item->status }}</span>
                                </td>
                                <td>
                                    <a href="{{ $item->facebook }}" class="btn btn-sm btn-primary {{ $item->facebook == '#' ? 'disabled' : '' }}"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ $item->twiter }}" class="btn btn-sm btn-info {{ $item->twiter == '#' ? 'disabled' : '' }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $item->linkedin }}" class="btn btn-sm btn-secondary {{ $item->linkedin == '#' ? 'disabled' : '' }}"><i class="fab fa-linkedin"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.teacher.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.teacher.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus dosen ini?')">
                                        @csrf @method('DELETE')
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

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 3000);
</script>
@endsection