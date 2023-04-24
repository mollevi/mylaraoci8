<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SzerkesztoComponent extends Component
{
    public $select;

    public $megalloArray = array();

    public function megallokRender()
    {
        $selectArray = json_decode($this->select, true);
        $id = $selectArray["id"];
        $modelName = "App\\Models\\".$selectArray["modelName"];
        //dd($modelName);
        $model = new $modelName;
        $this->megalloArray = $model->find($id)->megallok();
        return;
    }

    public function render()
    {
        $query = DB::table('helyibusz')
            ->select(["helyibusz.id", "helyibusz.megnevezes", "helyibusz.indulasi_ido"]);
        $helyibuszok = $query->get();

        $query = DB::table('tavolsagibusz')
            ->select(["id", "megnevezes", "indulasi_ido"]);
        $tavolsagibuszok = $query->get();

        $query = DB::table('vonat')
            ->select(["id", "megnevezes", "indulasi_ido"]);
        $vonatok = $query->get();

        return view('livewire.szerkeszto-component', [
            "jaratok" => [
                "HelyiBusz" => $helyibuszok,
                "TavolsagiBusz" => $tavolsagibuszok,
                "Vonat" => $vonatok
            ]]);
    }
}

