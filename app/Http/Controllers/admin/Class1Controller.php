<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Class1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Class1Controller extends Controller
{
    public function index()
    {
        $data = Class1::all();
        return view('admin.pages.class1.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.class1.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title_1' => 'required',
            'title_2' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Mengambil nama asli file
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Pindahkan ke public/images/class/
            $file->move(public_path('images/class'), $fileName);
            // Simpan hanya nama filenya saja ke database
            $data['image'] = $fileName;
        }

        Class1::create($data);
        return redirect()->route('admin.class1.index')->with('success', 'Data Fakultas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = Class1::findOrFail($id);
        return view('admin.pages.class1.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Class1::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // 1. Hapus foto lama jika ada di folder public
            $oldPath = public_path('images/class/' . $item->image);
            if ($item->image && file_exists($oldPath)) {
                unlink($oldPath);
            }

            // 2. Upload foto baru dengan nama asli
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/class'), $fileName);

            $data['image'] = $fileName;
        } else {
            // Tetap gunakan gambar lama jika tidak ada upload baru
            $data['image'] = $item->image;
        }

        $item->update($data);
        return redirect()->route('admin.class1.index')->with('success', 'Data Fakultas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $item = Class1::findOrFail($id);
        if ($item->image && Storage::disk('public')->exists($item->image)) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();
        return redirect()->route('admin.class1.index')->with('success', 'Data berhasil dihapus');
    }
}
