<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/data_mahasiswa">Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/data_kelas">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/prodi">Prodi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="text-center mb-4">
            <h2>Selamat Datang di Dashboard</h2>
            <p class="text-muted">Kelola Data Mahasiswa, Kelas, dan Prodi di sini</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="/data_mahasiswa" class="text-decoration-none">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Mahasiswa</h5>
                            <p class="card-text text-muted">Kelola data mahasiswa</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/data_kelas" class="text-decoration-none">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Kelas</h5>
                            <p class="card-text text-muted">Kelola data kelas</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/prodi" class="text-decoration-none">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Prodi</h5>
                            <p class="card-text text-muted">Kelola data program studi</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
