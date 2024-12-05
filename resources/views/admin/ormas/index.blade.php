<table>
    <tr>
        <th>Pemohon</th>
        <th>Nama Ormas</th>
        <th>Kategori Ormas</th>
        <th>Dibuat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($ormaes as $ormas)
        <tr>
            <td>{{ $ormas['pemohon'] }}</td>
            <td>{{ $ormas['nama_ormas'] }}</td>
            <td>{{ $ormas->kategoriOrmas['nama'] }}</td>
            <td>{{ $ormas['created_at'] }}</td>
            <td>
                <a href="{{ route('admin.ormas.detail', $ormas['id']) }}">Detail</a>
            </td>
        </tr>
    @endforeach
</table>
