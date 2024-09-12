<?php
include "..\include\koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDOMAS</title>
</head>

<body>
    <h1>Formulir Pengajuan, Legalitas dan Rencana Kerja Organisasi Masyarakat Kota Batu</h1>
    <form action="../include/prosesform.php" method="POST" enctype="multipart/form-data">
        <div class="pemohon">
            <label for="pemohon">Nama Pemohon</label> <br>
            <input type="text" name="pemohon" id="pemohon" class="form-control" placeholder="Default input" aria-label="default input example">
        </div>
        <div class="telp">
            <label for="telp">Nomor Telephone</label> <br>
            <input type="text" name="telp" id="telp" class="form-control" placeholder="Default input" aria-label="default input example">
        </div>
        <div class="email">
            <label for="email">Email</label> <br>
            <input type="text" name="email" id="email" class="form-control" placeholder="Default input" aria-label="default input example">
        </div>
        <div class="pass">
            <label for="pass">Password (Untuk Daftar Akun)</label> <br>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="********" aria-label="default input example">
        </div>
        <div class="ormas">
            <label for="ormas">Nama Organisasi</label> <br>
            <input type="text" name="ormas" id="ormas" class="form-control" placeholder="Default input" aria-label="default input example">
        </div>
        <div class="alamat">
            <label for="alamat">Alamat Kantor Organisasi</label> <br>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Default input" aria-label="default input example">
        </div>
        <div class="struktur">
            <label for="struktur">Struktur Pengurus (Ketua, Sekretaris, Bendahara)</label> <br>
            <input type="text" name="struktur" id="struktur" class="form-control" placeholder="Default input" aria-label="default input example">
        </div>
        <div class="list">
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
                    <input type="text" name="kategori_lain" id="kategori_lain" class="form-control" placeholder="Default input" aria-label="default input example">
                </label>
            </div>
        </div>
        <div class="jumlah">
            <label for="jumlah">Jumlah Anggota</label> <br>
            <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Default input" aria-label="default input example">
        </div>
        <div class="mb-3">
            <label for="dokumen" class="form-label">Dokumen pendukung aktifitas, berupa foto, video, lokasi kantor, atau program rencana kerja</label> <br>
            <input class="form-control" name="dokumen" type="file" id="dokumen">
        </div>
        <button name="kirim" type="submit">KIRIM</button>
    </form>


</body>

</html>