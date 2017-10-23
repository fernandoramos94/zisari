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
  			<table class="table table-bordered" id="tablaUsuarios">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>País</th>
						<th>Ip</th>
						<th>Ver Perfil</th>
						<!-- <th>Opción</th> -->
					</tr>
				</thead>
				<tbody>
					@foreach ($usuario as $user)
						<tr>
							<td>{{$user->nombres}}</td>
							<td>{{$user->apellidos}}</td>
							<td>{{$user->pais}}</td>
							<td>{{$user->ip}}</td>
							<td><a href="" data-toggle="modal" data-target="#modal{{$user->id}}">Ver </a></td>
							<!-- <td><a > Bloquear Usuario </a></td> -->
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
	</div>
	
</div>

@foreach ( $usuario as $us)
<div class="modal fade" id="modal{{$us->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      	<div class="modal-header">
         	<h4 class="modal-title" id="myModalLabel">Perfil</h4>
      	</div>
        <div class="modal-body">
	            <div class="portada">
	                <a class="actualizarPortada" id="actualizarPortada">
	                    <img src="" id="iconPortada">
	                </a>
	                <img src="{{asset('img/img_users/portadas/'.$us->portado)}}" id="portada">
	            </div>
	            <div style="padding: 0 35px; ">
	                <div class="foto col-lg-4">
	                    <img src="{{asset('img/img_users/perfil/'.$us->imagen)}}" id="foto">
	                </div>
	                <div class="row">
	                	<div class="col-lg-4">
	                		<strong>Nombres</strong><br>
	                		<span>{{$us->nombres}}</span>
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Apellidos</strong><br>
	                		<span>{{$us->apellidos}}</span>
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Genero</strong><br>
	                		<span>{{$us->genero}}</span>
	                	</div>
	                </div>
	                <hr>
	                <div class="row">
						<hr>
	                	<div class="col-lg-4">
	                		<strong>País</strong><br>
	                		<span>{{$us->pais}}</span>
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Fecha Nacimiento</strong><br>
	                		<span>{{$us->dia}}-{{$us->mes}}-{{$us->anio}}</span>
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Numero Movil</strong><br>
	                		<span>{{$us->numeroCelular}}</span>
	                	</div>
	                </div>
	            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
  	</div>
</div>
</div>
@endforeach()


@stop()
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
	    $('#tablaUsuarios').DataTable({
	    	ordering: false,
	    });
	});
</script>
@stop()