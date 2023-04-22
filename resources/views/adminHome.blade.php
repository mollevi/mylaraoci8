<div style="display: inline-block">
    <form method="POST" action="{{ route('adminHome') }}">
        @csrf

        <h1>Mit szeretnél?...Admin</h1>

        <a href="{{ route("menetrend") }}">Menetrendek</a>
        <a href="{{ route("adminProfil") }}">Profil</a>

    </form>
    <a href={{route("admin-loguot")}}><button>Kijelentkezés</button></a>
</div>
