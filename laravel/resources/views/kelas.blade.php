<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Data Kelas</h2>
        <div class="d-flex justify-content-between mb-3">
            <div>
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kelola Siswa</a>
                <a href="{{ route('wali.index') }}" class="btn btn-primary">Kelola Wali Murid</a>
            </div>
            <a href="/kelas/create" class="btn btn-success">Tambah Kelas</a>
        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama Kelas </th>
                    <th>Aksi </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>
                            <a href="/kelas/edit/{{ $k->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/kelas/delete/{{ $k->id }}" class="btn btn-danger btn-sm" onclick = "return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>