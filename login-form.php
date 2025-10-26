<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-success d-flex align-items-center justify-content-center vh-100">
    
    <div class="card shadow-lg p-4 bg-white" style="max-width: 400px; width: 100%;">
        <h2 class="text-center text-success mb-4">Login</h2>
        <form action="login-proses.php" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn btn-success w-100 fw-bold" value="LOGIN">
        </form>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
