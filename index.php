<?php
include "include\header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css" />
  <link rel="stylesheet" href="style.css">
  <title>INDOMAS</title>
</head>

<body>
  <div class="inpo">
    <div class="px-4 pt-5 text-center border-bottom" style="background: url(bg.jpg) no-repeat center; background-size: 100%;">
      <h1 id="inpo" class="display-4 fw-bold text-body-emphasis">Indomas</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Website Indomas merupakan sarana untuk mendaftarkan organisasi dan memperoleh pengakuan resmi dari negara. Selain itu, website ini juga menyediakan informasi mengenai kegiatan yang sedang dilakukan oleh organisasi yang sudah terdaftar di Badan Kesatuan Bangsa dan Politik.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3" onclick="location.href='layers\\form.php'">Form Pengajuan Indomas</button>
          <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3" onclick="location.href='//drive.google.com/file/d/17WajAkNz1IHmzVxPsbR3fPPyIAg_GVAG/view?usp=sharing'">Panduan Pengajuan Indomas</button>
        </div>
      </div>
    </div>
    <br>
  </div>
  <?php include "layers\media.php"; ?>

  <?php include "include\\footer.php"; ?>


  <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>