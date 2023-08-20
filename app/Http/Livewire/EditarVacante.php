<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;

class EditarVacante extends Component
{
    use WithFileUploads;

    //* La variable $id esta reservada para uso interno de livewire
    //* por eso aqui lo nombramos $vacante_id
    public $vacante_id;
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $imagen_nueva;

    protected $rules = [
        'titulo'       => 'required|string',
        'salario'      => 'required',
        'categoria'    => 'required',
        'empresa'      => 'required',
        'ultimo_dia'   => 'required',
        'descripcion'  => 'required',
        'imagen_nueva' => ['nullable', 'image', 'max:2048'],
    ];
    public function mount(Vacante $vacante)
    {
        $this->vacante_id = $vacante->id;
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->empresa = $vacante->empresa;
        //* Debemos formatear la fecha de forma correcta para el HTML
        $this->ultimo_dia = Carbon::parse( $vacante->ultimo_dia )->format('Y-m-d');
        $this->descripcion = $vacante->descripcion;
        $this->imagen = $vacante->imagen;
    }
    public function editarVacante()
    {
        $datos = $this->validate();

        //TODO Revisar si hay nueva imagen
        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('public/vacantes');
            $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
        }

        //* Encontrar la vacante a editar
        $vacante = Vacante::find($this->vacante_id);

        //* asignar los valores
        $vacante->titulo = $datos['titulo'];
        $vacante->salario_id = $datos['salario'];
        $vacante->categoria_id = $datos['categoria'];
        $vacante->empresa = $datos['empresa'];
        $vacante->ultimo_dia = $datos['ultimo_dia'];
        $vacante->descripcion = $datos['descripcion'];
        $vacante->imagen = $datos['imagen'] ?? $vacante->imagen;

        //* Guardar la vacante
        $vacante->save();

        //* redireccionar
        session()->flash('mensaje', 'Vacante actualizada correctamente');
        return redirect()->route('vacantes.index');

    }
    public function render()
    {
        // Consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.editar-vacante', [
            'salarios'   => $salarios,
            'categorias' => $categorias
        ]);
    }
}
