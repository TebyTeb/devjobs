<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    use WithFileUploads;

    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    protected $rules = [
        'titulo'      => 'required|string',
        'salario'     => 'required',
        'categoria'   => 'required',
        'empresa'     => 'required',
        'ultimo_dia'  => 'required',
        'descripcion' => 'required',
        'imagen'      => ['required', 'image', 'max:2048'],
    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        /** Almacenar la imagen
         ** Guardamos la imagen
         ** reemplazamos en los datos la imagen por su nuevo nombre */
        $imagen = $this->imagen->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);

        /** Crear la Vacante
         ** Sacamos los datos del componente gracias a la validacion
         ** y los usamos para crear el registro en la BD */
        Vacante::create([
            'titulo'       => $datos['titulo'],
            'salario_id'   => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'empresa'      => $datos['empresa'],
            'ultimo_dia'   => $datos['ultimo_dia'],
            'descripcion'  => $datos['descripcion'],
            'imagen'       => $datos['imagen'],
            'user_id'      => auth()->user()->id,
        ]);

        /** Crear un mensaje
         *
         */
        session()->flash('mensaje', 'Vacante publicada correctamente');

        /** Redireccionar al usuario
         *
         */
        return redirect()->route('vacantes.index');

    }
    public function render()
    {
        // Consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'salarios'   => $salarios,
            'categorias' => $categorias
        ]);
    }
}
