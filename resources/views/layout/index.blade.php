@extends('layouts.layoutUsuario')
@section('contenedorLayout')
	<div class="col-lg-8 navegacion" >
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a style="border-top-left-radius: 15px;" href="#home" aria-controls="home" role="tab" data-toggle="tab">Zisaricoins Gratis</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Multiplicador Zisaricoins</a></li>
			<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Puntos</a></li>
			<li role="presentation"><a style="border-top-right-radius: 15px;" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Preguntas Frecuentes</a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">
				<center>
					<h1>
						<a href="" data-toggle="modal" data-target="#modalTexto"> ¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?</a>
					</h1>
				</center>
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
		<div class="row">
			<div class="col-lg-8 anuncio">
				<p><span class="textPublicidad">Publicidad</span><a class="linkCrearAnuncio" href="">Crear Anuncio</a></p>
				<img src="http://img.aws.ehowcdn.com/intl-620/ds-cdn-write/upload//8000/900/50/3/288953.jpg">
				<h4>¿Por qué Uruguay perdió el repechaje?</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
			</div>
		</div>
	</div>
<div class="modal fade" id="modalTexto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <div class="modal-body">
         	<p><span>
         		La cantidad de Zisaricoins que puede ganar GRATUITO depende del precio actual de bitcoin y el premio mayor se fija en US $ 100 y los otros premios en proporción a este. Entonces, cuando el precio de un bitcoin baja, la cantidad de recompensa calculada en Zisaricoins aumenta y viceversa. Por lo tanto, independientemente del precio actual de bitcoin, tiene una buena oportunidad de ganar US $ 100 en Zisaricoins en cada tirada.
         	</span></p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
         </div>
    </div>
  </div>
</div>
@stop()
