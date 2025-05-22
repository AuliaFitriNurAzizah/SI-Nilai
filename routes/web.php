<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;

Route::get('/',function (){ 
    return view('dashboard');
});

Route::get('/data_mahasiswa', [MahasiswaController::class, 'index'])->name('data_mahasiswa');
Route::get('/tambah_mahasiswa', [MahasiswaController::class, 'create']);
Route::post('/simpan_mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/edit_mahasiswa', [MahasiswaController::class, 'edit']);
Route::post('/update_mahasiswa/{npm}', [MahasiswaController::class, 'update']);
Route::get('/hapus_mahasiswa/{npm}', [MahasiswaController::class, 'destroy']);



Route::get('/data_kelas', [KelasController::class, 'index'])->name('data_kelas');
Route::get('/tambah_kelas', [KelasController::class, 'create'])->name('create');
Route::post('/simpan_kelas', [KelasController::class, 'store'])->name('store');
// Route::get('/edit_kelas/{kode_kelas}', [KelasController::class, 'edit'])->name('kelas.edit');
// Route::post('/update_kelas/{kode_kelas}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/hapus_kelas/{kode_kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');


Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('kelas', KelasController::class);

Route::get('kelas/{kode_kelas}/edit', [KelasController::class, 'edit']);
Route::put('kelas/{kode_kelas}', [KelasController::class, 'update']);

// Route::post('/mahasiswa/simpan_mahasiswa', [MahasiswaController::class, 'simpan']);