<?php
include "koneksi.php";
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDOMAS</title>
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 border-bottom">
        <div class="container">
            <div class="col-md-3 mb-2 mb-md-0" style="display: flex;">
                <a href="index.php">
                    <div class="kotabatu"></div>
                </a>
                <a class="logotext" href="index.php" style="margin-left: 5px; text-decoration: none;">
                    <p>Kesbangpol</p>
                    <p style="margin-top: -15px;">Kota Batu</p>
                </a>
            </div>


            <div class="col-md-3 text-end">
                <div class="akun">
                    <?php if (isset($_SESSION['email'])) : ?>
                        <button id="btn_keluar" type="button" class="btn btn-outline-primary me-2" onclick="location.href='include/keluar.php'">KELUAR</button>
                        <?php if ($_SESSION['role'] == 'admin') {
                            echo "<a id='btn_admin' class='btn text fw-bold' href='admin\index.php'>ADMIN</a>";
                        } ?>
                    <?php else : ?>
                        <button id="btn_masuk" type="button" class="btn btn-outline-primary me-2" onclick="location.href='layers\\login.php'">MASUK</button>
                    <?php endif;  ?>
                </div>
            </div>

            <?php if (isset($_GET['dilarang'])) : ?>
                <div class="container">
                    <button type="button" class="btn btn-danger mb-4 uppercase" style="width: 100%">anda bukan admin !</button>
                </div>
            <?php endif; ?>
        </div>
    </header>



    <script src="..\main.js"></script>
</body>

</html>