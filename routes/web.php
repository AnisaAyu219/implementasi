<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/loginuser', function () {
    return view('loginuser');
});

Route::get('/form_karya', function () {
    return view('formkarya');
});

Route::get('/form_komentar', function () {
    return view('formkomentar');
});

Route::get('/form_pelatihan', function () {
    return view('formpelatihan');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/list_karya', function () {
    return view('listkarya');
});

// Route::get('/profilemahasiswa', function () {
//     return view('profilemahasiswa');
// });

Route::delete('delete_komentar/{id_komentar}', [KomentarController::class, 'delete_komentar']);
Route::post('/register_mhs', [MahasiswaController::class, 'register_mhs']);
Route::post('/login_mhs', [MahasiswaController::class, 'login_mhs']);
Route::post('/input_karya', [KaryaController::class, 'input_karya']);
Route::get('/getall_karya', [KaryaController::class, 'getall_karya']);
Route::post('/login_mahasiswa', [LoginController::class, 'login_mahasiswa']);
Route::post('/login_user', [LoginUserController::class, 'login_user']);
Route::post('/input_komentar', [KomentarController::class, 'input_komentar']);
Route::get('/getall_komentar', [KomentarController::class, 'getall_komentar']);
Route::get('/getall_pelatihan', [PelatihanController::class, 'getall_pelatihan']);
Route::post('/input_pelatihan', [PelatihanController::class, 'input_pelatihan']);
Route::get('/get_profile_mahasiswa/{nim}', [ProfileController::class, 'get_profile_mahasiswa']);
Route::get('/get_profile_dosen/{id_dosen}', [ProfileController::class, 'get_profile_dosen']);
Route::get('/get_profile_admin/{id_admin}', [ProfileController::class, 'get_profile_admin']);
Route::get('/get_edit_karya/{id_karya}', [KaryaController::class, 'get_edit']);
Route::post('/update_karya/{id_karya}', [KaryaController::class, 'update_karya']);
Route::get('/komentar_karya/{id_karya}', [KomentarController::class, 'komentar_karya']);
