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
        <!-- Judul & tombol kembali sejajar -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-white mb-0">Data Barang</h1>
            <a href="cari-form.php" class="btn btn-light fw-bold">← Kembali</a>
        </div>

        <div class="card shadow-lg p-4 bg-white">
            <table class="table table-bordered text-center align-middle">
                <tr class="table-success">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>

                <?php
                include 'lib/koneksi.php';
                $kode = $_GET['kode'];
                $sql = "SELECT * FROM barang WHERE kode LIKE '%$kode%' OR nama LIKE '%$kode%'";
                $result = mysqli_query($conn, $sql);
                $no = 1;
                $row_barang = null;

                while ($row = mysqli_fetch_array($result)) {
                    $row_barang = $row; 
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['kode']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['harga']; ?></td>
                </tr>
                <?php } ?>
            </table>

            <?php if ($row_barang) { ?>
            <div class="mt-4">
                <form action="belanja-proses.php" method="post" class="mt-2">
                    <input type="hidden" name="kode" value="<?= $row_barang['kode']; ?>">
                    <input type="number" class="form-control mb-2" name="jumlah" placeholder="Jumlah barang" required>
                    <input type="submit" class="btn btn-success w-100 fw-bold" value="Proses">
                </form> 
            </div>
            <?php } else { ?>
                <p class="text-center mt-3 text-danger fw-bold">Barang tidak ditemukan.</p>
            <?php } ?>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
