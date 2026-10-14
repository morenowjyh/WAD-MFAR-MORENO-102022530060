<?php

include "database.php";


if (isset($_POST['simpan'])) {

    $nama = $_POST['nama'];

    $kontak = $_POST['kontak'];

    $posisi = $_POST['posisi'];


    mysqli_query(
        $koneksi,
        "INSERT INTO pegawai (nama, kontak, posisi)
         VALUES ('$nama', '$kontak', '$posisi')"
    );


    header("Location: index.php");

    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Tambah Pegawai</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Tambah Pegawai</h1>


    <div class="card form-card">

        <form method="POST">


            <label>
                Nama Pegawai
            </label>

            <input
                type="text"
                name="nama"
                required
            >


            <label>
                Kontak
            </label>

            <input
                type="text"
                name="kontak"
                required
            >


            <label>
                Posisi/Jabatan
            </label>

            <select name="posisi" required>

                <option value="">
                    Pilih Posisi
                </option>

                <option value="Chef">
                    Chef
                </option>

                <option value="Waiter">
                    Waiter
                </option>

                <option value="Kasir">
                    Kasir
                </option>

            </select>


            <br><br>


            <button type="submit" name="simpan">
                Simpan
            </button>


            <a href="index.php">
                Kembali
            </a>


        </form>

    </div>

</div>

</body>

</html>