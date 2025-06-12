<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pet;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;

class ConsultaLivewire extends Component
{
    public $pets = [];
    public $pet_id = '';
    public $data;
    public $hora;
    public $motivo;
    public $observacoes;

    public function mount()
    {
        // Apenas pets do cliente autenticado
        $this->pets = Pet::where('client_id', Auth::id())->get();
    }

    public function storeConsulta()
    {
        $this->validate([
            'pet_id' => 'required|exists:pets,id',
            'data' => 'required|date|after_or_equal:today',
            'hora' => 'required',
            'motivo' => 'required|string',
            'observacoes' => 'required|string',
        ]);

        // Garante que o pet pertence ao usuário autenticado
        $pet = Pet::where('id', $this->pet_id)
                  ->where('client_id', Auth::id())
                  ->firstOrFail();

        Consulta::create([
            'client_id'   => Auth::id(),
            'pet_id'      => $pet->id,
            'data'        => $this->data,
            'hora'        => $this->hora,
            'motivo'      => $this->motivo,
            'observacoes' => $this->observacoes,
        ]);

        session()->flash('message', 'Consulta agendada com sucesso!');

        $this->reset(['pet_id', 'data', 'hora', 'motivo', 'observacoes']);
    }

    public function render()
    {
        return view('livewire.consulta-livewire', [
            'pets' => $this->pets, // Usa o que foi carregado no mount()
        ]);
    }
}
