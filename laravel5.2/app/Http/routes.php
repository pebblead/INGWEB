<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','principalController@home');

Route::get('/registrarUsuarios','principalController@registrarUsuarios');

Route::post('/guardarUsuario','usuariosController@guardar');

Route::get('/consultarUsuario','usuariosController@consultar');

Route::get('/eliminarUsuario/{id}', 'usuariosController@eliminar');

Route::get('/actualizarUsuario/{id}', 'usuariosController@actualizar');

Route::post('/actualizar/{id}', 'usuariosController@actualizarUsuario');

/*PROYECTOS*/

Route::get('/registrarProyectos','principalController@registrarProyectos');

Route::post('/guardarProyecto','proyectosController@guardar');

Route::get('/consultarProyecto','proyectosController@consultar');

Route::get('/eliminarProyecto/{id}', 'proyectosController@eliminar');

Route::get('/actualizarProyecto/{id}', 'proyectosController@actualizar');

Route::post('/update/{id}', 'proyectosController@actualizarProyecto');
