<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MegalloComponent extends Component
{
    public $megallo;
    public $kulcs;
    public $createSave = false;

    public function createSave(){
        $this->createSave = true;
    }
    public function save(){
        $this->megallo->save();
    }

    protected $rules = [
        'megallo.nev' => 'required|string|max:30',
        'megallo.kilometer' => 'required|number|min:0',
        'megallo.vonat_id' => 'number',
        'megallo.helyibusz_id' => 'number',
        'megallo.tavolsagibusz_id' => 'number',
        'megallo.telepules' => 'required|string|max:30',
        'megallo.ido' => 'required|date_format:YYYY-MM-DDThh:mm',
        'megallo.sorszam' => 'required|number|min:1',
    ];

    public function render()
    {
        return view('livewire.megallo-component');
    }
}
