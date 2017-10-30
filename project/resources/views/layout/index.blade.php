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
<div class="col-lg-4" id="DivPublicidad">
   <div class="row">
      <div class="col-lg-9 anuncio box image">
        <div class="ticket-card active">
          <div class="body">
            <div class="clearfix"></div>
              <div class="info">
                <p class="location">
                  Publicidad
                </p>
                <p class="date">
                  <a href="#" style="color: #428bca">Crear Anuncio</a>
                </p>
              </div>
          </div>
            <div class="cover">
              <img src="http://s28.postimg.org/iu25iqob1/kanye.jpg" alt="" />
              <div class="info">
                <div class="going">
                  <i class="fa fa-group"></i> 4,234 Impresiones
                </div>
                <div class="tickets-left">
                  <i class="fa fa-ticket"></i> 240 Visitas
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
                      <small style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing</small><br>
                      <small style="text-align: justify;">elit, sed do eiusmod tempor incididunt ut labore esrs</small><br>
                      <small style="text-align: justify;">et dolore magna aliqua.</small>
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
                 $('#DivPublicidad').css({"position":"fixed","top":"80px", "right": "0"});
             } else {
                 $('#DivPublicidad').css({"position": "relative", "top": "0"});
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


    $(document).ready(function(){
    $('.toggle-tickets').click(function() {
  $tickets = $(this).parent().siblings('.collapse');
 
  if ($tickets.hasClass('in')) {
    $tickets.collapse('hide');
    $(this).html('¿Por qué Uruguay perdió el repechaje?');
    $(this).closest('.ticket-card').removeClass('active');
  } else {
    $tickets.collapse('show');
    $(this).html('Ocultar Contenido');
    $(this).closest('.ticket-card').addClass('active');
  }
});
});
</script>
@stop()
