<?php

namespace App\Http\Livewire;

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
    }

    protected $rules = [
        'jarat.leiras' => 'required|string|max:30',
        'jarat.megnevezes' => 'required|string|max:30',
        'jarat.indulasi_ido' => 'required|string|max:30',
        'jarat.indulasi_telepules' => 'string|max:30',
    ];
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.jarat-component');
    }
}
