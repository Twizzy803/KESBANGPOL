<?php
include "../include/koneksi.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="style.css">
    <title>ADMIN INDOMAS</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px; height: 46.7rem; position: sticky; z-index: 9999;">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Dashboard</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link link-body-emphasis" aria-current="page">
                    <i class="bi bi-house-door"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="data.php" class="nav-link active">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                    Data Ormas
                </a>
            </li>
            <li>
                <a href="daftar.php" class="nav-link link-body-emphasis">
                    <i class="bi bi-person-plus"></i>
                    Daftar Akun
                </a>
            </li>
            <li>
                <a href="akun.php" class="nav-link link-body-emphasis">
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
            <h1>Data Ormas</h1>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemohon</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Nama Ormas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Struktur</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Dokumen</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1; ?>
                    <?php $ambil = $connection->query("SELECT * FROM pendaftar WHERE id"); ?>
                    <?php while ($data = $ambil->fetch_assoc()) { ?>

                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['pemohon']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['pass']; ?></td>
                            <td><?php echo $data['ormas']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['struktur']; ?></td>
                            <td><?php echo $data['kategori']; ?></td>
                            <td><?php echo $data['jumlah']; ?></td>
                            <td><a href="../berkasdaftar/<?php echo $data['dokumen']; ?>">Download</a></td>
                        </tr>
                        <?php $no++;  ?>
                    <?php } ?>



                </tbody>
            </table>
        </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>