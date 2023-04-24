<div>
    <label for="jaratokselect">Válaszd ki, mely járatot szeretnéd szerkeszteni:
    <select name="jaratok" id="jaratokselect">
        @foreach($jaratok as $key => $jaratokegyesevel)
            @foreach($jaratokegyesevel as $jarat)
                    <option value="{{$jarat->id}}">{{$key}}:{{$jarat->megnevezes}}; {{$jarat->indulasi_ido}}</option>
            @endforeach
        @endforeach
    </select></label>
</div>
