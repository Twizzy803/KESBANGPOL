<?php
include "include\header.php";

$showModal = isset($_SESSION['showModal']) && $_SESSION['showModal'] === true;

if ($showModal) {
  unset($_SESSION['showModal']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css" />
  <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>INDOMAS</title>
</head>

<body>
  <div class="inpo">
    <div class="bg_aja px-4 pt-5 text-center border-bottom">
      <h1 id="inpo" class="display-4 fw-bold text-body-emphasis">Indomas</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Website Indomas merupakan sarana untuk mendaftarkan organisasi dan memperoleh pengakuan resmi dari negara. Selain itu, website ini juga menyediakan informasi mengenai kegiatan yang sedang dilakukan oleh organisasi yang sudah terdaftar di Badan Kesatuan Bangsa dan Politik.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <?php if (!isset($_SESSION['email'])) : ?>
            <button id="Formbutton" type="button" class="btn btn-primary btn-lg px-4 me-sm-3" onclick="location.href='layers\\form.php'">Form Pengajuan Indomas</button>
          <?php endif; ?>
          <button id="Docbutton" type="button" class="btn btn-primary btn-lg px-4 me-sm-3" onclick="location.href='//drive.google.com/file/d/17WajAkNz1IHmzVxPsbR3fPPyIAg_GVAG/view?usp=sharing'">Panduan Pengajuan Indomas</button>
        </div>
      </div>
    </div>
    <br>
  </div>

  <div id="jsModal" class="modal">
    <div class="modal-content">
      <span id="closeModal" class="close">&times;</span>
      <h4> Pengajuan, Legalitas dan Rencana Kerja Organisasi Masyarakat Kota Batu.</h4>
      <hr>
      <h2 style="color:#00A650">Selesai</h2>
      <p>Tunggu 3 - 4 hari untuk melakukan Login</p>
    </div>
  </div>



  <?php include "layers\media.php"; ?>

  <?php include "include\\footer.php"; ?>

  <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
  <script src="main.js"></script>
  <script>
    <?php if ($showModal): ?>
      localStorage.setItem('showModal', 'true');
    <?php endif; ?>
  </script>
</body>

</html>