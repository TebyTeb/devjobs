<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{
    //* $listeners registra los eventos disparados en la vista de Livewire
    //* para disparar funciones con el mismo nombre en el controlador
    protected $listeners = ['eliminarVacante'];
    public function eliminarVacante(Vacante $vacante)
    {
        $vacante->delete();
    }
    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.mostrar-vacantes',[
            'vacantes' => $vacantes,
        ]);
    }
}
