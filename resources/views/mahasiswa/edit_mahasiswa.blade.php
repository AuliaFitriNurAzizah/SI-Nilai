<!-- <h2>Edit Mahasiswa</h2>
<form action="/update_mahasiswa/{{ $mhs['npm'] }}" method="POST">
    @csrf
    <input type="text" name="npm" value="{{ $mhs['npm'] }}" disabled><br>
    <input type="text" name="nama_mhs" value="{{ $mhs['nama_mhs'] }}"><br>
    <input type="text" name="kode_kelas" value="{{ $mhs['kode_kelas'] }}"><br>
    <input type="number" name="id_prodi" value="{{ $mhs['id_prodi'] }}"><br>
    <button type="submit">Update</button>
</form> -->

<form action="/update_mahasiswa/{{ $mhs['npm'] }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" class="form-control" id="npm" value="{{ $mhs['npm'] }}" readonly>
    </div>
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value="{{ $mhs['nama_mhs'] }}" required>
    </div>
    <div class="mb-3">
        <label for="kode_kelas" class="form-label">Kode Kelas</label>
        <input type="text" name="kode_kelas" class="form-control" id="kode_kelas" value="{{ $mhs['kode_kelas'] }}">
    </div>
    <div class="mb-3">
        <label for="id_prodi" class="form-label">ID Prodi</label>
        <input type="number" name="id_prodi" class="form-control" id="id_prodi" value="{{ $mhs['id_prodi'] }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

