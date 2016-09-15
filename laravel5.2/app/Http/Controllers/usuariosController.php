<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuarios;
class usuariosController extends Controller
{
    //
    public function guardar(Request $request){
    	$nombre=$request->input('nombre');
    	$edad=$request->input('edad');
    	$sexo=$request->input('sexo');
		$correo=$request->input('correo');

		//guardar en bd
		$nuevo=new usuarios;
		$nuevo->nombre=$nombre;
    	$nuevo->edad=$edad;
    	$nuevo->sexo=$sexo;
    	$nuevo->correo=$correo;
    	$nuevo->save();

    	return Redirect('/registrarUsuarios');
    }
}
