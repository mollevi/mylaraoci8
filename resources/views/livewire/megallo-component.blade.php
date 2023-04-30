<div>
    <strong>#{{$megallo->sorszam}}. megállója:</strong>
    <label>
        Neve:<input type="text" wire:model="megallo.nev" wire:keydown.debounce.500ms="createSave"
            value="{{$megallo->nev}}" />
        <input type="number" wire:model="megallo.kilometer" wire:keydown.debounce.500ms="createSave"
            value="{{$megallo->kilometer}}" />
        <input type="text" wire:model="megallo.telepules" wire:keydown.debounce.500ms="createSave"
            value="{{$megallo->telepules}}" />
        <input type="text" wire:model="megallo.ido" wire:keydown.debounce.500ms="createSave"
            value="{{$megallo->ido}}" />
        <input type="hidden" wire:model="megallo.sorszam"
            value="{{$megallo->sorszam}}" />
        @if($createSave)<button wire:click.prevent="save">Megálló Mentés!</button>@endif<br>
    </label>
</div>
