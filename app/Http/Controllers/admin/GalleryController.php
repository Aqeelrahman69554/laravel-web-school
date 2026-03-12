<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data = Gallery::latest()->get();
        $gallery = Gallery::all();
        return view('admin.pages.gallery.index', compact('data', 'gallery'));
    }

    public function create()
    {
        return view('admin.pages.gallery.create');
    }

    public function store(Request $request)
    {
        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/gallery'), $imageName);
        }

        Gallery::create([
            'title' => $request->title,
            'image' => $imageName,
            'category' => $request->category
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Data gallery berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Gallery::findOrFail($id);
        return view('admin.pages.gallery.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/gallery'), $imageName);
        } else {
            $imageName = $gallery->image;
        }

        $gallery->update([
            'title' => $request->title,
            'image' => $imageName,
            'category' => $request->category
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Data gallery berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Gallery::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Data gallery berhasil dihapus');
    }
}
