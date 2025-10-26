<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <style>
    /* Animasi muncul ke atas */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Tampilan card */
    .card {
      max-width: 450px;
      width: 100%;
      border-radius: 10px;
      animation: fadeInUp 0.6s ease;
      position: relative; /* penting untuk posisi tombol di dalam card */
    }

    /* Tombol kembali di kanan atas */
    .btn-kembali {
      position: absolute;
      top: 15px;
      right: 15px;
      font-weight: 500;
      z-index: 1;
    }
  </style>
</head>

<body class="bg-success d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-lg p-4 bg-white position-relative">
    <a href="barang.php" class="btn btn-outline-success btn-sm btn-kembali">Kembali</a>

    <h1 class="text-center text-success mb-4 mt-3">Tambah Barang</h1>

    <form action="barang-tambah-proses.php" method="post">
      <div class="mb-3">
        <input type="text" class="form-control" name="kode" placeholder="Kode Barang" required>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="nama" placeholder="Nama Barang" required>
      </div>
      <div class="mb-3">
        <input type="number" class="form-control" name="stok" placeholder="Stok Barang" required>
      </div>
      <div class="mb-4">
        <input type="number" class="form-control" name="harga" placeholder="Harga Barang" required>
      </div>
      <button type="submit" class="btn btn-success w-100 fw-bold">Simpan</button>
    </form>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
