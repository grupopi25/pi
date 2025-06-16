<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pet;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ConsultaLivewire extends Component
{
    public $pets;
    public $pet_id, $data, $hora, $motivo, $observacoes;

    public function mount()
    {
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

        try {
            Consulta::create([
                'pet_id'      => $this->pet_id,
                'client_id'   => Auth::id(),
                'data'        => $this->data,
                'hora'        => $this->hora,
                'motivo'      => $this->motivo,
                'observacoes' => $this->observacoes,
            ]);

            session()->flash('message', 'Consulta agendada com sucesso!');
            $this->reset(['pet_id', 'data', 'hora', 'motivo', 'observacoes']);
        } catch (\Exception $e) {
            Log::error('Erro ao salvar consulta: ' . $e->getMessage());
            session()->flash('error', 'Erro ao agendar consulta. Verifique os dados.');
        }
    }

    public function render()
    {
        return view('livewire.consulta-livewire');
    }
}
