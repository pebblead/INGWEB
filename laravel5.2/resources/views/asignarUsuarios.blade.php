@extends('principal')

@section('encabezado')
<h2>Proyecto: {{$proyecto->nombre}}</h2>
@stop

@section('contenido')
<form action="">
	<div class="form-control">
		<select name="" id="" class="form-control">
			<!--todos los usuarios que no esten asignados al proyecto-->
			@foreach($usuarios as $u)
			<option value="{{$u->id}}">{{$u.nombre}}</option>
			@endforeach
		</select>
	</div>
	<input type="submit" value="asignar" class="btn btn-primary">
</form>
<h2>Lista de usuarios asignados</h2>
<hr>

<table>
	<thead>
	<tr>
		<th>#</th>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Sexo</th>
		<th>Correo</th>
	</tr>
	</thead>
	<tbody>
		@foreach($usuariosP as $uP)
				<tr>
					<td>{{$uP->id}}</td>
					<td>{{$uP->nombre}}</td>
					<td>{{$uP->edad}}</td>
					<td>
						@if($uP->sexo==0)
							Masculino
						@else
							Femenino
						@endif
					</td>
					<td>{{$uP->correo}}</td>
					<td>
						<a href="" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			@endforeach
	</tbody>

	<!--todos los usuarios que YA esten asignados al proyecto-->
	


</table>
@stop
