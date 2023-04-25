@extends("layouts.app")
@section("body")
<div>
    <form method="POST" action="{{ route('jegyek') }}">
        @csrf

        <h1>Itt lesznek a jegyeim</h1>

        <br>
        <div>
            <label>Vonat: 1500Ft</label><br>
            <label>Távolsági busz: 500Ft</label><br>
            <label>Helyi busz: 800FT</label>

        </div>
        <br>
        <div>
            <label for="select">Milyen jegyet szeretnél venni?!
                <select name="select" id="select" wire:model.lazy="select" wire:change="megallokRender">
                    <option value="{{json_encode(["id"=>null, "tabla"=> null])}}">Nincs kiválasztva</option>
                </select>
            </label>
        </div>
        <br>
        <a href="{{route("profile")}}"><button type="button">Vissza</button></a>
    </form>


</div>

@endsection
