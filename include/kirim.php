<?php
include "koneksi.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi: pastikan cerita dan foto tidak kosong
    if (empty($_POST['cerita'])) {
        echo "Cerita harus diisi!";
        exit();
    }

    if (empty($_FILES['foto']['name'])) {
        echo "Foto harus di-upload!";
        exit();
    }

    $id_login = $_POST['id_login'];
    $cerita = $_POST['cerita'];

    // Upload foto jika ada
    $file_name = '';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_name = $_FILES['foto']['name'];
        // Ganti nama file untuk menghindari duplikat
        $file_name = preg_replace('/[^a-zA-Z0-9-_\.]/', '_', $file_name);
        $upload_dir = '../foldercerita/';
        $upload_path = $upload_dir . uniqid() . "_" . $file_name;

        if (!move_uploaded_file($file_tmp, $upload_path)) {
            echo "Gagal mengupload file!";
            exit();
        }
    } else {
        echo "Harap upload foto!";
        exit();
    }

    // Masukkan data ke database
    $query = "INSERT INTO cerita_saja (id_login, cerita, foto) VALUES ('$id_login', '$cerita', '$upload_path')";
    if (mysqli_query($connection, $query)) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
