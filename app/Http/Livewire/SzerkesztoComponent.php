<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SzerkesztoComponent extends Component
{
    public $jaratok;
    public function render()
    {
        $query

        $this->jaratok = $query->get();

        return view('livewire.szerkeszto-component');
    }
}

/* $query = DB::table('megallo')
    ->select(['vonat.indulasi_telepules as vonat_indulasi_telepules', 'vonat.indulasi_ido as vonat_indulasi_ido', 'tavolsagibusz.indulasi_telepules as tavolsagibusz_indulasi_telepules', 'tavolsagibusz.indulasi_ido as tavolsagibusz_indulasi_ido', 'helyibusz.telepules as helyibusz_telepules', 'helyibusz.indulasi_ido as helyibusz_indulasi_ido', 'megallo.telepules', 'megallo.sorszam', 'megallo.ido'])
    ->leftJoin('vonat', 'megallo.vonat_id', '=', 'vonat.id')
    ->leftJoin('tavolsagibusz', 'megallo.tavolsagibusz_id', '=', 'tavolsagibusz.id')
    ->leftJoin('helyibusz', 'megallo.helyibusz_id', '=', 'helyibusz.id');
