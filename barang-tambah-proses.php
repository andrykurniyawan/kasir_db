<?php
include "lib/koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$sql = "INSERT INTO barang (kode, nama, stok, harga) VALUES ('$kode', '$nama', '$stok', '$harga')";

mysqli_query($conn, $sql);

header('location:barang.php');

?>