<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About3; // Pastikan Model About3 sudah dibuat
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class About3Controller extends Controller
{
    /**
     * Menampilkan daftar data about_3
     */
    public function index()
    {
        $data = About3::latest()->get();
        return view('admin.pages.about3.index', compact('data'));
    }

    /**
     * Menampilkan form tambah data
     */
    public function create()
    {
        return view('admin.pages.about3.create');
    }

    /**
     * Menyimpan data baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title_1'      => 'required|string|max:255',
            'desc_title_1' => 'required',
            'title_2'      => 'required|string|max:255',
            'desc_title_2' => 'required',
        ]);

        $data = $request->all();

        // Proses Upload Gambar
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('upload/about3', 'public');
        }

        About3::create($data);

        return redirect()->route('admin.about3.index')->with('success', 'Data About 3 berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit data
     */
    public function edit($id)
    {
        $about = About3::findOrFail($id);
        return view('admin.pages.about3.edit', compact('about'));
    }

    /**
     * Memperbarui data di database
     */
    public function update(Request $request, $id)
    {
        $about = About3::findOrFail($id);

        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title_1'      => 'required|string|max:255',
            'desc_title_1' => 'required',
            'title_2'      => 'required|string|max:255',
            'desc_title_2' => 'required',
        ]);

        $data = $request->all();

        // Proses Update Gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada di storage
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('upload/about3', 'public');
        }

        $about->update($data);

        return redirect()->route('admin.about3.index')->with('success', 'Data About 3 berhasil diperbarui!');
    }

    /**
     * Menghapus data dari database
     */
    public function destroy($id)
    {
        $about = About3::findOrFail($id);

        // Hapus file gambar dari storage sebelum hapus data
        if ($about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('admin.about3.index')->with('success', 'Data About 3 berhasil dihapus!');
    }
}
