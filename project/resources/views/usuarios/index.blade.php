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
						<th>Estado</th>
						<th></th>
						<!-- <th>Opción</th> -->
					</tr>
				</thead>
				<tbody>
					@foreach ($usuario as $user)
						<tr>
							<td>{{$user->firtName}}</td>
							<td>{{$user->lastName}}</td>
							<td>{{$user->country}}</td>
							<td>{{$user->ip}}</td>
							<td>
								@if($user->status == 0)
									Bloqueado
								@else
									Activo
								@endif()
							</td>
							<td>
								@if(Auth::user()->id == $user->userId)
									<a href="" data-toggle="modal" data-target="#modal{{$user->userId}}">Ver </a>
								@else
									<a href="" data-toggle="modal" data-target="#modal{{$user->userId}}">Ver </a> | <a href="{{URL::to('deleteUsuario')}}/{{$user->userId}}" >Eliminar</a> | 
									@if($user->status == 1)
										<a href="{{URL::to('bloquearUser/'.$user->userId)}}" > Bloquear </a>
									@else
										<a href="{{URL::to('activarUser/'.$user->userId)}}" > Activar </a>
									@endif()
								@endif()
							</td>

						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
	</div>
	
</div>

@foreach ( $usuario as $us)
<div class="modal fade" id="modal{{$us->userId}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
	                <img src="{{asset('img/img_users/portadas/'.$us->coverPhoto)}}" id="portada">
	            </div>
	            <div style="padding: 0 35px; ">
	                <div class="foto col-lg-12">
	                    <img src="{{asset('img/img_users/perfil/'.$us->profilePhoto)}}" id="foto">
	                </div>
	                <div class="row">
	                	<div class="col-lg-4">
	                		<strong>Nombres</strong><br>
	                		<span>{{$us->firtName}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Apellidos</strong><br>
	                		<span>{{$us->lastName}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Género</strong><br>
	                		<span>{{$us->gender}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-lg-4">
	                		<strong>País</strong><br>
	                		<span>{{$us->country}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Fecha Nacimiento</strong><br>
	                		<span>{{$us->day}}-{{$us->mounth}}-{{$us->year}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                	<div class="col-lg-4">
	                		<strong>Numero Movil</strong><br>
	                		<span>{{$us->numberPhone}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-lg-6">
	                		<strong>Correo Electrónico</strong><br>
	                		<span>{{$us->correo}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                	<div class="col-lg-6">
	                		<strong>Correo Coinbase</strong><br>
	                		<span>{{$us->email}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
	                	</div>
	                	<div class="col-lg-8">
	                		<strong>Documento de Identidad</strong><br>
	                		<span>{{$us->document}}</span>
	                		<hr style="border-top: 1px solid #03141e; margin-bottom: 15px;">
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