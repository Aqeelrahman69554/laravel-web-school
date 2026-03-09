<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Teacher2Controller extends Controller
{
    public function index()
    {
        $data = Teacher2::all();
        return view('admin.pages.teacher2.index', compact('data'));
    }

    public function edit($id)
    {
        $item = Teacher2::findOrFail($id);
        return view('admin.pages.teacher2.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Teacher2::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada di storage
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }

        $item->update($data);
        return redirect()->route('admin.teacher2.index')->with('success', 'Testimoni berhasil diperbarui');
    }

    public function destroy($id)
    {
        $item = Teacher2::findOrFail($id);
        if ($item->image && Storage::disk('public')->exists($item->image)) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();
        return redirect()->route('admin.teacher2.index')->with('success', 'Data berhasil dihapus');
    }
}