<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GaleriController;
use App\Http\Controllers\admin\KeuanganController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\SiswaController as AdminSiswaController;
use App\Http\Controllers\admin\TutorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/portofolio', [HomeController::class, 'portfolio']);

Route::get('/about', [HomeController::class, 'about']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/guru', [HomeController::class, 'guru']);
Route::get('/pengumuman', [HomeController::class, 'pengumuman']);
Route::get('/pendaftaran', [HomeController::class, 'pendaftaran'])->middleware('ortu');
Route::post('/pendaftaran', [HomeController::class, 'store'])->middleware('ortu');

Route::get('/user', [UserController::class, 'index'])->middleware(['auth']);
Route::post('/user', [UserController::class, 'update'])->middleware(['auth']);

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('profile', [ProfileController::class, 'index']);
    Route::post('profile', [ProfileController::class, 'store']);
    Route::get('contact', [ContactController::class, 'index']);
    Route::post('contact', [ContactController::class, 'store']);
    Route::get('siswa', [AdminSiswaController::class, 'index'])->name('siswa');
    Route::post('siswa', [AdminSiswaController::class, 'store']);
    Route::get('siswa/{id}', [AdminSiswaController::class, 'verify']);
    Route::get('galeri', [GaleriController::class, 'index']);
    Route::get('galeri/tambah', [GaleriController::class, 'create']);
    Route::post('galeri', [GaleriController::class, 'store']);
    Route::get('galeri/hapus/{id}', [GaleriController::class, 'destroy']);
    Route::get('tutor', [TutorController::class, 'index']);
    Route::get('tutor/tambah/{id}', [TutorController::class, 'destroy']);
    Route::post('tutor', [TutorController::class, 'store']);
    Route::get('tutor/tambah', [TutorController::class, 'create']);
});
Route::prefix('admin')->middleware(['keuangan'])->group(function () {
    Route::get('keuangan', [KeuanganController::class, 'index'])->name('keuangan');
    Route::post('keuangan', [KeuanganController::class, 'store']);
    Route::get('keuangan/{id}', [KeuanganController::class, 'verify']);
});
require __DIR__ . '/auth.php';
