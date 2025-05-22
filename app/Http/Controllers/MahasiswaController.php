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

//     public function edit($npm)
// {
//     $response = Http::get($this->apiUrl . '/' . $npm);
//   $mhs = json_decode($response->body(), true);
//     return view('mahasiswa.edit_mahasiswa', compact('mhs'));
// }

public function edit($npm)
{
    $response = Http::get($this->apiUrl . '/' . $npm);
    $mhs = json_decode($response->body(), true); // as array

    if (!$mhs) {
        abort(404, "Mahasiswa dengan npm $npm tidak ditemukan.");
    }

    return view('mahasiswa.edit_mahasiswa', ['mahasiswa' => $mhs]);
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

