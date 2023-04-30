<div>
    <form style="border: 1px solid black; margin: 10px;" wire:submit.prevent="saveIt">

        <label style="border: 1px solid black; margin: 10px;">Megnevezés:
            <input type="text" placeholder="Megnevezés" wire:model="jarat.megnevezes" wire:keydown.debounce.500ms="createSaveIt" value="{{$jarat->megnevezes}}">
        </label>
        <label style="border: 1px solid black; margin: 10px;">Leírás:
            <input type="text" placeholder="Leírás" wire:model="jarat.leiras" wire:keydown.debounce.500ms="createSaveIt" value="{{$jarat->leiras}}">
        </label>
        <label style="border: 1px solid black; margin: 10px;">Indulási idő:
            <input type="datetime-local" wire:model="jarat.datum" wire:keydown.debounce.500ms="createSaveIt" value="{{$jarat->datum}}">
        </label>
        @if($createSaveIt)<button type="submit" style="border: 1px solid black; margin: 10px;">Járat Mentés!</button>@endif<br>

    </form>
</div>
