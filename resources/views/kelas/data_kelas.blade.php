<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Kelas</title>
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
        <!-- <a href="/tambah_kelas">Data </a> -->
        <!-- Tambah menu lainnya jika perlu -->
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Data Kelas</h2>
            <a href="/tambah_kelas" class="btn btn-success">+ Tambah Kelas</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
           <tbody>
                @forelse ($kelas as $kls)
                    <tr>
                        <td>{{ $kls['kode_kelas'] }}</td>
                        <td>{{ $kls['nama_kelas'] }}</td>
                        <td>
                            <a href="/edit_kelas/{{ $kls['kode_kelas'] }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="/hapus_kelas/{{$kls['kode_kelas'] }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Data kelas kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
