<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $data = Teacher::all();
        return view('admin.pages.teacher.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Mengambil nama asli file
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Pindahkan ke public/images/teacher/
            $file->move(public_path('images/teacher'), $fileName);
            // Simpan hanya nama filenya saja ke database
            $data['image'] = $fileName;
        }

        Teacher::create($data);
        return redirect()->route('admin.teacher.index')->with('success', 'Data Dosen berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = Teacher::findOrFail($id);
        return view('admin.pages.teacher.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Teacher::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // 1. Hapus foto lama jika ada di folder public
            $oldPath = public_path('images/teacher/' . $item->image);
            if ($item->image && file_exists($oldPath)) {
                unlink($oldPath);
            }

            // 2. Upload foto baru dengan nama asli
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/teacher'), $fileName);

            $data['image'] = $fileName;
        } else {
            // Tetap gunakan gambar lama jika tidak ada upload baru
            $data['image'] = $item->image;
        }

        $item->update($data);
        return redirect()->route('admin.teacher.index')->with('success', 'Data Dosen berhasil diperbarui');
    }

    public function destroy($id)
    {
        $item = Teacher::findOrFail($id);
        if ($item->image && Storage::disk('public')->exists($item->image)) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();
        return redirect()->route('admin.teacher.index')->with('success', 'Data berhasil dihapus');
    }
}
