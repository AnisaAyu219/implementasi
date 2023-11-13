<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengalamanKerjaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrestasiController;
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

//Route Memanggil View Percobaan
Route::get('/', function () {
    return view('login');
});

Route::get('/p_pilihan', function () {
    return view('p_pilihan');
});

Route::get('/p_formadmin', function () {
    return view('p_formadmin');
});

Route::get('/p_formbiodata', function () {
    return view('p_formbiodata');
});

Route::get('/p_formlogin', function () {
    return view('p_formlogin');
});

Route::get('/p_formpelatihan', function () {
    return view('p_formpelatihan');
});

Route::get('/p_formkomentar', function () {
    return view('p_formkomentar');
});

Route::get('/p_formkarya', function () {
    return view('p_formkarya');
});

Route::get('/p_formprestasi', function () {
    return view('p_formprestasi');
});


//Route Memanggil View Asli
Route::get('/loginuser', function () {
    return view('loginuser');
});

Route::get('/form_karya', function () {
    return view('formkarya');
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

//Route KaryaController
Route::post('/input_karya', [KaryaController::class, 'input_karya']);
Route::get('/getall_karya', [KaryaController::class, 'getall_karya']);
Route::get('/get_detail_karya/{id_karya}', [KaryaController::class, 'get_detail_karya']);
Route::post('/update_karya/{id_karya}', [KaryaController::class, 'update_karya']);
Route::get('/get_search_karya/{nama_karya}', [KaryaController::class, 'get_search_karya']);
Route::delete('delete_karya/{id_karya}', [KaryaController::class, 'delete_karya']);
Route::get('/get_karya_mhs/{nim}', [KaryaController::class, 'get_karya_mhs']);

//Route KomentarController
Route::delete('delete_komentar/{id_komentar}', [KomentarController::class, 'delete_komentar']);
Route::post('/input_komentar', [KomentarController::class, 'input_komentar']);
Route::get('/getall_komentar', [KomentarController::class, 'getall_komentar']);
Route::get('/komentar_karya/{id_karya}', [KomentarController::class, 'komentar_karya']);

//Route PelatihanController
Route::get('/getall_pelatihan', [PelatihanController::class, 'getall_pelatihan']);
Route::post('/input_pelatihan', [PelatihanController::class, 'input_pelatihan']);
Route::get('/get_detail_pelatihan/{id_pelatihan}', [PelatihanController::class, 'get_detail_pelatihan']);
Route::get('/get_pelatihan_mhs/{nim}', [PelatihanController::class, 'get_pelatihan_mhs']);
Route::get('/get_search_pelatihan/{nama_pelatihan}', [PelatihanController::class, 'get_search_pelatihan']);
Route::delete('delete_pelatihan/{id_pelatihan}', [PelatihanController::class, 'delete_pelatihan']);

//Route LoginUserController
Route::post('/login_user', [LoginUserController::class, 'login_user']);

//Route ProfileController
Route::get('/get_profile_mahasiswa/{nim}', [ProfileController::class, 'get_profile_mahasiswa']);
// Route::get('/get_profile_admin/{id_admin}', [ProfileController::class, 'get_profile_admin']);

//Route PengalamanKerjaController
Route::post('/input_pengalaman_kerja', [PengalamanKerjaController::class, 'input_pengalaman_kerja']);
Route::get('/getall_pengalaman_kerja', [PengalamanKerjaController::class, 'getall_pengalaman_kerja']);
Route::post('/delete_pengalaman_kerja', [PengalamanKerjaController::class, 'delete_pengalaman_kerja']);

//Route BiodataController
Route::get('/get_detail_biodata/{id_biodata}', [BiodataController::class, 'get_detail_biodata']);
Route::post('/input_biodata', [BiodataController::class, 'input_biodata']);
Route::get('/getall_biodata', [BiodataController::class, 'getall_biodata']);
Route::post('/update_biodata/{id_biodata}', [BiodataController::class, 'update_biodata']);

//Route RegisterController
Route::post('/register_admin', [RegisterController::class, 'register_admin']);

//Route AdminController
Route::get('/getall_admin', [AdminController::class, 'getall_admin']);
Route::delete('delete_admin/{id_admin}', [AdminController::class, 'delete_admin']);

//Route PrestasiController
Route::post('/input_prestasi', [PrestasiController::class, 'input_prestasi']);
Route::get('/getall_prestasi', [PrestasiController::class, 'getall_prestasi']);
Route::get('/get_detail_prestasi/{id_prestasi}', [PrestasiController::class, 'get_detail_prestasi']);
Route::get('/get_search_prestasi/{nama_prestasi}', [PrestasiController::class, 'get_search_prestasi']);
Route::delete('delete_prestasi/{id_prestasi}', [PrestasiController::class, 'delete_prestasi']);
Route::get('/get_prestasi_mhs/{nim}', [PrestasiController::class, 'get_prestasi_mhs']);
