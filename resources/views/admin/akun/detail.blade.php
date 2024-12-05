<table>
    <tr>
        <th>Email</th>
        <th>Role</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Dirubah</th>
    </tr>
    <tr>
        <td>{{ $model['email'] }}</td>
        <td>{{ $model['role'] }}</td>
        <td>{{ $model['created_at'] }}</td>
        <td>{{ $model['updated_at'] }}</td>
    </tr>
</table>
<a href="{{ route('admin.akun.ubah', $model['id']) }}">Ubah</a>