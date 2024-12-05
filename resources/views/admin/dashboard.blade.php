<nav>
    <ul>
        <li><a href="{{ route('admin.akun.index') }}">Akun</a></li>
        <li><a href="{{ route('admin.kategori.index') }}">Kategori</a></li>
        <li><a href="{{ route('admin.ormas.index') }}">Ormas</a></li>
    </ul>
</nav>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Keluar</button>
</form>