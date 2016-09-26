@extends('principal')

@section('encabezado')
<h2>Consultar Proyectos <a href="{{url('pdfProyectos')}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a></h2>

@stop

@section('contenido')
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Fecha inicio</th>
			<th>Fecha final</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($proyectos as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->nombre}}</td>
			<td>{{$p->fecha_inicio}}</td>
			<td>{{$p->fecha_fin}}</td>
			<td>
				<a href="{{url('/actualizarProyecto')}}/{{$p->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="{{url('/eliminarProyecto')}}/{{$p->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach

	</tbody>
</table>
@stop