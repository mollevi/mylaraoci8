@extends("layouts.app")
@section("body")
<div style="display: inline-block">
    <form method="POST" action="{{ route('admin/profile') }}">
        @csrf

        <h1>AdminProfil</h1>

        <div>
            <label for="email">Email:</label>
            <label for="email">{{$admin->email}}</label>
        </div>

        <div>
            <label for="name">Név:</label>
            <label for="name">{{$admin->nev}}</label>
        </div>

        <div>
            <label for="password">Jelszómódosítás:</label>
            <a href="{{ route("admin/change-password") }}">Itt</a>
        </div>

        <div>
            <label for="date">Születési dátum</label>
            <label for="date">{{$admin->szuldatum}}</label>
        </div>

    </form>
    <a href="{{route("admin/home")}}"><button type="button">Vissza</button></a>
</div>
@endsection
