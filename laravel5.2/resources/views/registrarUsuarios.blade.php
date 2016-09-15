@extends('principal')

@section('encabezado')
	<h2>Registrar Usuarios</h2>
@stop

@section('contenido')
	<form action="{{url('/guardarUsuario')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<div class="form-group">
			<label for="edad">Nombre</label>
			<input type="text" class="form-control" name="edad">
		</div>
		<div class="form-group">
			<label for="sexo">Sexo</label>
			<select name="sexo" class="form-control">
				<option value="" selected>Sexo</option>
				<option value="0">Masculino</option>
				<option value="1">Femenino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="text" class="form-control" name="correo">
		</div>
		<input type="submit" class="btn btn-success col-xs-6">
		<a href="{{url('/home')}}" class="btn btn-danger col-xs-6">Cancelar</a>
	</form>
@stop