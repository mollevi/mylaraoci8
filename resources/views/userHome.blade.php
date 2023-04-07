<div style="display: inline-block">
    <form method="POST" action="{{ route('userHome') }}">
        @csrf

        <a href="{{ route("menetrend") }}">Menetrendek</a>
        <a href="{{ route("profil") }}">Profil</a>

        <button>Kijelentkezés</button>
    </form>
</div>

