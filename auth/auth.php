<?php

session_start();
include "../koneksi.php";

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

     if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
     
        if(($password == $row['password'])){ 
            header("location:../index.php");
        } else {
            header("location:login.php?pesan=Maaf, password salah");
        }
    } else {
        header("location:login.php?pesan=Maaf, username tidak ditemukan");
    }
}


?>