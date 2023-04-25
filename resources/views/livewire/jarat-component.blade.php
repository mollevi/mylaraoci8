<div>
    <form wire:submit.prevent="saveIt">

        <label>Leírás:
            <input type="text" placeholder="null" wire:model="jarat.leiras" wire:change.debounce.500ms="createSaveIt" value="{{$jarat->leiras}}">
        </label>
        <label>Megnevezés:
            <input type="text" placeholder="null" wire:model="jarat.megnevezes" wire:change.debounce.500ms="createSaveIt" value="{{$jarat->megnevezes}}">
        </label>
        <label>Indulási idő:
            <input type="datetime-local" wire:model="jarat.indulasi_ido" wire:change.debounce.500ms="createSaveIt" value="{{$jarat->indulasi_ido}}">
        </label>
        <label>Település(indulási):
            <input type="text" placeholder="null" wire:model="{{ isset($jarat->telepules)?"jarat.telepules":"jarat.indulasi_telepules" }}">
        </label>
        @if($createSaveIt)<button>Járat Mentés!</button>@endif<br>

    </form>
</div>
