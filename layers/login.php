<?php
include "..\include\koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\style.css">
    <title>INDOMAS</title>
</head>

<body>
    <div class="login">
        <div class="logo_login">
        <img src="../assets/gambar/logobatu.png" alt="">
        <img src="../assets/gambar/polije.png" alt="" style="margin-left: 83px;">
        </div>
        <form id="form_login" action="..\include\ceklogin.php" method="POST">
            <h2 style="font-weight: normal;">Login</h2>
            <div class="email">
                <input style="width: 210%; height: 40px; border-radius: 5px; border: 1px solid #4E4E4E;" type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="pass">
                <input style="width: 210%; height: 40px; border-radius: 5px; border: 1px solid #4E4E4E;" type="password" name="password" id="password" placeholder="Password">
            </div>
            <button style="width: 95%; height: 35px; border-radius: 5px; border: none; background-color: #00A650;font-family: 'Poppins', sans-serif; color: white; font-weight: bold;" 
            name="masuk" type="submit">MASUK</button>
        </form>
    </div>


    <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
</body>

</html>