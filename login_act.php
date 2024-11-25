<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    //cek ke database / table users
    $qry = mysqli_query($con, "SELECT * FROM users WHERE 
    username = '$username' AND password = '$password'");
    $data = mysqli_fetch_assoc($qry);
    if($data != NULL){
        //diberi akses login
        session_start();
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $username;

        echo "<script>alert('Login berhasil'); 
        window.location='home.php';</script>";
    }else{
        echo "<script>alert('Username dan Password salah / tidak ditemukan'); 
        window.location='login.php';</script>";
    }

}