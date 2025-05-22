<!-- <h2>Edit Mahasiswa</h2>
<form action="/update_mahasiswa/{{ $mhs['npm'] }}" method="POST">
    @csrf
    <input type="text" name="npm" value="{{ $mhs['npm'] }}" disabled><br>
    <input type="text" name="nama_mhs" value="{{ $mhs['nama_mhs'] }}"><br>
    <input type="text" name="kode_kelas" value="{{ $mhs['kode_kelas'] }}"><br>
    <input type="number" name="id_prodi" value="{{ $mhs['id_prodi'] }}"><br>
    <button type="submit">Update</button>
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 60px;
        }
        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: #000;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #e9ecef;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            padding-top: 80px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SI Nilai</a>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="/data_mahasiswa">Data Mahasiswa</a>
        <a href="/tambah_mahasiswa">Tambah Mahasiswa</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Edit Mahasiswa</h2>
       <form action="/update_mahasiswa/{{ $mahasiswa['npm'] }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="npm" value="{{ $mahasiswa['npm'] }}" disabled><br>
    <input type="text" name="nama_mhs" value="{{ $mahasiswa['nama_mhs'] }}"><br>
    <input type="text" name="kode_kelas" value="{{ $mahasiswa['kode_kelas'] }}"><br>
    <input type="number" name="id_prodi" value="{{ $mahasiswa['id_prodi'] }}"><br>
    <button type="submit">Update</button>
</form>
    </div>

</body>
</html>

