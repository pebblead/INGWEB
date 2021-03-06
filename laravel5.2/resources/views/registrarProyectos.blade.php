@extends('principal')

@section('encabezado')
	<h2>Registrar Proyectos</h2>
@stop

@section('contenido')
	<form action="{{url('/guardarProyecto')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<div class="form-group">
			<label for="finicio">Fecha Inicio</label>
			<input type="date" class="form-control" name="finicio">
		</div>
		<div class="form-group">
			<label for="ffinal">Fecha Final</label>
			<input type="date" class="form-control" name="ffinal">
		</div>
		<input type="submit" class="btn btn-success col-xs-6">
		<a href="{{url('/home')}}" class="btn btn-danger col-xs-6">Cancelar</a>
	</form>
@stop