@extends("layouts.app")
@section("body")
<div style="display: inline-block">
    <form method="POST" action="{{ route('profile') }}">
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
            <a href="{{ route("change-password") }}">Itt</a>
        </div>

        <div>
            <label for="text">Lakcím</label>
            <label for="text">{{$felhasznalo->lakcim}}</label>
        </div>

        <div>
            <label for="date">Születési dátum</label>
            <label for="date">{{$felhasznalo->szuldatum}}</label>
        </div>

        <div>
            <label for="jegy">Jegyek megtekintése:</label>
            <a href="{{ route("jegyek") }}">Jegyeim</a>
        </div>

        <a href="{{route("home")}}"><button type="button">Vissza</button></a>
    </form>
</div>
@endsection
