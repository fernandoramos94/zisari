@extends('layouts.layoutBackend')
@section('contenedorBackend')
<div class="col-lg-12">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>País</th>
				<th>Ip</th>
				<th>Ver Perfil</th>
				<th>Opción</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($usuario in $user)
				<tr>
					<td>{{$user->nombres}}</td>
					<td>{{$user->apellidos}}</td>
					<td>{{$user->pais}}</td>
					<td>45</td>
					<td><a>Ver </a></td>
					<td><a class="btn btn-success"> Bloquear Usuario </a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop