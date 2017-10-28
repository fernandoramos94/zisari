@extends('layouts.layoutUsuario')
@section('contenedorLayout')
<div class="col-lg-8">
  <div class="box image">
    <div class="box-header">
      <div class="panel-group" id="accordion1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?</a>
            </h5>
          </div>
          <div id="accordion1_1" class="panel-collapse collapse in">
            <div class="panel-body">
              <p>La cantidad de Zisaricoins que puede ganar GRATUITO depende del crecimiento de la plataforma, asi crecemos juntos. El premio mayor se fija en USD $ 30 y los otros premios en proporción a este. Por lo tanto, tiene una buena oportunidad de ganar USD $ 30 en Zisaricoins en cada tirada.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">¿Qué es Zisaricoins?</a>
            </h5>
          </div>
          <div id="accordion1_2" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Zisaricons es una criptomoneda interna de Zisari, la cual se puede convertir en BTC y USD.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">¿Cuanto vale 1 Zisaricoins?</a>
            </h5>
          </div>
          <div id="accordion1_3" class="panel-collapse collapse">
            <div class="panel-body">
              <p>1 Zisaricoins equivale a 10USD y en BTC depende de la cantidad de satoshis al precio actual en BTC por el monto de 10USD.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">¿Cómo funciona?</a>
            </h5>
          </div>
          <div id="accordion1_4" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Usted hace una apuesta y elije Hi o Lo, y si sale la opción seleccionada usted gana, en caso de salir lo contrario pierde lo que apostó.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">¿Cuánto puedo ganar en el Multiplicador?</a>
            </h5>
          </div>
          <div id="accordion1_5" class="panel-collapse collapse">
            <div class="panel-body">
              <p>La cantidad que puedes ganar depende del total de la apuesta y el número de veces que jueges.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">¿Cómo obtengo los puntos?</a>
            </h5>
          </div>
          <div id="accordion1_6" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Los puntos se obtienen por cada vez que juega en el Roll.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">¿La obtención de puntos pueden variar?</a>
            </h5>
          </div>
          <div id="accordion1_7" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Sí , depende de los bonos que brinde el administrador.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_8">¿Para qué sirven los puntos?</a>
            </h5>
          </div>
          <div id="accordion1_8" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Los puntos sirven para canjear por más Zisaricoins por cada roll.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-4" id="DivPublicidad">
 <div class="row">
  <div class="col-lg-8 anuncio box image">
   <p>
    <span class="textPublicidad">
     Publicidad
   </span>
   <a class="linkCrearAnuncio" href="">
     Crear Anuncio
   </a>
 </p>
 <img src="http://img.aws.ehowcdn.com/intl-620/ds-cdn-write/upload//8000/900/50/3/288953.jpg">
 <h4>
  ¿Por qué Uruguay perdió el repechaje?
</h4>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</div>
</div>
</div>
@stop()
@section("scripts")
<script type="text/javascript">

 $(document).ready(function() {
   $(document).scroll(function () {
     var scroll = $(this).scrollTop();
     var topDist = $("#container").position();
     if (scroll > topDist.top) {
       $('#DivPublicidad').css({"position":"fixed","top":"80px", "right": "0"});
     } else {
       $('#DivPublicidad').css({"position": "relative", "top": "0"});
     }
   });
 });
</script>
@stop()
