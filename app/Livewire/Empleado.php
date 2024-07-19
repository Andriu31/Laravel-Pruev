<?php

namespace App\Livewire;
use App\Models\Empleados;
use App\Models\Tareas; 
use Livewire\Component;

class Empleado extends Component
{
    public function render()
    {
        return view('livewire.empleado');
    }
    public function index(){
        $tarea = Tareas::all();
        $empleado = Empleados::all();
        return view('empleado.empleados', compact('tarea', 'empleado'));
    }

    
   
}
