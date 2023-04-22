<div style="display: inline-block">
    <form method="POST" action="{{ route('profil') }}">
        @csrf

        <h1>Profil</h1>

        <div>
            <label for="email">Email:</label>
            <label for="email">{{$felhasznalo->email}}</label>
        </div>

        <div>
            <label for="name">Név:</label>
            <label for="name">{{$felhasznalo->nev}}</label>
        </div>

        <div>
            <label for="password">Jelszómódosítás:</label>
            <a href="{{ route("changePassword") }}">Itt</a>
        </div>

        <div>
            <label for="text">Lakcím</label>
            <label for="text">{{$felhasznalo->iranyitoszam.' '.$felhasznalo->utca.' '.$felhasznalo->hazszam}}</label>
        </div>

        <div>
            <label for="date">Születési dátum</label>
            <label for="date">{{$felhasznalo->szuldatum}}</label>
        </div>

        <div>
            <label for="jegy">Jegyek megtekintése:</label>
            <a href="{{ route("jegyek") }}">Jegyeim</a>
        </div>

        <button type="button" onclick="history.back();">Vissza</button>
    </form>
</div>

