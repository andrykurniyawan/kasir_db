<?php
include 'lib/koneksi.php';

if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];
    mysqli_query($conn, "DELETE FROM barang WHERE kode = '$kode'");
}

// redirect ke daftar barang
header('Location: barang.php');
exit;
?>
