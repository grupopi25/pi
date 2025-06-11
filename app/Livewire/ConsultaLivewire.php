<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;

class ConsultaLivewire extends Component
{
    public $consulta;
    public function render()
    {
        $pets = Pet::get();
        return view('livewire.consulta-livewire', compact('pets'));
    }
}
