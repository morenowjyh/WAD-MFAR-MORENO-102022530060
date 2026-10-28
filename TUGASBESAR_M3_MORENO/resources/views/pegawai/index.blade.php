<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff & Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <div class="header">
        <div>
            <h1>Staff & Pegawai</h1>
            <p>Pengelolaan Data Staff dan Pegawai Restoran</p>
        </div>

        <a href="{{ route('pegawai.create') }}" class="btn-tambah">
            + Tambah Pegawai
        </a>
    </div>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <div class="card">
        <h2>Daftar Pegawai</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Kontak</th>
                    <th>Posisi/Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pegawai as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kontak }}</td>
                        <td>{{ $item->posisi }}</td>
                        <td>
                            <a href="{{ route('pegawai.edit', $item->id) }}">
                                Edit
                            </a>

                            <form action="{{ route('pegawai.destroy', $item->id) }}"
                                  method="POST"
                                  style="display:inline;"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada data pegawai.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>