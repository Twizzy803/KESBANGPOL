<?php
include "include/sidebar.php";
include "function.php"; ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="admin.css">
  <title>ADMIN INDOMAS</title>
</head>

<body>
  <div class="container">
    <div class="home">
      <h1>Home</h1>
      <hr>
      <div class="home1">
        <div class="card" style="width: 15rem;">
          <a href="data.php" style="text-decoration: none; color:#000">
            <div class="card-body">
              <h5 class="card-title">Data Ormas</h5>
              <div class="fungsi" style="margin-right: 1rem;">
                <i class="bi bi-file-earmark-bar-graph"></i>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php getDataOrmas() ?></h6>
              </div>
            </div>
          </a>
        </div>
        <div class="card" style="width: 15rem;">
          <a href="daftar.php" style="text-decoration: none; color: #000;">
            <div class="card-body">
              <h5 class="card-title">Daftar Akun</h5>
              <div class="fungsi" style="margin-right: 7rem;">
                <i class="bi bi-person-plus"></i>
                <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
              </div>
            </div>
          </a>
        </div>
        <div class="card" style="width: 15rem;">
          <a href="akun.php" style="text-decoration: none; color: #000;">
            <div class="card-body">
              <h5 class="card-title">Akun Ormas</h5>
              <div class="fungsi" style="margin-right: 1rem;">
                <i class="bi bi-person-badge"></i>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php getAkunOrmas() ?></h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>






  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>