<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KelasController extends Controller
{
    private $apiUrl = 'http://localhost:8080/kelas';

    public function index()
    {
        $response = Http::get($this->apiUrl);
        $kelas = json_decode($response->body(), true);
        return view('kelas.data_kelas', compact('kelas'));

    }

    public function create()
{
    // Kalau kamu perlu ambil data dari API lain, bisa ditambahkan di sini
    return view('kelas.tambah_kelas'); // Pastikan file blade-nya ada
}

public function store(Request $request)
    {   
        Http::asForm()->post($this->apiUrl, $request->only(['kode_kelas', 'nama_kelas']));
        return redirect('data_kelas');
    }

      public function destroy($kode_kelas)
    {
        Http::delete("{$this->apiUrl}/{$kode_kelas}");
        return redirect('data_kelas')->with('success', 'Data kelas berhasil dihapus');
    }
    public function edit($kode_kelas)
{
    $response = Http::get("{$this->apiUrl}/{$kode_kelas}");
    $kelas = json_decode($response->body(), true);
    return view('kelas.edit_kelas', compact('kelas'));
}
    public function update(Request $request, $kode_kelas)
{
    Http::asForm()->put("{$this->apiUrl}/{$kode_kelas}", $request->only(['kode_kelas', 'nama_kelas']));
    return redirect('data_kelas')->with('success', 'Data kelas berhasil diperbarui');
}



}
