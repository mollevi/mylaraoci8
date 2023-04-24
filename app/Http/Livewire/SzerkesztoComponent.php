<?php

namespace App\Http\Livewire;

use App\Models\HelyiBusz;
use App\Models\Megallo;
use App\Models\TavolsagiBusz;
use App\Models\Vonat;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class SzerkesztoComponent extends Component
{
    public $select;

    public $jaratData;

    public $megalloArray;
    public $megalloData;

    public function megallokRender()
    {
        $selectArray = json_decode($this->select, true);
        $id = $selectArray["id"];
        $modelName = "App\\Models\\".$selectArray["modelName"];
        $model = new $modelName;
        $this->jaratData = $model->find($id);
        $this->megalloArray = $model->find($id)->megallok();
        $this->megalloData = null;

        return;
    }

    public function newHelyiBusz(){
        $this->jaratData = new HelyiBusz();
        session()->flash('message', 'Új helyi busz formot kaptál!');

    }
    public function newTavolsagiBusz(){
        $this->jaratData = new TavolsagiBusz;
        session()->flash('message', 'Új távolsági busz formot kaptál!');

    }
    public function newVonat(){
        $this->jaratData = new Vonat;
        session()->flash('message', 'Új vonat formot kaptál!');

    }
    public function newMegallo(){
        try {
            $this->megalloData = Megallo::make(["sorszam"=>($this->megalloArray->last()->sorszam)+1]);
        }catch(Exception){
            if(isEmpty($this->megalloArray)){
                $this->megalloData = Megallo::make(["sorszam"=>1]);
            }else{
                session()->flash('error', 'Valami nem jó.');
            }
        }
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

    public function szerkeszt(){

    }
}

