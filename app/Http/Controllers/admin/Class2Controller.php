<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Class2;
use Illuminate\Http\Request;

class Class2Controller extends Controller
{
    public function index()
    {
        $data = Class2::all();
        return view('admin.pages.class2.index', compact('data'));
    }

    public function edit($id)
    {
        $item = Class2::findOrFail($id);
        return view('admin.pages.class2.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_1' => 'required',
            'desc_title_1' => 'required',
            'list' => 'required|array'
        ]);

        $item = Class2::findOrFail($id);
        
        // Simpan data (Casting array ke JSON ditangani otomatis oleh Model)
        $item->update([
            'title_1' => $request->title_1,
            'desc_title_1' => $request->desc_title_1,
            'list' => $request->list
        ]);

        return redirect()->route('admin.class2.index')->with('success', 'Data informasi tambahan berhasil diperbarui');
    }
}