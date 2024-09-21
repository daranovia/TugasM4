<?php
session_start();
require_once "../koneksi.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO daftar (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("location:login.php");
        exit();
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($koneksi);
    }
}
?>