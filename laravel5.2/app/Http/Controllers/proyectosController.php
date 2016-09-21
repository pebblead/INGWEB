<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\proyectos;
use DB;
class proyectosController extends Controller
{
    //
    public function guardar(Request $request){
    	$nombre=$request->input('nombre');
    	$fecha_inicio=$request->input('finicio');
    	$fecha_fin=$request->input('ffinal');

		//guardar en bd
		$nuevo=new proyectos;
		$nuevo->nombre=$nombre;
    	$nuevo->fecha_inicio=$fecha_inicio;
    	$nuevo->fecha_fin=$fecha_fin;
    	$nuevo->save();

    	return Redirect('/registrarProyectos');
    }

    public function consultar(){
    	$proyectos=DB::table('proyectos')->paginate(5);

    	return view('consultarProyectos',compact('proyectos'));

    }

    public function eliminar($id){
    	proyectos::find($id)->delete();
    	return Redirect('/consultarProyecto');
    }

    public function actualizar($id){
        $proyecto=proyectos::find($id);
        return view('actualizarProyectos', compact('proyecto'));
    }

    public function actualizarProyecto($id, Request $datos){
        $proyecto=proyectos::find($id);
		$proyecto->nombre=$datos->input('nombre');
    	$proyecto->fecha_inicio=$datos->input('finicio');
    	$proyecto->fecha_fin=$datos->input('ffinal');
    	$proyecto->save();

        return Redirect('/consultarProyecto');
    }
}
