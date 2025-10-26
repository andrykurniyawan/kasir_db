<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-success">
   <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="cari-form.php">Transaksi</a>
            <a class="nav-link" href="barang.php">Barang</a>
            <a class="nav-link" href="logout-proses.php">Logout</a>
        </div>
        </div>
    </div>
    </nav>
    <!-- navbar -->

    <div class="container mt-4">
        <h1 class="text-white">Data Barang</h1>
        <a class="btn btn-info mb-2 float-end" href="barang-tambah.php">+ Tambah</a>

        <table class="table table-bordered bg-white text-center align-middle shadow-sm">
            <tr class="table-success">
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Total Bayar</th>
                <th>Aksi</th>
            </tr>

            <?php
            include 'lib/koneksi.php';
            $sql = "SELECT * FROM barang";
            $result = mysqli_query($conn, $sql);
            $no = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['kode']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['stok']; ?></td>
                <td><?= $row['harga']; ?></td>
                <td>
            <a class="btn btn-warning btn-sm" href="barang-edit.php?kode=<?= $row['kode']; ?>">Edit</a>
            <a class="btn btn-danger btn-sm" href="barang-delate.php?kode=<?= $row['kode']; ?>">Hapus</a>

        </td>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
