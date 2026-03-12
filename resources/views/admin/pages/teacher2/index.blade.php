@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Data Testimoni (Teacher 2)</b></h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Profil</th>
                                <th>Kutipan (Comment)</th>
                                <th>Kategori</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @php
                                            $url = file_exists(public_path('images/'.$item->image)) ? asset('images/'.$item->image) : asset('images/teacher2/'.$item->image);
                                        @endphp
                                        <img src="{{ $url }}" width="60" height="60" class="img-circle border mr-3" style="object-fit: cover;">
                                        <div>
                                            <strong>{{ $item->name }}</strong><br>
                                            <small class="text-muted">{{ $item->status }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-quote-left text-primary mr-2"></i>{{ $item->coment }}</td>
                                <td><span class="badge badge-primary">{{ $item->title }}</span></td>
                                <td>
                                    <a href="{{ route('admin.teacher2.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.teacher2.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus testimoni ini?')">
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
        $(".alert").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); });
    }, 3000);
</script>
@endsection