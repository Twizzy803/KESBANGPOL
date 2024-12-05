<form method="POST" action="{{ route('admin.akun.update', $model['id']) }}">
    @csrf
    @method("PATCH")
    <input type="email" name="email" placeholder="Email" value="{{ $model['email'] }}">
    <input type="password" name="password" placeholder="Masukkan Password">
    <select name="role">
        <option value="admin">Admin</option>
        <option value="ormas">Ormas</option>
    </select>
    <button type="submit">Simpan</button>
</form>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
