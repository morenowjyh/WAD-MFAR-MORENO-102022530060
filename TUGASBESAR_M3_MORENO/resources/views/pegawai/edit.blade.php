<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>Edit Pegawai</h1>
    <p>Ubah data pegawai sesuai kebutuhan.</p>

    <div class="card form-card">

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama">Nama Pegawai</label>
            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama', $pegawai->nama) }}"
                required
            >

            <label for="kontak">Kontak</label>
            <input
                type="text"
                id="kontak"
                name="kontak"
                value="{{ old('kontak', $pegawai->kontak) }}"
                required
            >

            <label for="posisi">Posisi/Jabatan</label>
            <select id="posisi" name="posisi" required>
                <option value="">Pilih Posisi</option>

                <option value="Chef" {{ old('posisi', $pegawai->posisi) == 'Chef' ? 'selected' : '' }}>
                    Chef
                </option>

                <option value="Waiter" {{ old('posisi', $pegawai->posisi) == 'Waiter' ? 'selected' : '' }}>
                    Waiter
                </option>

                <option value="Kasir" {{ old('posisi', $pegawai->posisi) == 'Kasir' ? 'selected' : '' }}>
                    Kasir
                </option>
            </select>

            <button type="submit">Update</button>

            <a href="{{ route('pegawai.index') }}">Kembali</a>
        </form>

    </div>
</div>

</body>
</html>