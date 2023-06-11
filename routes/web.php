<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/pegawai', [App\Http\Controllers\ListPegawaiController::class, 'beranda']);

    Route::get('/profile', function () {
        return view('pegawai.profile');
    });
    Route::get('/list', [App\Http\Controllers\ListPegawaiController::class, 'index']);
    Route::get('/pegawai/tambah', [App\Http\Controllers\ListPegawaiController::class, 'tambah']);
    Route::post('/pegawai/tambah/proses', [App\Http\Controllers\ListPegawaiController::class, 'tambah']);
    Route::post('/pegawai/edit/{id}', [App\Http\Controllers\ListPegawaiController::class, 'edit']);
    Route::get('/pegawai/hapus/{id}', [App\Http\Controllers\ListPegawaiController::class, 'hapus']);
    Route::get('/pegawai/profile/{id}', [App\Http\Controllers\ListPegawaiController::class, 'profile']);

    Route::post('/pegawai/jabatan/tambah', [App\Http\Controllers\RiwayatJabatanController::class, 'tambah']);
    Route::get('/pegawai/jabatan/editpage/{id}/{id1}', [App\Http\Controllers\RiwayatJabatanController::class, 'editpage']);
    Route::post('/pegawai/jabatan/edit/{id}', [App\Http\Controllers\RiwayatJabatanController::class, 'edit']);
    Route::post('/pegawai/jabatan/hapus/{id}', [App\Http\Controllers\RiwayatJabatanController::class, 'hapus']);

    Route::post('/pegawai/jabatanfungsional/tambah', [App\Http\Controllers\RiwayatJabatanfController::class, 'tambah']);
    Route::post('/pegawai/jabatanfungsional/hapus/{id}', [App\Http\Controllers\RiwayatJabatanfController::class, 'hapus']);
    Route::get('/pegawai/jabatanfungsional/editpage/{id}/{id1}', [App\Http\Controllers\RiwayatJabatanfController::class, 'editpage']);
    Route::post('/pegawai/jabatanfungsional/edit/{id}', [App\Http\Controllers\RiwayatJabatanfController::class, 'edit']);

    Route::get('/pegawai/tmagama/tambah', [App\Http\Controllers\TmAgamaController::class, 'index']);
    Route::post('/pegawai/tmagama/tambah/proses', [App\Http\Controllers\TmAgamaController::class, 'tambah']);
    Route::get('/pegawai/tmagama/hapus/{id}', [App\Http\Controllers\TmAgamaController::class, 'hapus']);

    Route::get('/pegawai/tmjabatanf/tambah', [App\Http\Controllers\TmJabatanfController::class, 'index']);
    Route::post('/pegawai/tmjabatanf/tambah/proses', [App\Http\Controllers\TmJabatanfController::class, 'tambah']);
    Route::get('/pegawai/tmjabatanf/hapus/{id}', [App\Http\Controllers\TmJabatanfController::class, 'hapus']);

    Route::get('/pegawai/tmjabatans/tambah', [App\Http\Controllers\TmJabatanstrukturalController::class, 'index']);
    Route::post('/pegawai/tmjabatans/tambah/proses', [App\Http\Controllers\TmJabatanstrukturalController::class, 'tambah']);
    Route::get('/pegawai/tmjabatans/hapus/{id}', [App\Http\Controllers\TmJabatanstrukturalController::class, 'hapus']);

    Route::get('/pegawai/tmpendidikan/tambah', [App\Http\Controllers\TmPendidikanController::class, 'index']);
    Route::post('/pegawai/tmpendidikan/tambah/proses', [App\Http\Controllers\TmPendidikanController::class, 'tambah']);
    Route::get('/pegawai/tmpendidikan/hapus/{id}', [App\Http\Controllers\TmPendidikanController::class, 'hapus']);

    Route::get('/pegawai/grafik', [App\Http\Controllers\GrafikController::class, 'index']);
});
