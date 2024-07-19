<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareas;

class Tarea_Controller extends Controller
{
    //
    public function index(){
        return view('empleado.tareas');
    }
    public function save(Request $request){
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
