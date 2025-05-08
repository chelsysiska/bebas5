<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Data Siswa</h2>
        <div class="d-flex justify-content-between mb-3">
            <div>
                <a href="kelas.php" class="btn btn-primary">Kelola Kelas</a>
                <a href="{{ route('wali.index') }}" class="btn btn-primary">Kelola Wali Murid</a>
            </div>
            <a href="/siswa/create" class="btn btn-success">Tambah Siswa</a>

        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>NIS </th>
                    <th>Nama </th>
                    <th>Jenis Kelamin </th>
                    <th>Tempat Lahir </th>
                    <th>Tanggal Lahir </th>
                    <th>Kelas </th>
                    <th>Wali Murid </th>
                    <th>Aksi </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->tempat_lahir }}</td>
                        <td>{{ $s->tanggal_lahir }}</td>
                        <td>{{ $s->nama_kelas }}</td>
                        <td>{{ $s->nama_wali }}</td>
                        <td>
                            <a href="/siswa/edit/{{ $s->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/siswa/delete/{{ $s->id }}" class="btn btn-danger btn-sm" onclick = "return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>