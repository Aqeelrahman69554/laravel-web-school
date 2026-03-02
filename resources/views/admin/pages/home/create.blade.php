<h2>Tambah Home</h2>

<form action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    Tagline: <input type="text" name="tagline"><br>
    Title: <input type="text" name="title"><br>
    Desc:
    <textarea name="desc_title"></textarea><br>
    Image: <input type="file" name="image"><br>

    <button type="submit">Simpan</button>
</form>
