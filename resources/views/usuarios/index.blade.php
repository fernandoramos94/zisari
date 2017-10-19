@extends('layouts.layoutBackend')
@section('contenedorBackend')
<div class="col-lg-12">
	<div class="panel panel-default">
  		<div class="panel-body">
		    Registros de Usuarios
  		</div>
	</div>
	<div class="panel panel-default">
  		<div class="panel-heading">Base de Datos de Registro de Usuarios</div>
  		<div class="panel-body">
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
					@foreach ($usuario as $user)
						<tr>
							<td>{{$user->nombres}}</td>
							<td>{{$user->apellidos}}</td>
							<td>{{$user->pais}}</td>
							<td>45</td>
							<td><a>Ver </a></td>
							<td><a > Bloquear Usuario </a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
	</div>
	
</div>
@stop