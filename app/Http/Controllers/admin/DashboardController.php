<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Role;
use App\Models\Siswa;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $data['role'] = Role::where('name','keuangan')->first();
        $data['title'] = 'Dashboard';
        $data['tutor'] = Tutor::all();
        $data['siswa'] = Siswa::all();
        $data['user'] = User::all();
        $data['galeri'] = Galeri::all();
        return view('admin.dashboard',$data);
    }
}
