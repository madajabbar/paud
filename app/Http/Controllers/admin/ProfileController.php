<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index()
    {
        $data['profile'] = Profile::latest()->first();
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Profile';
        return view('admin.profile', $data);
    }
    public function store(Request $request)
    {
        $data = Profile::updateOrCreate(
            ['id' => $request->id],
            [
                'tentang' => $request->tentang,
                'visi' => $request->visi,
                'misi' => $request->misi
            ]
        );
        Alert::success('sukses', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
}
