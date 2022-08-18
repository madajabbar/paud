<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index(){
        $data['role'] = Role::where('name','keuangan')->first();
        $data['galeri'] = Galeri::latest()->get();
        $data['title'] = 'Galeri';
        return view('admin.galeri.galeri', $data);
    }
    public function create(Request $request){
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Galeri';
        return view('admin.galeri.tambah_galeri', $data);
    }
    public function store(Request $request){
        // dd($request->link);
        $extension = $request->link->getClientOriginalExtension();
        $fileName = Str::slug($request->nama).'.' .$extension;
        $path = public_path().'/storage/galeri/';
        $dir = 'galeri' .'/' . $fileName;
        $file = $request->file('link');
        $file->move($path, $fileName);


        $data = Galeri::Create(
            [
                'nama' => $fileName,
                'gambar' => $dir,
            ]
        );
        Alert::success('success', 'Data telah ditambahkan');
        return redirect('admin/galeri');
    }
    public function destroy($id) {
        Galeri::find($id)->delete();
        Alert::success('success', 'Data telah dihapus');
        return redirect()->back();
    }
}
