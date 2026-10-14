<?php

include "database.php";

$data = mysqli_query($koneksi, "SELECT * FROM pegawai");

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Staff & Pegawai</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">

        <div>

            <h1>Staff & Pegawai</h1>

            <p>
                Pengelolaan data staff dan pegawai restoran
            </p>

        </div>

        <a href="tambah.php" class="btn-tambah">
            Tambah Pegawai
        </a>

    </div>


    <div class="card">

        <h2>Daftar Pegawai</h2>

        <table>

            <tr>

                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Kontak</th>
                <th>Posisi/Jabatan</th>
                <th>Update</th>

            </tr>


            <?php

            $no = 1;

            while ($pegawai = mysqli_fetch_assoc($data)) {

            ?>

            <tr>

                <td>
                    <?= $no++; ?>
                </td>

                <td>
                   <?= $pegawai ["nama"] ?>
                </td>

                <td>
                    <?= $pegawai['kontak']; ?>
                </td>

                <td>
                    <?= $pegawai['posisi']; ?>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $pegawai['id']; ?>" onclick="return confirm('Yakin ingin hapus pegawai ini?')">
                    Hapus
                    </a>
                    <a href="edit.php">
                        Edit
                    </a>
                </td>

            </tr>

            <?php

            }

            ?>

        </table>

    </div>

</div>

</body>

</html>