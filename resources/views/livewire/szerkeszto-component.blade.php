<div>
    <label for="jaratokselect">Válaszd ki, mely járatot szeretnéd szerkeszteni:
    <select name="jaratok" id="jaratokselect" wire:model="jarat" wire:change="megallokRender">
        @foreach($jaratok as $key => $jaratokegyesevel)
            @foreach($jaratokegyesevel as $jarat)
                    <option value="{{json_encode($jarat)}}">{{$key}}:{{$jarat->megnevezes}}; {{$jarat->indulasi_ido}}</option>
            @endforeach
        @endforeach
    </select></label>


</div>
