<?php
include "include/cekdaftar.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="admin.css">
    <title>ADMIN INDOMAS</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;height: 47rem; position: fixed; z-index: 99;background-color: #00A650 !important;">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32" style="background-image: url(assets/kotabatu.png);width: 35%;height: 100%;background-size: cover;">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <h2 style="margin-bottom: 6%; font-size: 10px; color: #fff; font-weight:bold">Formulir Pengajuan, Legalitas dan Rencana Kerja Organisasi Masyarakat Kota Batu</h2>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link link-body-emphasis" aria-current="page" style="color: #fff !important; font-weight:bold">
                    <i class="bi bi-house-door"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="data.php" class="nav-link link-body-emphasis" style="color: #fff !important; font-weight:bold">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                    Data Ormas
                </a>
            </li>
            <li>
                <a href="daftar.php" class="nav-link active" style="color: #000; background-color: #fff; font-weight: bold;">
                    <i class="bi bi-person-plus"></i>
                    Daftar Akun
                </a>
            </li>
            <li>
                <a href="akun.php" class="nav-link link-body-emphasis" style="color: #fff !important; font-weight:bold">
                    <i class="bi bi-person-badge"></i>
                    Akun Ormas
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/kotabatu.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>BAKESBANGPOL</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="../include/keluar.php">Sign out</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="daftar">
            <h1>Daftar Akun</h1>
            <hr>
            <form action="include/cekdaftar.php" method="POST">
                <div class="email">
                    <label for="email">Email</label> <br>
                    <input type="email" name="email" id="email" placeholder="name@google.com" required>
                </div>
                <div class="pass">
                    <label for="password">Password</label> <br>
                    <input type="password" name="password" id="password" placeholder="********" required>
                </div>
                <div class="nama_ormas">
                    <label for="nama_ormas">Nama Ormas</label> <br>
                    <input type="nama_ormas" name="nama_ormas" id="nama_ormas" placeholder="Nama Ormas" required>
                </div>
                <button class="btn_daftar" name="daftar" type="submit">DAFTAR</button>
            </form>
        </div>
    </div>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>