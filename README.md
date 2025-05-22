🧑‍🎓 Tutorial Frontend Laravel + AdminLTE (CRUD API Mahasiswa & Dosen)
Proyek ini merupakan implementasi Frontend Laravel dengan integrasi AdminLTE dan komunikasi ke backend CodeIgniter REST API untuk entitas Mahasiswa dan Dosen.

🧱 Teknologi yang Digunakan
Laravel 10
Bootstrap 4 (via AdminLTE)
AdminLTE Template
Axios (untuk konsumsi API)
CodeIgniter (REST API backend)
📦 Instalasi & Setup

BE : https://github.com/Arfilal/backend_sinilai.git
1. Clone Repository
git clone https://github.com/AuliaFitriNurAzizah/SI-Nilai.git
cd sinilaiFrontend
2. Install Dependency Laravel
composer install
npm install
3. Copy File Environment & Generate Key
cp .env.example .env
php artisan key:generate
4. Set .env untuk Non-Database App
Kita hanya menggunakan API, jadi tidak perlu database lokal:

APP_NAME=Laravel
APP_URL=http://localhost:8000
SESSION_DRIVER=file
Tidak perlu konfigurasi DB karena semua data berasal dari API CodeIgniter.

🧪 Jalankan Aplikasi
php artisan serve
Akses: http://localhost:8000


📁 Routing
```
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
```
🧑‍💻 Controller
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    private $apiUrl = 'http://localhost:8080/mahasiswa';

    public function index()
    {
        $response = Http::get($this->apiUrl);
        $mahasiswa = json_decode($response->body(), true);
        return view('mahasiswa.data_mahasiswa', compact('mahasiswa'));

    }

    public function create()
    {
        return view('mahasiswa.tambah_mahasiswa');
    }

    public function store(Request $request)
    {   
        Http::asForm()->post($this->apiUrl, $request->only(['npm', 'nama_mhs', 'kode_kelas', 'id_prodi']));
        return redirect('mahasiswa');
    }

    public function edit($npm)
{
    $response = Http::get($this->apiUrl . '/' . $npm);
  $mahasiswa = json_decode($response->body(), true);
    return view('mahasiswa.edit_mahasiswa', compact('mahasiswa'));
}

    

    public function update(Request $request, $npm)
    {
        Http::put($this->apiUrl . '/' . $npm, $request->only(['nama_mhs', 'kode_kelas', 'id_prodi']));
        return redirect('/data_mahasiswa');
    }

    public function destroy($npm)
    {
        Http::delete($this->apiUrl . '/' . $npm);
        return redirect('/data_mahasiswa');
    }
}
```

🧾 View (Blade)
1. resources/views/mahasiswa/index.blade.php
@extends('adminlte::page')

@section('content')
    <h3>Data Mahasiswa</h3>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-2">Tambah Mahasiswa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['email'] }}</td>
                    <td>{{ $mhs['prodi'] }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs['nim']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs['nim']) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
2. create.blade.php dan edit.blade.php
Buat file formulir input mahasiswa di folder resources/views/mahasiswa.

✅ Status CRUD

Fitur	Status ✅

Tampilkan	✅

Tambah	✅

Edit	✅


Hapus	✅

🧠 Tips
Jika error could not find driver, pastikan ext-curl dan ext-pdo aktif di php.ini.
Backend harus dalam keadaan running: php spark serve.

☁️ Deployment

git init

git remote add origin https://github.com/username/repo.git

git add .

git commit -m "Initial commit"

git push -u origin main

🧾 Lisensi
Proyek ini dibuat untuk keperluan pembelajaran pribadi. Silakan modifikasi sesuai kebutuhanmu.