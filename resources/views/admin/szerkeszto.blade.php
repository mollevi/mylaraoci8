@extends("layouts.app")
@section("body")
<div style="display: inline-block">
        @csrf

        <h1>Menetrend szerkesztés</h1>

        @livewire("szerkeszto-component")

    <button>Vissza</button>
</div>
@endsection
