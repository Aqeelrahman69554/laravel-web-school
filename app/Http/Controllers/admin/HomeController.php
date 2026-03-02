<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::all();
        return view('admin.pages.home.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tagline' => 'required',
            'title' => 'required',
            'desc_title' => 'required',
            'image' => 'required|image'
        ]);

        $image = $request->file('image')->store('home', 'public');

        Home::create([
            'tagline' => $request->tagline,
            'title' => $request->title,
            'desc_title' => $request->desc_title,
            'image' => $image,
        ]);

        return redirect()->route('admin.home.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Home::findOrFail($id);
        return view('admin.pages.home.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Home::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('home', 'public');
            $data->image = $image;
        }

        $data->update([
            'tagline' => $request->tagline,
            'title' => $request->title,
            'desc_title' => $request->desc_title,
        ]);

        return redirect()->route('admin.home.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Home::destroy($id);
        return redirect()->route('admin.home.index')->with('success', 'Data berhasil dihapus');
    }
}
