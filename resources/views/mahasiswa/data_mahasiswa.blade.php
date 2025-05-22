<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
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
        table th, table td {
            vertical-align: middle;
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
        <!-- Tambah link lain sesuai kebutuhan -->
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Data Mahasiswa</h2>
            <a href="/tambah_mahasiswa" class="btn btn-success">+ Tambah Mahasiswa</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs['npm'] }}</td>
                        <td>{{ $mhs['nama_mhs'] }}</td>
                        <td>{{ $mhs['kode_kelas'] ?? '-' }}</td>
                        <td>{{ $mhs['id_prodi'] ?? '-' }}</td>
                        <td>
                            <a href="/edit_mahasiswa/{{ $mhs['npm'] }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/hapus_mahasiswa/{{ $mhs['npm'] }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Data kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
