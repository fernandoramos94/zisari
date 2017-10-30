@extends('layouts.layoutUsuario')
@section('contenedorLayout')
<div class="col-lg-8">
  <div class="box image">
    <div class="box-header">
      <br><br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Relacionado al Roll</h3>
          <div class="actions pull-right">
            <!-- <i class="fa fa-chevron-down"></i> -->
            <!-- <i class="fa fa-times"></i> -->
          </div>
        </div>
        <div class="panel-body">
          <div class="panel-group accordion" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                    ¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                  La cantidad de Zisaricoins que puede ganar GRATUITO depende del crecimiento de la plataforma, asi crecemos juntos. El premio mayor se fija en USD $ 30 y los otros premios en proporción a este. Por lo tanto, tiene una buena oportunidad de ganar USD $ 30 en Zisaricoins en cada tirada.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    ¿Qué es Zisaricoins?
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  Zisaricons es una criptomoneda interna de Zisari, la cual se puede convertir en BTC y USD.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    ¿Cuanto vale 1 Zisaricoins?
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  1 Zisaricoins equivale a 10USD y en BTC depende de la cantidad de satoshis al precio actual en BTC por el monto de 10USD.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Relacionado al multiplicador</h3>
          <div class="actions pull-right">
            <!-- <i class="fa fa-chevron-down"></i> -->
            <!-- <i class="fa fa-times"></i> -->
          </div>
        </div>
        <div class="panel-body">
          <div class="panel-group accordion" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseMulOne" class="collapsed">
                    ¿Cómo funciona?
                  </a>
                </h4>
              </div>
              <div id="collapseMulOne" class="panel-collapse collapse">
                <div class="panel-body">
                  Usted hace una apuesta y elije Hi o Lo, y si sale la opción seleccionada usted gana, en caso de salir lo contrario pierde lo que apostó. 
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseMulTwo">
                    ¿Cuánto puedo ganar en el Multiplicador?
                  </a>
                </h4>
              </div>
              <div id="collapseMulTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  La cantidad que puedes ganar depende del total de la apuesta y el número de veces que jueges.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Relacionado a los puntos</h3>
          <div class="actions pull-right">
            <!-- <i class="fa fa-chevron-down"></i> -->
            <!-- <i class="fa fa-times"></i> -->
          </div>
        </div>
        <div class="panel-body">
          <div class="panel-group accordion" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapsePuntOne" class="collapsed">
                    ¿Cómo obtengo los puntos?
                  </a>
                </h4>
              </div>
              <div id="collapsePuntOne" class="panel-collapse collapse">
                <div class="panel-body">
                  Los puntos se obtienen por cada vez que juega en el Roll.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePuntTwo">
                    ¿La obtención de puntos pueden variar?
                  </a>
                </h4>
              </div>
              <div id="collapsePuntTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  Sí , depende de los bonos que brinde el administrador.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePuntThree">
                    ¿Para qué sirven los puntos?
                  </a>
                </h4>
              </div>
              <div id="collapsePuntThree" class="panel-collapse collapse">
                <div class="panel-body">
                  Los puntos sirven para canjear por más Zisaricoins por cada roll.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-4" id="DivPublicidad">
  <div class="row">
    <div class="col-lg-9 anuncio box image">
        <div class="ticket-card active">
            <div class="cover">
              <img src="http://s28.postimg.org/iu25iqob1/kanye.jpg" alt="" />
              <div class="info">
                <div class="going">
                  4,234 Impresiones
                </div>
                <div class="tickets-left">
                  240 Visitas
                </div>
              </div>
            </div>
            <div class="body">
              <div class="artist">
                
              </div>
              <div class="price">
                
                <div class="value">
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="info">
                <p class="location">
                  Publicidad
                </p>
                <p class="date">
                  <a href="#" style="color: #428bca">Crear Anuncio</a>
                </p>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="collapse in">
              <ul class="list-unstyled">
                <li>
                  <div class="ticket">
                    <h5>¿Por qué Uruguay perdió el repechaje?<br>
                      <small style="text-align: justify;">La verdad del partido sudmericano se disputará en el estadio olimpico internacional mediante encuentros ansestrales de dos equipos muy bien definidos.</small>
                    </h5>
                  </div>
                  <div class="price">
                    
                  </div>
                  <a href="#" class="btn btn-info btn-sm btn-buy">Ver</a>
                </li>
                
              </ul>
            </div>
            <div class="footer">
              <button class="btn toggle-tickets">Ocultar Contenido</button>
            </div>
          </div>
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
