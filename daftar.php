<?php
include "include\cekdaftar.php";
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
    <div class="daftar">
        <h1>Daftar</h1>
        <form action="include\cekdaftar.php" method="POST">
            <div class="email">
                <label for="email">Email</label> <br>
                <input type="email" name="email" id="email" placeholder="name@google.com">
            </div>
            <div class="pass">
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password" placeholder="********">
            </div>
            <button name="daftar" type="submit">DAFTAR</button>
            <p class="sign-in">Sudah Punya Akun
                <a href="login.php">Masuk</a>
            </p>
        </form>
    </div>


    <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
</body>

</html>