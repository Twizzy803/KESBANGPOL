<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>INDOMAS</title>
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="container">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="index.php">
                    <img src="assets\gambar\kotabatu.png" alt="" class="kotabatu">
                </a>
            </div>

            <!-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#inpoindomas" class="nav-link px-2">Inpo Indommas</a></li>
                <li><a href="#containt" class="nav-link px-2">Features</a></li>
                <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul> -->


            <div class="col-md-3 text-end">
                <div class="akun">
                    <?php if (isset($_SESSION['email'])) : ?>
                        <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='include/keluar.php'">KELUAR</button>
                        <?php if ($_SESSION['role'] == 'admin') {
                            echo "<a class='btn text-dark fw-bold' href='admin\index.php'>ADMIN</a>";
                        } ?>
                    <?php else : ?>
                        <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='login.php'">MASUK</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='daftar.php'">DAFTAR</button>
                    <?php endif;  ?>
                </div>
            </div>

            <?php if (isset($_GET['dilarang'])) : ?>
                <div class="container">
                    <button type="button" class="btn btn-danger mb-4 uppercase" style="width: 100%">anda bukan admin !</button>
                </div>
            <?php endif; ?>

            <!-- <div id="myMenu" class="iconmenu">
                <a href="#mySidebar" class="hambergermenu" onclick="openNav()">
                    <img src="assets\gambar\hambergermenu.png" alt="">
                </a>

            </div>
        </div>
        <div id="mySidebar" class="sidebar">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="javascript:viod(0)" class="hambergermenu2" onclick="closeNav()">X</a></li>
                <li><a href="#inpoindomas" class="nav-link px-2">Inpo Indommas</a></li>
                <li><a href="#containt" class="nav-link px-2">Features</a></li>
                <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul> -->

            <!-- <div class="col-md-3 text-end">
                <div class="akun2">
                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                    <button type="button" class="btn btn-primary">Sign-up</button>
                </div>
            </div> -->
        </div>
    </header>



    <script src="script.js"></script>
</body>

</html>