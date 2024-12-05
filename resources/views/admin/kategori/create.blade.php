<form method="POST" action="{{ route('admin.kategori.simpan') }}">
    @csrf
    <input type="text" name="nama" placeholder="Nama Kategori">
    <button type="submit">Simpan</button>
</form>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
