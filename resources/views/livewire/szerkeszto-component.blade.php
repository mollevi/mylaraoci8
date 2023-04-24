<div>
    <label for="select">Válaszd ki, mely járatot szeretnéd szerkeszteni:
        <select name="select" id="select" wire:model.lazy="select" wire:change="megallokRender">
            <option value="{{json_encode(["id"=>null, "tabla"=> null])}}">Nincs kiválasztva</option>
            @foreach($jaratok as $key => $jaratokegyesevel)
                @php
                    switch($key){
                      case "Vonat":
                        $tipusnev = "Vonat";
                        break;
                      case "TavolsagiBusz":
                        $tipusnev = "Távolsági busz";
                        break;
                      case "HelyiBusz":
                        $tipusnev = "Helyi busz";
                        break;
                    }
                @endphp
                    @foreach($jaratokegyesevel as $jarat)
                            <option value="{{json_encode(["id"=>$jarat->id, "modelName"=> $key])}}">{{$tipusnev}}:{{$jarat->megnevezes}}; {{$jarat->indulasi_ido}}</option>
                    @endforeach
            @endforeach
        </select>
    </label>
    @if(!empty($megalloArray))
        @foreach($megalloArray as $megallo)
            <h2>#{{$megallo->sorszam}}</h2>
            <label>Neve:
                <input type="text" value="{{$megallo->nev}} " />
            </label>
        @endforeach
    @endif
</div>
