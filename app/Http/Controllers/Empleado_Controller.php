<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\Tareas;  
use Illuminate\Support\Facades\DB;

class Empleado_Controller extends Controller
{
    //
    public function index(){
        $tarea = Tareas::all();
        $empleado = Empleados::all();
        return view('empleado.empleados', compact('tarea', 'empleado'));
    }

    public function save(Request $request){
       
        $empleado = new Empleados();
        $empleado->nombre=$request->nombre;
        $empleado->apellido=$request->apellido;
        $empleado->cedula=$request->cedula;
        $empleado->horasTrabajadas = $request->horas;
        $empleado->id_tarea=$request->tarea_id;
        $empleado->save();
        return back();
        
    }
    public function Mostrar(){
        $empleados = Empleados::all();
        $tarea = DB::table('tareas')
        ->join('empleados', 'id_tarea', '=', 'tareas.id')
        ->select('empleados.*', 'tarea.tarea')
        ->get();
         return view('empleado.MostrarEmpleados',compact('empleados', 'tarea'));
    }

    

}
