<div>
    @if (session()->has('error'))
        <div style="display:block;background: orangered;text-align: center;color:white;">
            {{ session('error') }}
        </div>
    @endif
    <label for="select">Válaszd ki, mely járatot szeretnéd szerkeszteni:
        <select name="select" id="select" wire:model.lazy="select" wire:change="megallokRender">
            <option value="{{json_encode(["id"=>null, "tabla"=> null])}}">Nincs kiválasztva</option>
            @foreach($jaratLista as $jaratOption)
                    <option value="{{ $jaratOption->id }}">{{$jaratOption->tipus}}:{{$jaratOption->megnevezes}}; {{$jaratOption->indulasi_ido}}</option>
            @endforeach
        </select>
    </label>
    <button wire:click="newHelyiBusz">Új helyi busz</button>
    <button wire:click="newTavolsagiBusz">Új távolsági busz</button>
    <button wire:click="newVonat">Új vonat</button>
    @if (session()->has('message'))
        <div style="display:inline-block;background: green;color:white;">
            {{ session('message') }}
        </div>
    @endif
    <br>
        @if(!empty($jaratData))
            @livewire("jarat-component", ["jarat" => $jaratData], key($jaratData->id))
        @endif
    <form action="">
        @if(!empty($jaratData->id))
            <br><h1>Járat: #{{$jaratData->id.") ".$jaratData->megnevezes}}}</h1>><br>
        @endif
        @if(!empty($megalloArray))
            @foreach($megalloArray as  $megallo)
                @livewire("megallo-component", [
                        "megallo" => $megallo,
                        !empty($jaratData->id)?:"jarat_id"=>$jaratData->id
                    ], key($megallo->id) )
            @endforeach
        @endif

        @if(!empty($megalloData))
            @livewire("megallo-component", ["megallo"=>$megalloData,
                        !empty($jaratData->id)?:"jarat_id"=>$jaratData->id], key($megalloData->id))
        @endif

        @if(!empty($jaratData))
            <button type="button" wire:click="newMegallo">Új megálló</button>
        @endif
    </form>
</div>
