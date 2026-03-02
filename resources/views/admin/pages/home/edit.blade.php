<h2>Edit Home</h2>

<form action="{{ route('admin.home.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    Tagline: <input type="text" name="tagline" value="{{ $data->tagline }}"><br>
    Title: <input type="text" name="title" value="{{ $data->title }}"><br>
    Desc:
    <textarea name="desc_title">{{ $data->desc_title }}</textarea><br>

    <img src="{{ asset('storage/' . $data->image) }}" width="100"><br>
    Image: <input type="file" name="image"><br>

    <button type="submit">Update</button>
</form>
