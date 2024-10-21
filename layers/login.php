<?php
include "..\include\koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="..\node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\node_modules\bootstrap-icons\font\bootstrap-icons.min.css">
    <link rel="stylesheet" href="..\style.css">
    <title>INDOMAS</title>
</head>

<body>
    <div class="login">
        <div class="logo_login">
            <img src="../assets/gambar/logobatu.png" alt="" style="width: 112px;">
            <img src="../assets/gambar/polije.png" alt="" style="margin-left: 50px; width: 145px;">
        </div>
        <?php if (isset($_GET['gagal'])): ?>
            <button class="btn btn-danger mb-4 uppercase" style="margin-top: 2%; width:40%">
                Email atau kata sandi salah!
            </button>
        <?php endif; ?>
        <form class="form_login" action="..\include\ceklogin.php" method="POST">
            <h2 style="font-weight: normal;">Login</h2>
            <div class="email">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="Password">
                <button id="jsTogglepassword" type="button" style="width: auto;background-color:white;border:1px solid #4E4E4E;color:black;">🙈</button>
            </div>
            <button class="masukbutton"
                name="masuk" type="submit">MASUK</button>
        </form>
    </div>

    <script src="..\main.js"></script>
    <script src="..\node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
</body>

</html>