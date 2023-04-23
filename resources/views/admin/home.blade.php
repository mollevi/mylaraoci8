<div style="display: inline-block">
    <form method="POST" action="{{ route('admin/home') }}">
        @csrf

        <h1>Mit szeretnél?...Admin</h1>

        <a href="{{ route("menetrend") }}">Menetrendek</a>
        <a href="{{ route("admin/profile") }}">Profil</a>

    </form>
    <a href={{route("admin/logout")}}><button>Kijelentkezés</button></a>
</div>
