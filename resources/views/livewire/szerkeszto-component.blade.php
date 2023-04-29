<div>
    @if (session()->has('error'))
        <div style="display:block;background: orangered;text-align: center;color:white;">
            {{ session('error') }}
        </div>
    @endif
    <label for="select">Válaszd ki, mely járatot szeretnéd szerkeszteni:
        <select name="select" id="select" wire:model.lazy="select" wire:change="megallokRender">
            <option value="{{json_encode(["id"=>null, "tabla"=> null])}}">Nincs kiválasztva</option>
            @foreach($jaratok as $jarat)
                    <option value="{{json_encode(["id"=>$jarat->id, "modelName"=> $key])}}">{{$tipusnev}}:{{$jarat->megnevezes}}; {{$jarat->indulasi_ido}}</option>
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
            Járat: #{{$jaratData->id.") ".$jaratData->megnevezes}}}
        @endif
        @if(!empty($megalloArray))
            @foreach($megalloArray as $kulcs => $megallo)
                @livewire("megallo-component", [
                        "megallo" => $megallo,
                        "kulcs" => $kulcs,
                        empty($jaratdata->id)?:"jarat_id"=>$jaratdata->id
                    ], key($megallo->id) )
            @endforeach
        @endif

        @if(!empty($megalloData))
            @livewire("megallo-component", ["megallo"=>$megalloData,
                        empty($jaratdata->id)?:"jarat_id"=>$jaratdata->id], key($megalloData->id))
        @endif

        @if(!empty($jaratData))
            <button type="button" wire:click="newMegallo">Új megálló</button>
        @endif
    </form>
</div>
