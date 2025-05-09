<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wali Murid</title>
    <link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Data Wali Murid</h2>
        <div class="d-flex justify-content-between mb-3">
            <div>
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kelola Siswa</a>
                <a href="{{ route('kelas.index') }}" class="btn btn-primary">Kelola Kelas</a>
            </div>
            <a href="/wali/create" class="btn btn-success">Tambah Wali</a>

        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama Wali </th>
                    <th>Kontak </th>
                    <th>Aksi </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wali as $w)
                    <tr>
                        <td>{{ $w->nama_wali }}</td>
                        <td>{{ $w->kontak }}</td>
                        <td>
                            <a href="/wali/edit/{{ $w->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/wali/delete/{{ $w->id }}" class="btn btn-danger btn-sm" onclick = "return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>