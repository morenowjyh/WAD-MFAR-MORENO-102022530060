<?php

include "database.php";

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM pegawai WHERE id = $id"
);

$pegawai = mysqli_fetch_assoc($data);


if (isset($_POST['update'])) {

    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];
    $posisi = $_POST['posisi'];

    mysqli_query(
        $koneksi,
        "UPDATE pegawai SET
        nama = '$nama',
        kontak = '$kontak',
        posisi = '$posisi'
        WHERE id = $id"
    );

    header("Location: index.php");
    exit;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pegawai</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <h1>Update Pegawai</h1>
        
    </div>
</body>
</html>