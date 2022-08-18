<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){
        $data['profile'] = Auth::user();
        return view('profile.index', $data);
    }

    public function update(Request $request){
        $data = Auth::user();
        // dd($request->no_hp);
        $tutor = Tutor::where('user_id', $data->id)->first();
        // dd($tutor);
        if($request->name){
            $data->name = $request->name;
        }
        if($request->email){
            $data->email = $request->email;
        }
        if($request->password){
            $data->password = Hash::make($request->password);
        }
        if($request->no_hp){
            $tutor->no_hp = $request->no_hp;
            $tutor->save();
        }
        if($request->deskripsi){
            $tutor->deskripsi = $request->deskripsi;
            $tutor->save();
        }
        if($request->pendidikan){
            $tutor->pendidikan = $request->pendidikan;
            $tutor->save();
        }
        if($request->file('foto')){
            // $request->validate([
            //     'foto' => 'required|mimes:png,jpeg,jpg|max:2048',
            // ]);
            $extension = $request->foto->getClientOriginalExtension();
            $fileName = Str::slug($request->name).'.' .$extension;
            $path = public_path().'/storage/tutor/';
            $dir = 'tutor' .'/' . $fileName;
            $update = Tutor::where('user_id', $request->id)->first();
            if(!empty($update->foto)){
                unlink('storage/'.$update->foto);
            }
            $file = $request->file('foto');
            $file->move($path, $fileName);
            $tutor->foto = $dir;
            $tutor->save();
        }
        $data->save();
        Alert::success('Sukses','Data Berhasil diupdate');
        return redirect()->back();
    }
}
