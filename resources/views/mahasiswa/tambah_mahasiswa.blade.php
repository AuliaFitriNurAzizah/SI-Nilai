<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
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
        <a href="/data_kelas">Data Kelas</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Tambah Mahasiswa</h2>
        <form action="/simpan_mahasiswa" method="POST">
            @csrf
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" required>
            </div>
            <div class="mb-3">
                <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" required>
            </div>
            <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kode Kelas</label>
                <input type="text" name="kode_kelas" class="form-control" id="kode_kelas">
            </div>
            <div class="mb-3">
                <label for="id_prodi" class="form-label">ID Prodi</label>
                <input type="number" name="id_prodi" class="form-control" id="id_prodi">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>
</html>
