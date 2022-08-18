<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index()
    {
        $data['contact'] = Contact::latest()->first();
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Kontak';
        return view('admin.contact', $data);
    }
    public function store(Request $request)
    {
        $data = Contact::updateOrCreate(
            ['id' => $request->id],
            [
                'deskripsi' => $request->deskripsi,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp
            ]
        );
        Alert::success('sukses', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
}
