<table>
    <tr>
        <th>Pemohon</th>
        <th>Telp</th>
        <th>Email</th>
        <th>Password</th>
        <th>Nama Ormas</th>
        <th>Alamat</th>
        <th>Kategori</th>
        <th>status</th>
        <th>Tanggal Pengajuan</th>
    </tr>
    <tr>
        <td>{{ $ormas['pemohon'] }}</td>
        <td>{{ $ormas['telp'] }}</td>
        <td>{{ $ormas['email'] }}</td>
        <td>{{ $ormas['password'] }}</td>
        <td>{{ $ormas['nama_ormas'] }}</td>
        <td>{{ $ormas['alamat'] }}</td>
        <td>{{ $ormas->kategoriOrmas['nama'] }}</td>
        <td>{{ $ormas['status'] }}</td>
        <td>{{ $ormas['created_at'] }}</td>
    </tr>
</table>
{!! $ormas['struktur_pengurus'] !!}
<br>
Dokumen pendukung:
<a href="{{ asset('dokumen_ormas/' . $ormas['nama_ormas'] . '/' . $ormas->dokumen['path']) }}">{{ $ormas->dokumen['nama'] }}</a>
@if($ormas->status == 'pending')
<form action="{{ route('admin.ormas.setuju', $ormas['id']) }}" method="POST">
    @csrf
    <button type="submit">Setuju</button>
</form>
@elseif($ormas->status == 'setuju')
<form action="{{ route('admin.ormas.hapusAkses', $ormas['id']) }}" method="POST">
    @csrf
    <button type="submit">Hapus Akses Login</button>
</form>
@endif

@if(Session::has('success'))
{!! Session::get('success') !!}
@endif

@if(Session::has('error'))
{!! Session::get('error') !!}
@endif