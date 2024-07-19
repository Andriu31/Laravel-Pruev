<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\tareas;
class Tarea extends Component
{
    public function render()
    {
        return view('livewire.tarea');
    }
    public function index(){
        return view('empleado.tareas');
    }
    public function save( $request){
        $tarea = new Tareas();
        $message='';
        $tarea->tarea = $request->tarea;
        $tarea->horas = $request->horas;
        if($request->horas <= 6 && $request->horas > 0){
            $tarea->save();
        }else{
            $message= "Las horas asignadas deben ser mayores a cero o igales a 8";
        }
        return redirect('/')->with('status', $message);
        
    }
}
