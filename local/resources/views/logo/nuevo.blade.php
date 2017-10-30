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
						<div class="form-group">
							<label>Texto de Titulo</label>
							<input type="text" class="form-control" name="titulo">
						</div>
						<div class="form-group">
							<label>Definir Fecha de Inicio y de Finalizacion</label>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label>Inicio</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="fechaInicio" name="fechaInicio" id="fechaInicioText" class="form-control">
								</div>
								<div class="col-lg-3">
									<input type="text" id="horaInicioText" name="horaInicio" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label>Finalización</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="fechaFinal" id="fechaFinalText" class="form-control">
								</div>
								<div class="col-lg-3">
									<input type="text" id="horaFinalText" name="horaFinal" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-success">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">Configurar y Selecionar Imagen como Titulo</div>
				<div class="panel-body">
					<form method="POST" action="{{URL::to('agregaLogoImg')}}">
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<input type="hidden" id="base" name="imagen">
						<div class="form-group">
							<label>Subir Imagen</label>
							<input type="file" id="imagenLogo">
						</div>
						<div class="form-group">
							<label>Enlace de Imagen</label>
							<input type="text" name="url" class="form-control">
						</div>
						<div class="form-group">
							<label>Definir Fecha de Inicio y de Finalizacion</label>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label>Inicio</label>
								</div>
								<div class="col-lg-6">
									<input type="text" id="fechaInicioImg" name="fechaInicioImg" class="form-control">

								</div>
								<div class="col-lg-3">
									<input type="text" id="horaInicioImg" name="horaInicioImg" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label>Finalización</label>
								</div>
								<div class="col-lg-6">
									<input type="text" id="fechaFinalImg" name="fechaFinalImg" class="form-control">
								</div>
								<div class="col-lg-3">
									<input type="text" id="horaFinalImg" name="horaFinalImg" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-success">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop()
@section('scripts')
<script type="text/javascript" src="{{ asset('js/mascaras.js') }}"></script>
@stop()