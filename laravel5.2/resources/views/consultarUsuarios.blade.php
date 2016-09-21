@extends('principal')

@section('encabezado')
	<h2>Consultar Usuarios</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Correo</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $u)
			<tr>
				<td>{{$u->id}}</td>
				<td>{{$u->nombre}}</td>
				<td>{{$u->edad}}</td>
				@if ($u->sexo == 0)
					<td>Masculino</td>
				@else
					<td>Femenino</td>
				@endif
				<td>{{$u->correo}}</td>
				<td>
					<a href="{{url('/actualizarUsuario')}}/{{$u->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					<a href="{{url('/eliminarUsuario')}}/{{$u->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
	{!! $users->render() !!}
@stop