<?php

include "database.php";

$id = $_GET['id'];

mysqli_query(
    $koneksi,
    "DELETE FROM pegawai WHERE id = $id"
);

header("Location: index.php");

exit;

?>