<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class principalController extends Controller
{
   public function index(){
   	return view('principal');
   }
   public function home(){
   	return view('inicio');
   }
   public function registrarUsuarios(){
   	return view('registrarUsuarios');
   }
}
