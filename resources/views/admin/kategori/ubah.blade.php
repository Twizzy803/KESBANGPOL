<form method="POST" action="{{ route('admin.kategori.update', $model['id']) }}">
    @csrf
    @method("PATCH")
    <input type="text" name="nama" placeholder="Nama Kategori" value="{{ $model['nama'] }}">
    <button type="submit">Simpan</button>
</form>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
