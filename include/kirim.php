<?php
include "koneksi.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_login = $_POST['id_login'];
    $cerita = $_POST['cerita'];

    // Handle file upload
    $file_name = '';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_name = $_FILES['foto']['name'];

        // Buat nama file unik
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_name = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9-_\.]/', '_', $file_name);
        $upload_dir = '../foldercerita/';
        $upload_path = $upload_dir . $file_name;

        // Pindahkan file ke folder yang diinginkan
        if (!move_uploaded_file($file_tmp, $upload_path)) {
            echo "Gagal mengupload file!";
            exit;
        }
    }

    // Simpan data ke database
    $query = "INSERT INTO cerita_saja (id_login, cerita, foto) VALUES ('$id_login', '$cerita', '$file_name')";
    if (mysqli_query($connection, $query)) {
        // Redirect setelah berhasil
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
