<?php
    if ($_POST['username'] == "admin" && $_POST['password'] == "1234") {
        //echo "Login Berhasil";
        session_start();
        $_SESSION['username'] = $_POST['username'] ;
        header('location:cari-form.php');
    } 
    else{
        //echo "Login Gagal";
        header('location:login-form.php');
    }
?>
