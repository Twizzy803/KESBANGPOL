<ul>
    <li><a href="{{ route('admin.akun.tambah') }}">Tambah Akun</a></li>
</ul>
<table>
    <tr>
        <th>Email</th>
        <th>Role</th>
        <th>Dibuat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($models as $model)
        <tr>
            <td>{{ $model['email'] }}</td>
            <td>{{ $model['role'] }}</td>
            <td>{{ $model['created_at'] }}</td>
            <td>
                <form action="{{ route('admin.akun.delete', $model['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Hapus</button>
                </form> ||
                <a href="{{ route('admin.akun.detail', $model['id']) }}">Detail</a>
            </td>
        </tr>
    @endforeach
</table>
