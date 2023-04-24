@extends("layouts.app")
@section("body")
    <h1>Üdvözlünk az Adatbázis alapú rendszerek Menetrend oldalán!</h1>

    <a href="{{ route("menetrend") }}">Menetrendek</a>
    <a href="{{ route("login") }}">Regisztráció/Bejelentkezés</a>
@endsection
