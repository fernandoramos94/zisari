@extends('layouts.layoutUsuario')
@section('contenedorLayout')
<div class="col-lg-8">
    <div class="box image">
        <div class="box-header">
            <br>
            <h4 style="text-align: center;">
               <a href="" data-toggle="modal" data-target="#myModal"> ¿Por qué la cantidad de Zisaricoins que puedes ganar sigue cambiando?</a>
            </h4>
            <br>
            <div class="box-content">
               <div class="content">
                     <p style="text-align: justify;">
                        Complete el captcha a continuación y haga clic en el botón ROLL para obtener sus Zisaricoins gratis. La cantidad de Zisaricoins gratis que obtenga dependerá del número que transfiera y pague de acuerdo con la tabla de pagos a continuación.
                     </p>
                     <br>
                        <p style="text-align: center;">
                           ¡Puedes volver y jugar cada hora para ganar Zisaricoins gratis una y otra vez!
                        </p>
                     <hr>
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
                                 <td>0 - 9885</td>
                                 <td>0.00000036 Z</td>
                              </tr>
                              <tr>
                                 <td>9886 - 9985</td>
                                 <td>0.00000362 Z</td>
                              </tr>
                              <tr>
                                 <td>9986 - 9993</td>
                                 <td>0.00003624 Z</td>
                              </tr>
                              <tr>
                                 <td>9994 - 9997</td>
                                 <td>0.00036241 Z</td>
                              </tr>
                              <tr>
                                 <td>9998 - 9999</td>
                                 <td>0.00362412 Z</td>
                              </tr>
                              <tr>
                                 <td>10000</td>
                                 <td>0.03624121 Z</td>
                              </tr>
                           </tbody>
                        </table>
                        <br>
                        <br>
                        <a href="" class="btn btn-md btn-success" style="color: #fff">Roll</a>
                     </div>
                     <br>
               </div>
            </div>
         </div>
    </div>
</div>
<div class="col-lg-4 " id="publicidad">
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
         $(document).scroll(function () {
             var scroll = $(this).scrollTop();
             var topDist = $("#container").position();
             if (scroll > topDist.top) {
                 $('#publicidad').css({"position":"fixed","top":"80px", "right": "0"});
             } else {
                 // $('#publicidad').css({"position":"static","top":"auto"});
             }
         });
     });


    $(document).ready(function() {
      $('#contenidoGratis').slimScroll({
          allowPageScroll: true,
          height: '77vh',
          alwaysVisible: true
         });
   })
</script>
@stop()
