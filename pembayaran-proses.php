<?php
$jumlah_uang = $_POST['jumlah_uang'];
$total_belanja = $_POST['total_belanja'];

$kembalian = $jumlah_uang  - $total_belanja;

echo 'Uang Kembalian: Rp. ' .$kembalian;

?>