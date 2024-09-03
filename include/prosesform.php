<?php
include "include/koneksi.php"; // Menyertakan file koneksi database
session_start(); // Memulai session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $pemohon = $_POST['pemohon'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $ormas = $_POST['ormas'];
    $alamat = $_POST['alamat'];
    $struktur = $_POST['struktur'];
    $kategori = isset($_POST['kategori']) ? $_POST['kategori'] : null;
    $kategori_lain = isset($_POST['kategori_lain']) ? $_POST['kategori_lain'] : '';
    $jumlah = $_POST['jumlah'];

    // Validasi data (misalnya: cek apakah ada yang kosong)
    if (empty($pemohon) || empty($telp) || empty($email) || empty($pass) || empty($ormas) || empty($alamat) || empty($struktur) || empty($kategori) || empty($jumlah)) {
        echo "Semua kolom wajib diisi!";
        exit;
    }

    // Jika kategori "lainnya" dipilih, gunakan isian tambahan
    if ($kategori === 'lainnya' && !empty($kategori_lain)) {
        $kategori = $kategori_lain;
    }

    // Upload file dokumen
    $file_name = '';
    if (isset($_FILES['dokumen']) && $_FILES['dokumen']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'pdf', 'docx', 'mp4'];
        $file_name = $_FILES['dokumen']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $upload_dir = 'uploads/';

        if (!in_array($file_ext, $allowed)) {
            echo "Format file tidak diizinkan!";
            exit;
        }

        // Pindahkan file ke direktori tujuan
        if (!move_uploaded_file($file_tmp, $upload_dir . $file_name)) {
            echo "Gagal mengupload file!";
            exit;
        }
    } else {
        echo "Harap unggah dokumen pendukung!";
        exit;
    }

    // Query untuk menyimpan data ke database
    // Langsung menyimpan password tanpa hashing
    $query = "INSERT INTO pendaftar (pemohon, telp, email, pass, ormas, alamat, struktur, kategori, jumlah, dokumen) 
              VALUES ('$pemohon', '$telp', '$email', '$pass', '$ormas', '$alamat', '$struktur', '$kategori', '$jumlah', '$file_name')";

    if (mysqli_query($connection, $query)) {
        echo "Data berhasil disimpan!";
        // Jika berhasil, Anda dapat menyimpan informasi penting ke session, misalnya:
        $_SESSION['pemohon'] = $pemohon;
        // Redirect atau tampilkan pesan sukses
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
