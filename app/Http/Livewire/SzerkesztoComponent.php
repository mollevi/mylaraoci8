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

    public $jaratLista;

    public $jaratData;

    public $megalloLista;

    public $megalloData;

    public function megallokRender()
    {
        $this->jaratData = Jarat::find($this->select);
        $this->megalloLista = $this->jaratData->megallok()->get() ;
        $this->megalloData = null;
        return;
    }

    public function newHelyiBusz(){
        $this->jaratData = Jarat::make();
        session()->flash('message', 'Új helyi busz formot kaptál!');
        $this->megalloLista = null;

    }
    public function newTavolsagiBusz(){
        $this->jaratData = Jarat::make();
        session()->flash('message', 'Új távolsági busz formot kaptál!');
        $this->megalloLista = null;
    }

    public function newVonat(){
        $this->jaratData = Jarat::make();
        session()->flash('message', 'Új vonat formot kaptál!');
        $this->megalloLista = null;

    }
    public function newMegallo(){
        try {
            if(is_null($this->megalloLista))
            {
                $this->megalloData = Megallo::make(["sorszam"=>(
                isset($this->megalloLista->last()->sorszam) ?
                    $this->megalloLista->last()->sorszam + 1 : 0), "jarat_id"=>$this->jaratData->id]);
            }else{
                $this->megalloData = Megallo::make([
                    "sorszam"=>($this->megalloLista->last()->sorszam + 1),
                    "jarat_id"=>$this->jaratData->id]);
            }
        }catch(Exception $e){
            if(isEmpty($this->megalloLista)){
                $this->megalloData = Megallo::make(["sorszam"=>1]);
            }else{
                session()->flash('error', 'Valami nem jó.');
            }
        }
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.szerkeszto-component');
    }

    public function boot(){
        $this->jaratLista = Jarat::all();
    }
}

