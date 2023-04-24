<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MegalloComponent extends Component
{
    public $megallo;
    public $kulcs;

    protected $rules = [
        'megallo.nev' => 'required|string|max:30',
    ];

    public function mount($megallo, $kulcs){
        $this->megallo = $megallo;
        $this->kulcs = $kulcs;
    }
    public function render()
    {
        return view('livewire.megallo-component');
    }
}
