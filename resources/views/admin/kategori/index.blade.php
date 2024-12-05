<ul>
    <li><a href="{{ route('admin.kategori.tambah') }}">Tambah Kategori</a></li>
</ul>
<table>
    <tr>
        <th>Nama</th>
        <th>Dibuat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($categories as $kategori)
        <tr>
            <td>{{ $kategori['nama'] }}</td>
            <td>{{ $kategori['created_at'] }}</td>
            <td>
                <form action="{{ route('admin.kategori.delete', $kategori['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Hapus</button>
                </form> ||
                <a href="{{ route('admin.kategori.detail', $kategori['id']) }}">Detail</a>
            </td>
        </tr>
    @endforeach
</table>
