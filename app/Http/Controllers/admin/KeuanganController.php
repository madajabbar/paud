<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lulus;
use App\Models\Pembayaran;
use App\Models\Role;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Datatables;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class KeuanganController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Lulus::orderBy('id', 'DESC')->get();
            return FacadesDataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nama', function ($row) {
                    return $row->siswa->nama;
                })
                ->addColumn('pembayaran', function ($row) {
                    if (isset($row->siswa->pembayaran)) {
                        return 'Lunas';
                    } else return 'Belum Lunas';
                })
                ->addColumn('pendaftar', function ($row) {
                    return $row->siswa->user->name;
                })
                ->addColumn('nama_ayah', function ($row) {
                    return $row->siswa->nama_ayah;
                })
                ->addColumn('action', function ($row) {
                    if (isset($row->siswa->pembayaran)) {
                        return 'Sudah Lunas';
                    } else {
                        $btn = '
                             <a href="ke uangan/' . $row->siswa_id . '" class="edit btn btn-primary btn-sm">Lunaskan</a>
                             ';
                        return $btn;
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Keuangan';
        // dd($data['role']);
        return view('admin.keuangan.keuangan',$data);
    }
    public function store(Request $request)
    {
        Pembayaran::create($request->all());
        Alert::success('Sukses', 'Siswa Berhasil Dilunaskan');
        return redirect('admin/keuangan');
    }
    public function verify($id)
    {
        $data['siswa'] = Siswa::find($id);
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Keuangan';
        return view('admin.keuangan.verif_keuangan', $data);
    }
}
