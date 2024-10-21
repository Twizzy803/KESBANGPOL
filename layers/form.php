<?php
include "..\include\koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="..\node_modules\bootstrap\dist\css\bootstrap.css" />
    <link rel="stylesheet" href="..\style.css">
    <title>INDOMAS</title>
</head>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 border-bottom">
    <div class="container">
        <div class="col-md-3 mb-2 mb-md-0" style="display: flex;">
            <a href="../index.php">
                <div class="kotabatu"></div>
            </a>
            <a class="logotext" href="../index.php" style="margin-left: 5px; text-decoration: none;">
                <p>Kesbangpol</p>
                <p style="margin-top: -15px;">Kota Batu</p>
            </a>
        </div>


        <div class="col-md-3 text-end">
            <div class="akun">
                <?php if (isset($_SESSION['email'])) : ?>
                    <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='../include/keluar.php'">KELUAR</button>
                    <?php if ($_SESSION['role'] == 'admin') {
                        echo "<a class='btn text-dark fw-bold' href='admin\index.php'>ADMIN</a>";
                    } ?>
                <?php else : ?>
                    <button id="btn_masuk" type="button" class="btn btn-outline-primary me-2" onclick="location.href='login.php'">MASUK</button>
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

<body>
    <div class="px-4 pt-5 mb-4 text-center border-bottom" style="background-image: url(../bg1.png);height: 25em;">
        <h1 style="color: white; font-family: 'Poppins' sans-serif; font-weight: bold; margin-top: 5%;">Formulir Pengajuan, Legalitas dan Rencana Kerja Organisasi Masyarakat Kota Batu</h1>
        <p style="color: white;">pemerintahan kota batu badan kesatuan bangsa dan politik balai kota among tani 
            jl. panglima sudirman no 507 kota batu 65313</p>
    </div>
    <form action="../include/prosesform.php" method="POST" enctype="multipart/form-data" style="margin-left: 2%;">
        <div class="pemohon">
            <label for="pemohon">Nama Pemohon</label> <br>
            <input type="text" name="pemohon" id="pemohon" class="form-control" placeholder="Nama Pemohon" aria-label="default input example">
        </div><br>
        <div class="telp">
            <label for="telp">Nomor Telephone</label> <br>
            <input type="text" name="telp" id="telp" class="form-control" placeholder="Telp" aria-label="default input example">
        </div><br>
        <div class="email" style="margin-top: 0;">
            <label for="email">Email</label> <br>
            <input type="text" name="email" id="email" class="form-control" placeholder="example@gmail.com" aria-label="default input example">
        </div><br>
        <div class="pass" style="margin-top: 0; margin-bottom: 0;">
            <label for="pass">Password (Untuk Daftar Akun)</label> <br>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="********" aria-label="default input example">
        </div><br>
        <div class="ormas">
            <label for="ormas">Nama Organisasi</label> <br>
            <input type="text" name="ormas" id="ormas" class="form-control" placeholder="Nama Ormas" aria-label="default input example">
        </div><br>
        <div class="alamat">
            <label for="alamat">Alamat Kantor Organisasi</label> <br>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Kantor" aria-label="default input example">
        </div><br>
        <div class="struktur">
            <label for="struktur">Struktur Pengurus (Ketua, Sekretaris, Bendahara)</label> <br>
            <input type="text" name="struktur" id="struktur" class="form-control" placeholder="Struktur Pengurus" aria-label="default input example">
        </div><br>
        <div class="list">
            <label for="kajian">Bidang Kajian</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" value="politik" id="politik">
                <label class="form-check-label" for="politik">Politik</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" value="lingkungan" id="lingkungan">
                <label class="form-check-label" for="lingkungan">Lingkungan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" value="pertahanan" id="pertahanan">
                <label class="form-check-label" for="pertahanan">Pertahanan dan Keamanan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" value="pendidikan" id="pendidikan">
                <label class="form-check-label" for="pendidikan">Pendidikan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" value="lainnya" id="lainnya">
                <label class="form-check-label" for="lainnya">
                    Yang lain:
                    <input type="text" name="kategori_lain" id="kategori_lain" class="form-control" placeholder="Lainnya" aria-label="default input example">
                </label>
            </div>
        </div><br>
        <div class="jumlah">
            <label for="jumlah">Jumlah Anggota</label> <br>
            <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah Anggota" aria-label="default input example">
        </div><br>
        <div class="mb-3">
            <label for="dokumen" class="form-label">Dokumen pendukung aktifitas, berupa foto, video, lokasi kantor, atau program rencana kerja</label>
            <p style="font-size: small; color: #00000080; margin-top:-1%; margin-bottom: 0;">Upload maksimum 5 file yang didukung. Maks 10 MB per file.</p>
            <input class="form-control" name="dokumen" type="file" id="dokumen">
        </div> <br>
        <button id="jsKirim" class="kirim" name="kirim" type="submit" style=" width: 98%;background-color: #00A650; border-radius: 5px; border: none; color: white; font-family: 'Poppins' sans-serif; font-weight: bold;">KIRIM</button>
    </form>

    <?php include "../include/footer.php" ?>

    <script src="..\main.js"></script>
</body>

</html>