@extends("layouts.app")
@section("body")
<div style="display: inline-block">
    @csrf

    <h1>Menetrend szerkesztés</h1>

    @livewire("szerkeszto-component")

    <a href="{{route("menetrend-listazas")}}"><button type="button">Vissza</button></a>
</div>
@endsection
