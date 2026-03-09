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
            $data['image'] = $request->file('image')->store('fakultas', 'public');
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
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = $request->file('image')->store('fakultas', 'public');
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