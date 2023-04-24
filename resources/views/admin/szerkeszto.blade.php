@extends("layouts.app")
@section("body")
<div style="display: inline-block">
    <form method="POST" action="{{ route('szerkeszto') }}">
        @csrf

        <h1>Menetrend szerkesztés</h1>

        @livewire("szerkeszto-component")

    </form>
    <button type="button" onclick="history.back();">Vissza</button>
</div>
@endsection
