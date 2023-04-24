<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SzerkesztoComponent extends Component
{
    public $jarat;
    public function megallokRender()
    {
        dd($this->jarat);
    }
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

