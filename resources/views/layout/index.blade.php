@extends('layouts.layoutUsuario')
@section('contenedorLayout')
  <div class="col-lg-8 navegacion" >
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a style="border-top-left-radius: 15px;" href="#home" aria-controls="home" role="tab" data-toggle="tab"> <i class="fa fa-gift" aria-hidden="true"></i> Zisaricoins Gratis</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> <i class="fa fa-cubes" aria-hidden="true"></i> Multiplicador</a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-braille" aria-hidden="true"></i> Puntos</a></li>
      <li role="presentation"><a style="border-top-right-radius: 15px;" href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Preguntas Frecuentes</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
        <center>
            <a href="" style="font-size: 18px; margin-bottom: 2%; display: block;" data-toggle="modal" data-target="#myModal"> ¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?</a>
        </center>
        <p align="justify">
          Complete el captcha a continuación y haga clic en el botón ROLL para obtener sus Zisaricoins gratis. La cantidad de Zisaricoins gratis que obtenga dependerá del número que transfiera y pague de acuerdo con la tabla de pagos a continuación. ¡Puedes volver y jugar cada hora para ganar Zisaricoins gratis una y otra vez!
        </p>
        <br>
        <div align="center"> 
          <table class="table table-bordered" style="width: auto;text-align: center;">
            <thead>
              <tr>
                <th style="text-align: center;background-color: #2785e5; color: #fff;">NÚMERO DE LA SUERTE</th>
                <th style="text-align: center;background-color: #2785e5; color: #fff;">PAGO</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  0 - 9885
                </td>
                <td>
                  0.00000036 Z
                </td>
              </tr>
              <tr>
                <td>
                  9886 - 9985
                </td>
                <td>
                  0.00000362 Z
                </td>
              </tr>
              <tr>
                <td>
                  9986 - 9993
                </td>
                <td>
                  0.00003624 Z
                </td>
              </tr>
              <tr>
                <td>
                  9994 - 9997
                </td>
                <td>
                  0.00036241 Z
                </td>
              </tr>
              <tr>
                <td>
                  9998 - 9999
                </td>
                <td>
                  0.00362412 Z
                </td>
              </tr>
              <tr>
                <td>
                  10000
                </td>
                <td>
                  0.03624121 Z
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">
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
  <div id="myModal" style="background: rgba(0, 0, 0, 0.5);" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 70px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4 class="modal-title">
            <b>¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?</b>
          </h4>
        </center>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">
          <span>
          La cantidad de Zisaricoins que puede ganar <b>GRATUITO</b> depende del precio actual de bitcoin y el premio mayor se fija en US $ 100 y los otros premios en proporción a este. Entonces, cuando el precio de un bitcoin baja, la cantidad de recompensa calculada en Zisaricoins aumenta y viceversa. <b>Por lo tanto, independientemente del precio actual de bitcoin, tiene una buena oportunidad de ganar US $ 100 en Zisaricoins en cada tirada.</b>
        </span>
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<style type="text/css">
  .table td:first-child, .table th:first-child {
      border-left: none;
  }
  .table th:first-child {
      -moz-border-radius: 6px 0 0 0;
      -webkit-border-radius: 6px 0 0 0;
      border-radius: 6px 0 0 0;
  }
  .table th:last-child {
      -moz-border-radius: 0 6px 0 0;
      -webkit-border-radius: 0 6px 0 0;
      border-radius: 0 6px 0 0;
  }
  .table th:only-child{
      -moz-border-radius: 6px 6px 0 0;
      -webkit-border-radius: 6px 6px 0 0;
      border-radius: 6px 6px 0 0;
  }
  .table tr:last-child td:first-child {
      -moz-border-radius: 0 0 0 6px;
      -webkit-border-radius: 0 0 0 6px;
      border-radius: 0 0 0 6px;
  }
  .table tr:last-child td:last-child {
      -moz-border-radius: 0 0 6px 0;
      -webkit-border-radius: 0 0 6px 0;
      border-radius: 0 0 6px 0;
  } 
  table td:first-child {
    width: 200px;
  }
   
  table td:nth-child(2) {
    width: 200px;
  }
  .modal-backdrop{
    position: relative !important;; 
  }
</style>


@stop()
@section("scripts")
<script type="text/javascript">

</script>

@stop()
