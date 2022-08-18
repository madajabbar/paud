<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lulus;
use App\Models\Role;
use App\Models\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class SiswaController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $data = Siswa::orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('pendaftar', function($row){
                        return $row->user->name;
                    })
                    ->addColumn('status', function($row){
                        if(isset($row->lulus->status)){
                            return $row->lulus->status;
                        }
                        else return 'Belum Lulus';
                    })
                    ->addColumn('action', function($row){
                        if(isset($row->lulus->status)){
                            return '';
                        }
                           $btn = '
                            <a href="siswa/'.$row->id.'" class="edit btn btn-primary btn-sm">Luluskan</a>
                            ';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Siswa';
        return view('admin.siswa.siswa',$data);
    }

    public function store(Request $request){
        Lulus::create($request->all());
        Alert::success('Sukses', 'Siswa Berhasil Diluluskan');
        return redirect('admin/siswa');
    }
    public function verify($id){
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Siswa';
        $data['siswa'] = Siswa::find($id);
        return view('admin.siswa.verif', $data);
    }
}
