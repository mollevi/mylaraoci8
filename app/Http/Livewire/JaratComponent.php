<?php

namespace App\Http\Livewire;

use App\Models\Megallo;
use Livewire\Component;

class JaratComponent extends SzerkesztoComponent
{
    public $kulcs;
    public $jarat;

    public $createSaveIt = false;

    public function createSaveIt(){
        $this->createSaveIt = true;
    }
    public function saveIt(){
        $this->jarat->save();

        $this->megalloData = Megallo::make(["sorszam"=>0,"tipus"=>"Helyi busz"]);
    }

    protected $rules = [
        'jarat.leiras' => 'required|string|max:30',
        'jarat.megnevezes' => 'required|string|max:30',
        'jarat.datum' => 'required|string|max:30',
    ];
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.jarat-component');
    }
}
