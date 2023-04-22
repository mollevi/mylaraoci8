<div style="display: inline-block">
    <form method="POST" action="{{ route('userHome') }}">
        @csrf

        <h1>Mit szeretnél?...</h1>

        <a href="{{ route("menetrend") }}">Menetrendek</a>
        <a href="{{ route("profil") }}">Profil</a>

    </form>
    <a href={{route("felhasznalo-logout")}}><button>Kijelentkezés</button></a>
</div>

