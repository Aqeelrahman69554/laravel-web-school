<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_2;

class Contact_2Controller extends Controller
{
    public function index()
    {
        $messagess = Contact_2::all();
        return view('admin.pages.contact_2.index', compact('messagess'));
    }

    public function destroy($id)
    {
        Contact_2::findOrFail($id)->delete();

        return redirect()->route('admin.message.index')
            ->with('success', 'Pesan berhasil dihapus');
    }
}
