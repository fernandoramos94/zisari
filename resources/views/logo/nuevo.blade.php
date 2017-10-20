@extends('layouts.layoutBackend')
@section('contenedorBackend')
<div class="col-lg-12">
	<div class="panel panel-default">
  		<div class="panel-body">
		    Imagen de Fecha Calendario
  		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
  				<div class="panel-heading">Configurar y Selecionar Fecha</div>
  				<div class="panel-body">
  					<form method="POST" action="{{URL::to('agregaLogoText')}}">
  						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
	  					<label>Texto de Titulo</label>
	  					<textarea class="form-control" name="titulo">
	  					</textarea>
	  					<br>
	  					<label>Definir Fecha de Inicio y de Finalizacion</label>
	  					<br>
	  					<label>
	  						Inicio
	  					</label>
	  					<input type="text" name="fechaInicio" id="fechaInicio" class="form-control">
	  					<input type="text" name="horaInicio" class="form-control">
	  					<br>
	  					<label>Finalización</label>
	  					<input type="text" name="fechaFinal" id="fechaFinal" class="form-control">
	  					<input type="text" name="horaFinal" class="form-control">
	  					<br>
	  					<button class="btn btn-success">Guardar</button>
  					</form>
  				</div>
  			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-default">
  				<div class="panel-heading">Configurar y Selecionar Imagen como Titulo</div>
  				<div class="panel-body">
  					<label>Subir Imagen</label>
  					<input type="file" name="">
  					<br>
  					<label>Enlace de Imagen</label>
  					<br>
  					<input type="text" name="" class="form-control">
  					<br>
  					<label>Definir Fecha de Inicio y de Finalizacion</label>
  					<br>
  					<label>
  						Inicio
  					</label>
  					<input type="date" name="" class="form-control">
  					<input type="text" name="" class="form-control">
  					<br>
  					<label>Finalización</label>
  					<input type="date" name="" class="form-control">
  					<input type="text" name="" class="form-control">
  					<br>
  					<a href="" class="btn btn-success">Guardar</a>
  				</div>
  			</div>
		</div>
	</div>
</div>
@stop()
@section('scripts')
	<script type="text/javascript">
		$('#fechaInicio').datepicker()
	</script>
@stop()