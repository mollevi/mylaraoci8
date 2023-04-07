<div style="display: inline-block">
    <form method="POST" action="{{ route('profil') }}">
        @csrf

        <div>
            <label for="email">Email</label>
            <label for="email">Ez az emailem</label> <!-- TODO! -->
        </div>

        <div>
            <label for="name">Név</label>
            <label for="email">Ez a nevem</label> <!-- TODO! -->
        </div>

        <div>
            <label for="password">Password</label>
            <label for="email">Ez a jelszavam</label>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <a href="{{ route("changePassword") }}">Jelszo módosítás</a>
        </div>

        <div>
            <label for="jegy">Jegyek megtekintése:</label>
            <a href="{{ route("jegyek") }}">Jegyeim</a>
        </div>
    </form>
</div>

