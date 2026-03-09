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

    public function edit($id)
    {
        $data = Home::findOrFail($id);
        return view('admin.pages.home.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Home::findOrFail($id);

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            // ambil nama file
            // $filename = $file->getClientOriginalName();
            $filename = time().'_'.$file->getClientOriginalName();

            // pindahkan ke folder public/images/home
            $file->move(public_path('images/home'), $filename);

            // simpan hanya nama file ke database
            $data->image = $filename;
        }

        $data->update([
            'tagline' => $request->tagline,
            'title' => $request->title,
            'desc_title' => $request->desc_title,
            'image' => $data->image
        ]);

        return redirect()->route('admin.home.index')->with('success', 'Data berhasil diupdate');
    }
}
