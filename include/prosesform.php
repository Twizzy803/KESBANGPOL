<?php
// Sertakan file koneksi ke database
include "koneksi.php";
session_start();

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
        $file_name = preg_replace('/[^A-Za-z0-9\-\_\.]/', '_', $_FILES['dokumen']['name']); // Ganti karakter khusus
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $upload_dir = '../uploads/';

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
    $query = "INSERT INTO pendaftar (pemohon, telp, email, pass, ormas, alamat, struktur, kategori, jumlah, dokumen) 
              VALUES ('$pemohon', '$telp', '$email', '$pass', '$ormas', '$alamat', '$struktur', '$kategori', '$jumlah', '$file_name')";

    // Eksekusi query dan cek apakah data berhasil disimpan
    if (mysqli_query($connection, $query)) {
        // Jika berhasil, simpan informasi ke session
        $_SESSION['pemohon'] = $pemohon;

        // Redirect ke index.php
        header("Location: ../index.php");
        exit(); // Pastikan untuk menghentikan eksekusi script setelah redirect
    } else {
        // Tampilkan pesan kesalahan jika query gagal
        echo "Error: " . mysqli_error($connection);
    }
}
