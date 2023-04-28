@extends("layouts.app")
@section("body")
<div style="display: block">
    <h1>Üdvözlünk a kezdőlapodon, {{Auth::user()->nev}}</h1>
    <a href="{{ route("menetrend") }}">
        <button style="padding:5px 10px; border: 1px solid black; border-radius: 10px; margin: 20px 20px; background-color: #c5a23f;">
            Menetrendek
        </button>
    </a>
    <a href="{{ route("admin/profile") }}">
        <button style="padding:5px 10px; border: 1px solid black; border-radius: 10px; margin: 20px 20px; background-color: #c5a23f;">
            Profil
        </button>
    </a>

    <a href={{route("admin/logout")}}>
        <button style="padding:10px 10px; border: 2px solid red; border-radius: 5px; margin: 20px 20px; background-color: #c5a23f;">
           Kijelentkezés
        </button>
    </a>
</div>
@endsection
