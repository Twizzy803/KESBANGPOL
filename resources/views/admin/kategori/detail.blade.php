<table>
    <tr>
        <th>Nama</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Dirubah</th>
    </tr>
    <tr>
        <td>{{ $model['nama'] }}</td>
        <td>{{ $model['created_at'] }}</td>
        <td>{{ $model['updated_at'] }}</td>
    </tr>
</table>
<a href="{{ route('admin.kategori.ubah', $model['id']) }}">Ubah</a>