<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Belanja</title>
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
        <!-- Judul & tombol sejajar -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-white mb-0">Total Belanja</h1>
            <a href="cari-proses.php?kode=<?php echo $_POST['kode']; ?>" class="btn btn-light fw-bold">← Kembali</a>

        </div>

        <div class="card shadow-lg p-4 bg-white">
            <table class="table table-bordered text-center align-middle">
                <tr class="table-success">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Total Bayar</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>123456789</td>
                    <td>Buku</td>
                    <td><?php echo $_POST['jumlah']; ?></td>
                    <td><?php echo $_POST['jumlah'] * 2000; ?></td>
                </tr>
            </table>

            <h4 class="mt-4">Hitung Kembalian</h4>
            <form action="pembayaran-proses.php" method="post" class="mt-2">
                <input type="number" class="form-control mb-2" name="jumlah_uang" placeholder="Masukkan jumlah uang" required>
                <input type="hidden" name="total_belanja" value="<?php echo $_POST['jumlah'] * 2000; ?>">
                <input type="submit" class="btn btn-success w-100 fw-bold" value="Hitung">
            </form>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
