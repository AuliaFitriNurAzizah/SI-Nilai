<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/',function (){ 
    return view('dashboard');
});

Route::get('/data_mahasiswa', [MahasiswaController::class, 'index'])->name('data_mahasiswa');
Route::get('/tambah_mahasiswa', [MahasiswaController::class, 'create']);
Route::post('/simpan_mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/edit_mahasiswa/{npm}', [MahasiswaController::class, 'edit']);
Route::post('/update_mahasiswa/{npm}', [MahasiswaController::class, 'update']);
Route::get('/hapus_mahasiswa/{npm}', [MahasiswaController::class, 'destroy']);

Route::resource('mahasiswa', MahasiswaController::class);

// Route::post('/mahasiswa/simpan_mahasiswa', [MahasiswaController::class, 'simpan']);