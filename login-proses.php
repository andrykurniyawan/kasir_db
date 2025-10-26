<?php
    if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
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