<?php
    session_start();
    if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Barang</title>
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

    <div class="container mt-5">
        <h1 class="text-white">Cari Barang</h1>
        <div class="card shadow-lg p-4 bg-white">
            <form action="cari-proses.php" method="get">
                <input class="form-control mb-3" type="text" name="kode" placeholder="Kode Barang" required>
                <input class="btn btn-success w-100 fw-bold" type="submit" value="CARI">
            </form>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    } else {
        header('location:login-form.php');
    }
?>
