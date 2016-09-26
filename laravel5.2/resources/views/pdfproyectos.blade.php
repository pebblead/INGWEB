<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado completo de proyectos</title>
</head>
<body>
	<h1>Lista de Proyectos</h1>
	<hr>
	<table>
		<tr>
			<td>#</td>
			<td>Nombre</td>
			<td>Fecha Inicial</td>
			<td>Fecha Fin</td>
		</tr>
		@foreach($proyectos as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->nombre}}</td>
				<td>{{$p->fecha_inicio}}</td>
				<td>{{$p->fecha_fin}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>