<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>INDOMAS</title>
</head>

<body>
    <div class="media">
        <h1>Ceritakan saja</h1>
        <?php if (isset($_SESSION['email'])) : ?>
            <form action="include/kirim.php" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: row;">
                <input type="text" name="cerita" id="cerita" placeholder="Ceritakan Saja">
                <input class="form-control" name="foto" id="foto" type="file">
                <input type="hidden" name="id_login" value="<?php echo $_SESSION['id_login']; ?>">
                <button name="upload" type="submit">Upload</button>
            </form>
        <?php endif
        ?>
        <br>
        <!-- // Query untuk mengambil semua cerita -->
        <?php $query = "SELECT c.cerita, c.foto, u.email FROM cerita_saja c JOIN users_login u ON c.id_login = u.id_login ORDER BY c.id_cerita DESC";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            // Looping untuk menampilkan semua cerita
            while ($ambil = mysqli_fetch_assoc($result)) {
                $cerita = $ambil['cerita'];
                $foto = $ambil['foto'];
                $email = $ambil['email']; // Bisa dipakai untuk menampilkan email pengguna yang mengunggah cerita

                // Tampilkan dalam bentuk card
                echo '
        <div class="card" style="width: 45%; margin-bottom: 20px;">
            <img src="foldercerita/' . $foto . '" class="card-img-top" alt="">
            <div class="card-body">
                <p class="card-text">' . $cerita . '</p>
                <p class="card-text"><small class="text-muted">Diceritakan oleh: ' . $email . '</small></p>
            </div>
        </div>';
            }
        } else {
            echo "<p>Tidak ada cerita yang ditemukan.</p>";
        }
        ?>
    </div>
</body>

</html>