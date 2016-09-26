<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuarios;
use DB;
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

    public function consultar(Request $request){
       /* $users=usuarios::all()-paginate(5);*/
       $users=DB::table('usuarios')->paginate(5);
        return view('consultarUsuarios',compact('users'));
    }

    public function eliminar($id){
        usuarios::find($id)->delete();
        return Redirect('/consultarUsuario');
    }

    public function actualizar($id){
        $user=usuarios::find($id);
        return view('actualizarUsuarios', compact('user'));
    }

    public function actualizarUsuario($id, Request $datos){
        $usuario =  usuarios::find($id);
        $usuario->nombre =  $datos->input('nombre');
        $usuario->edad= $datos->input('edad');
        $usuario->sexo= $datos->input('sexo');
        $usuario->correo=   $datos->input('correo');
        $usuario->save();

        return Redirect('/consultarUsuario');
    }

    public function pdfUsuarios(){
        $usuarios=usuarios::all();
        $vista=view('pdfusuarios', compact('usuarios'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
    }
}












