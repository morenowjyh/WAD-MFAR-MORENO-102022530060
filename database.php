<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "restoran"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>