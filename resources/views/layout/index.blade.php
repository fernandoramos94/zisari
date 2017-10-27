@extends('layouts.layoutUsuario')
@section('contenedorLayout')
<div class="col-lg-8">
    <div class="box image">
        <div class="box-header">
            <h3 style="text-align: center;">
               <a href="" style="font-size: 18px; margin-bottom: 2%; display: block;" data-toggle="modal" data-target="#myModal"> ¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?</a>
            </h3>
            <div class="box-content">
                <div class="content">
                    <h5 style="text-align: justify;">
                        Complete el captcha a continuación y haga clic en el botón ROLL para obtener sus Zisaricoins gratis. La cantidad de Zisaricoins gratis que obtenga dependerá del número que transfiera y pague de acuerdo con la tabla de pagos a continuación.
                    </h5>
                    <br>
                        <h5 style="text-align: center;">
                            ¡Puedes volver y jugar cada hora para ganar Zisaricoins gratis una y otra vez!
                        </h5>
                    </br>
                </div>
            </div>
            <div class="window">
                <span>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="row">
        <div class="col-lg-8 anuncio">
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
            </img>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog" style="background: rgba(0, 0, 0, 0.5);">
    <div class="modal-dialog" style="margin-top: 70px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title">
                        <b>
                            ¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?
                        </b>
                    </h4>
                </center>
            </div>
            <div class="modal-body">
                <p style="text-align: justify;">
                    <span>
                        La cantidad de Zisaricoins que puede ganar
                        <b>
                            GRATUITO
                        </b>
                        depende del precio actual de bitcoin y el premio mayor se fija en US $ 100 y los otros premios en proporción a este. Entonces, cuando el precio de un bitcoin baja, la cantidad de recompensa calculada en Zisaricoins aumenta y viceversa.
                        <b>
                            Por lo tanto, independientemente del precio actual de bitcoin, tiene una buena oportunidad de ganar US $ 100 en Zisaricoins en cada tirada.
                        </b>
                    </span>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    Cerrar
                </button>
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
    $(document).ready(function() {
      $('#contenidoGratis').slimScroll({
          allowPageScroll: true,
          height: '77vh',
          alwaysVisible: true
         });
   })
</script>
@stop()
