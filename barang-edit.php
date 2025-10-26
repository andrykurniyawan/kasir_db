<?php
include 'lib/koneksi.php';

// Ambil data barang
$kode = $_GET['kode'];
$q = mysqli_query($conn, "SELECT * FROM barang WHERE kode='$kode'");
$data = mysqli_fetch_assoc($q);

// Simpan perubahan
if (isset($_POST['simpan'])) {
    $kode_baru = $_POST['kode'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    // Update data berdasarkan kode lama
    mysqli_query($conn, "UPDATE barang SET kode='$kode_baru', nama='$nama', stok='$stok', harga='$harga' WHERE kode='$kode'");
    header("Location: barang.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-success">
<div class="container mt-4 bg-white p-4 rounded shadow">
    <h3 class="text-center mb-3">Edit Barang</h3>

    <form method="POST">
        <div class="mb-2">
            <label>Kode Barang</label>
            <input type="text" name="kode" class="form-control" value="<?= $data['kode']; ?>" required>
        </div>
        <div class="mb-2">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
        </div>
        <div class="mb-2">
            <label>Jumlah</label>
            <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
        </div>

        <a href="barang.php" class="btn btn-secondary">Kembali</a>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
