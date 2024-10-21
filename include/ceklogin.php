<?php
// Load Komponen DB
include "koneksi.php";
session_start();

if (isset($_POST['masuk'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM `users_login` WHERE `email` = '$email' AND `password` = '$pass'";
    $select_login = mysqli_query($connection, $query);

    if (!$select_login) {
        die("Query Failed: " . mysqli_error($connection));
    }

    $ambil = mysqli_fetch_assoc($select_login);

    if ($ambil) {
        // Data pengguna ditemukan, simpan ke dalam session
        $_SESSION['id_login'] = $ambil['id_login'];  // Ambil ID login dari database
        $_SESSION['email'] = $ambil['email'];
        $_SESSION['role'] = $ambil['role'];

        // Cek peran pengguna
        if ($_SESSION['role'] === 'admin') {
            header('Location: ../admin');
        } else {
            header('Location: ../index.php');
        }
        exit();
    } else {
        // Jika login gagal, redirect ke halaman login dengan pesan gagal
        header('Location: ..\layers\login.php?gagal=1');
        exit();
    }
}
