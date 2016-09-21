@extends('principal')

@section('encabezado')
	<h2>Actualizar Proyectos</h2>
@stop

@section('contenido')
	<form action="{{url('/update')}}/{{$proyecto->id}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" value="{{$proyecto->nombre}}">
		</div>
		<div class="form-group">
			<label for="finicio">Fecha inicio</label>
			<input type="date" class="form-control" name="finicio" value="{{$proyecto->fecha_inicio}}">
		</div>
		<div class="form-group">
			<label for="ffinal">Fecha fin</label>
			<input type="date" class="form-control" name="ffinal" value="{{$proyecto->fecha_fin}}">
		</div>

		<input type="submit" class="btn btn-success col-xs-6" value="Actualizar">
		<a href="{{url('/home')}}" class="btn btn-danger col-xs-6">Cancelar</a>
	</form>
@stop