@extends("layouts.app")
@section("body")
<div style="display: inline-block">
    <form method="POST" action="{{ route('home') }}">
        @csrf

        <h1>Mit szeretnél?...</h1>

        <a href="{{ route("menetrend") }}">Menetrendek</a>
        <a href="{{ route("profile") }}">Profil</a>

    </form>
    <a href={{route("logout")}}><button>Kijelentkezés</button></a>
</div>
@endsection
