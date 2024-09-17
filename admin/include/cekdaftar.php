<?php
// Load Komponen DB
include "../include/koneksi.php";
session_start();
if (isset($_POST['daftar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_users = "INSERT INTO `users_login`(`id_login`, `email`,`password`, `role`) VALUES ('','$email','$password','ormas')";
    $insert_users = mysqli_query($connection, $query_users);
    if (!$insert_users) {
        die('Query Failed' . mysqli_error($connection));
    } else {
        header('Location: ../index.php');
    }
}
