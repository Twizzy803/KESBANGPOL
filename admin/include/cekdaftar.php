<?php
// Load Komponen DB
include "C:\\xampp\htdocs\KESBANGPOL\include\koneksi.php";
session_start();
if (isset($_POST['daftar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama_ormas = $_POST['nama_ormas'];

    $query_users = "INSERT INTO `users_login`(`id_login`, `email`,`password`, `nama_ormas`, `role`) VALUES ('','$email','$password', '$nama_ormas','ormas')";
    $insert_users = mysqli_query($connection, $query_users);
    if (!$insert_users) {
        die('Query Failed' . mysqli_error($connection));
    } else {
        header('Location: ../index.php');
    }
}
