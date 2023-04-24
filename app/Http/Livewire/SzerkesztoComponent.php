<?php

namespace App\Http\Livewire;

use App\Models\HelyiBusz;
use App\Models\Megallo;
use App\Models\TavolsagiBusz;
use App\Models\Vonat;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SzerkesztoComponent extends Component
{
    public $select;

    public $jaratData;

    public $megalloArray;

    public function megallokRender()
    {
        $selectArray = json_decode($this->select, true);
        $id = $selectArray["id"];
        $modelName = "App\\Models\\".$selectArray["modelName"];
        $model = new $modelName;
        $this->jaratData = $model->find($id);
        $this->megalloArray = $model->find($id)->megallok();
        return;
    }

    public function newHelyiBusz(){
        $this->jaratData = new HelyiBusz();
    }
    public function newTavolsagiBusz(){
        $this->jaratData = new TavolsagiBusz;
    }
    public function newVonat(){
        $this->jaratData = new Vonat;
    }
    public function newMegallo(){
        $this->megalloArray->push(new Megallo);
    }

    public function render()
    {
        $helyibuszok = HelyiBusz::all(["id", "megnevezes", "indulasi_ido"]);

        $tavolsagibuszok = TavolsagiBusz::all(["id", "megnevezes", "indulasi_ido"]);

        $vonatok = Vonat::all(["id", "megnevezes", "indulasi_ido"]);

        return view('livewire.szerkeszto-component', [
            "jaratok" => [
                "HelyiBusz" => $helyibuszok,
                "TavolsagiBusz" => $tavolsagibuszok,
                "Vonat" => $vonatok
            ]]);
    }
}

