<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SzerkesztoComponent extends Component
{
    public $jarat;
    public function render()
    {
        $query = DB::table('helyibusz')
            ->select(["helyibusz.id", "helyibusz.megnevezes", "helyibusz.indulasi_ido"]);
        $helyibuszok = $query->get();

        $query = DB::table('tavolsagibusz')
            ->select(["id", "megnevezes", "indulasi_ido"]);
        $tavolsagibusz = $query->get();

        $query = DB::table('vonat')
            ->select(["id", "megnevezes", "indulasi_ido"]);
        $vonat = $query->get();

        return view('livewire.szerkeszto-component', [
            "jaratok" => [
                "helyi" => $helyibuszok,
                "tavbusz" => $tavolsagibusz,
                "vonat" => $vonat
            ]]);
    }
}

/* $query = DB::table('megallo')
    ->select(['vonat.indulasi_telepules as vonat_indulasi_telepules', 'vonat.indulasi_ido as vonat_indulasi_ido', 'tavolsagibusz.indulasi_telepules as tavolsagibusz_indulasi_telepules', 'tavolsagibusz.indulasi_ido as tavolsagibusz_indulasi_ido', 'helyibusz.telepules as helyibusz_telepules', 'helyibusz.indulasi_ido as helyibusz_indulasi_ido', 'megallo.telepules', 'megallo.sorszam', 'megallo.ido'])
    ->leftJoin('vonat', 'megallo.vonat_id', '=', 'vonat.id')
    ->leftJoin('tavolsagibusz', 'megallo.tavolsagibusz_id', '=', 'tavolsagibusz.id')
    ->leftJoin('helyibusz', 'megallo.helyibusz_id', '=', 'helyibusz.id');*/
