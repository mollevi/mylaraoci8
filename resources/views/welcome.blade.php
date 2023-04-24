@extends("layouts.app")
@section("body")
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
        <h1 style="margin-bottom: 90px;">Üdvözlünk az Adatbázis alapú rendszerek Menetrend oldalán!</h1>

        <div style="margin: 5px; display: inline-block;">
            <a href="{{ route("menetrend") }}" style="background-color: #4c848f; padding: 10px 20px; text-decoration: none; border-radius: 10px;">Menetrendek</a>
            <a href="{{ route("login") }}" style="background-color: #4c848f; padding: 10px 20px; text-decoration: none; border-radius: 10px;">Regisztráció/Bejelentkezés</a>
        </div>
    </div>

@endsection
