<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-head.tinymce-config />
</head>

<body>
    <form method="POST" action="{{ route('site.pengajuan.simpan') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="pemohon" placeholder="Nama Pemohon">
        <br>
        <input type="text" name="no_telp" placeholder="Nomor Telphone">
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <input type="text" name="nama_ormas" placeholder="Nama Ormas">
        <br>
        <input type="text" name="alamat" placeholder="Alamat">
        <br>
        <textarea id="myeditorinstance" name="struktur_pengurus">
            Masukkan Informasi Struktur Kepengurusan, seperti:
            <ul>
                <li>Ketua<li>
                <li>Sekretaris<li>
                <li>Bendahara<li>
                <li>Dan Lainnya.<li>
            </ul>
        </textarea>
        <br>
        <select name="kategori_ormas">
            @foreach($kategories as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @endforeach
        </select>
        <br>
        <input type="file" name="dokumen">
        <br>
        <button type="submit">Simpan</button>
    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
