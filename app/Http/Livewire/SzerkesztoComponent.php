<?php

namespace App\Http\Livewire;


use App\Models\Jarat;
use App\Models\Megallo;
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
        $this->jaratData = Jarat::make();
        session()->flash('message', 'Új helyi busz formot kaptál!');
        $this->megalloData = Megallo::make(["sorszam"=>1]);
        $this->megalloArray = null;

    }
    public function newTavolsagiBusz(){
        $this->jaratData = Jarat::make();
        session()->flash('message', 'Új távolsági busz formot kaptál!');
        $this->megalloData = Megallo::make(["sorszam"=>1]);
        $this->megalloArray = null;

    }
    public function newVonat(){
        $this->jaratData = Jarat::make();
        session()->flash('message', 'Új vonat formot kaptál!');
        $this->megalloData = Megallo::make(["sorszam"=>1]);
        $this->megalloArray = null;

    }
    public function newMegallo(){
        try {
            $this->megalloData = Megallo::make(["sorszam"=>($this->megalloArray->last()->sorszam)+1]);
        }catch(Exception $e){
            if(isEmpty($this->megalloArray)){
                $this->megalloData = Megallo::make(["sorszam"=>1]);
            }else{
                session()->flash('error', 'Valami nem jó.');
            }
        }
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $helyibuszok = Jarat::all(["id", "megnevezes", "indulasi_ido"]);//TODO

        $tavolsagibuszok = Jarat::all(["id", "megnevezes", "indulasi_ido"]); //TODO

        $vonatok = Jarat::all(["id", "megnevezes", "indulasi_ido"]);//TODO

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

