@extends("layouts.app")
@section("body")
<div style="display: inline-block">
    <h1>Menetrend szerkesztés</h1>

    @livewire("szerkeszto-component")

    <a href="{{route("menetrend")}}"><button type="button">Vissza</button></a>
</div>
@endsection
