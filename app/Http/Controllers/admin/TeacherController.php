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
            $data['image'] = $request->file('image')->store('teachers', 'public');
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
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = $request->file('image')->store('teachers', 'public');
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