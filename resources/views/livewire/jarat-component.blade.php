<form wire:submit.prevent="saveit">

    <label>Leírás:
        <input type="text" placeholder="null" wire:model.lazy="jarat.leiras">
    </label>
    <label>Megnevezés:
        <input type="text" placeholder="null" wire:model.lazy="jarat.megnevezes">
    </label>
    <label>Indulási idő:
        <input type="datetime-local" wire:model.lazy="jarat.indulasi_ido">
    </label>
    <label>Település(indulási):
        <input type="text" placeholder="null" wire:model.lazy="{{ isset($jarat->telepules)?"jarat.telepules":"jarat.indulasi_telepules" }}">
    </label>

    <input type="submit" value="Mentés">
</form>
