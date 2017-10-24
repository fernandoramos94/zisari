@extends('layouts.layoutUsuario')
@section('contenedorLayout')
	<div class="col-lg-8 navegacion" >
		<ul class="nav nav-tabs" role="tablist">
			<li style="width: 25%; text-align:center" role="presentation" class="active"><a style="color: #000" href="#home" aria-controls="home" role="tab" data-toggle="tab">Zisaricoins Gratis</a></li>
			<li style="width: 25%; text-align:center" role="presentation"><a style="color: #000" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Multiplicador Zisaricoins</a></li>
			<li style="width: 25%; text-align:center" role="presentation"><a style="color: #000" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Puntos</a></li>
			<li style="width: 25%; text-align:center" role="presentation"><a style="color: #000" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Preguntas Frecuentes</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">
				Zisaricoins Gratis
			</div>
			<div role="tabpanel" class="tab-pane" id="profile">
				Multiplicador Zisaricoins
			</div>
			<div role="tabpanel" class="tab-pane" id="messages">
				Puntos
			</div>
			<div role="tabpanel" class="tab-pane" id="settings">
				Preguntas Frecuentes
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		
	</div>
@stop()