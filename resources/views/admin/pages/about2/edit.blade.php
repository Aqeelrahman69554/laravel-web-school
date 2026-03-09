@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit About Section 2</h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.about2.index') }}" class="btn btn-secondary btn-sm">
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

                    <form action="{{ route('admin.about2.update', $about2->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ old('title', $about2->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="icon">Icon Class</label>
                            <div class="input-group">
                                <input type="text" name="icon" class="form-control" id="icon"
                                    value="{{ old('icon', $about2->icon) }}" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i id="icon-preview" class="{{ $about2->icon }}"></i>
                                    </span>
                                </div>
                            </div>
                            <small class="text-muted">*Contoh: flaticon-033-blocks atau fa fa-user</small>
                        </div>

                        <div class="form-group">
                            <label for="desc_title">Description</label>
                            <textarea name="desc_title" class="form-control" id="desc_title" rows="4" required>{{ old('desc_title', $about2->desc_title) }}</textarea>
                        </div>

                        <hr>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Data Fitur
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    {{-- Script untuk live preview icon saat mengetik --}}
    @push('scripts')
        <script>
            const iconInput = document.getElementById('icon');
            const iconPreview = document.getElementById('icon-preview');

            iconInput.addEventListener('input', function() {
                iconPreview.className = this.value;
            });
        </script>
    @endpush
@endsection