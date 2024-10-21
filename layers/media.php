<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDOMAS</title>
</head>

<body>
    <div class="media">
        <h1>Ceritakan saja</h1>
        <?php if (isset($_SESSION['email'])) : ?>
            <form action="include\kirim.php" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: row;">
                <input type="text" name="cerita" id="cerita" placeholder="Ceritakan Saja" required>
                <input class="form-control" name="foto" id="jsFoto" type="file" style="display: none;" required>
                <input type="hidden" name="id_login" value="<?php echo $_SESSION['id_login']; ?>">
                <button name="upload" id="uploadButton" type="button">Foto/Video</button>
                <button name="submit" id="submitButton" type="submit" style="display: none;">Upload</button>
            </form>
        <?php endif
        ?>
        <br>
        <!-- // Query untuk mengambil semua cerita -->
        <?php
        $query = "SELECT c.cerita, c.foto, c.tanggal, u.nama_ormas FROM cerita_saja c JOIN users_login u ON c.id_login = u.id_login ORDER BY c.tanggal DESC";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            // Looping untuk menampilkan semua cerita
            while ($ambil = mysqli_fetch_assoc($result)) {
                $cerita = $ambil['cerita'];
                $foto = $ambil['foto'];
                $tanggal = new DateTime($ambil['tanggal']);
                $formatter = new IntlDateFormatter(
                    'id_ID',
                    IntlDateFormatter::LONG,
                    IntlDateFormatter::NONE
                );
                $formatter_date = $formatter->format($tanggal);
                $nama_ormas = $ambil['nama_ormas']; // Bisa dipakai untuk menampilkan email pengguna yang mengunggah cerita

                // Tampilkan dalam bentuk card
                echo '
        <div class="card" style="width: 45%; margin-bottom: 20px;">
        <div class="card-body">
            <h4 class="card-text"><small class="text-bold">' . $nama_ormas . '</small></h4>
            <p style= "font-size: 12px; color: gray;">' . $formatter_date . '</p>
            <p class="card-text">' . $cerita . '</p>
        </div>
        <img src="foldercerita/' . $foto . '" class="card-img-top" alt="">
        </div>';
            }
        } else {
            echo "<p>Tidak ada cerita yang ditemukan.</p>";
        }
        ?>
    </div>

</body>

</html>