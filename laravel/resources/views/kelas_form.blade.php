<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-3">Tambah Kelas</h2>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <b>{{ $error }}</b>
            @endforeach
        @endif

        @if (isset($kelas))
            <form method="POST" action="/kelas/update/">
                @method('PUT')
        @else
        <form method="POST" action="/kelas">
        @endif
            @csrf
            @if (isset($kelas))
                <input type="text" name="id" value="{{ $kelas->id }}" hidden>
            @endif
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" value="{{ old('name', $kelas->nama_kelas ?? '') }}" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <a href="/kelas" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>