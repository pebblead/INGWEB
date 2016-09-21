@extends('principal')

@section('encabezado')
	<h2>Actualizar Usuarios</h2>
@stop

@section('contenido')
	<form action="{{url('/actualizar')}}/{{$user->id}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" value="{{$user->nombre}}">
		</div>
		<div class="form-group">
			<label for="edad">Edad</label>
			<input type="text" class="form-control" name="edad" value="{{$user->edad}}">
		</div>
		<div class="form-group">
			<label for="sexo">Sexo</label>
			<select name="sexo" class="form-control">
				<option value="" selected>Sexo</option>
			@if($user->sexo==0)
				<option value="0" selected>Masculino</option>
				<option value="1">Femenino</option>
			@else
				<option value="0">Masculino</option>
				<option value="1" selected>Femenino</option>
			@endif
			</select>
		</div>
		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="text" class="form-control" name="correo" value="{{$user->correo}}">
		</div>
		<input type="submit" class="btn btn-success col-xs-6" value="Actualizar">
		<a href="{{url('/home')}}" class="btn btn-danger col-xs-6">Cancelar</a>
	</form>
@stop