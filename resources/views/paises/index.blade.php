@extends('layouts.layoutBackend')
@section('contenedorBackend')
<?php 
   use Illuminate\Support\Facades\DB;
   date_default_timezone_set('UTC');
   $text = DB::table('logotext')->get();
   $imgLogo = DB::table('logoimg')->get();
   $fechaActual = date("Y-m-d H:i:s");
?>
<div class="col-lg-12">
  <div class="panel panel-default">
      <div class="panel-body">
        Administación paises
      </div>
  </div>
  <div class="row">
     <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h4><span>Paises</span></h4>
            </div>
            <div class="panel-body">
              <table class="table table-bordered" id="tablaUsuarios">
                <thead>
                  <tr>
                    <th>País</th>
                    <th>Estado</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($paises as $pais)
                    <tr>
                      <td>{{$pais->name}}</td>
                      <td>
                        @if($pais->status == 1)
                          Habilitado
                        @else
                          Deshabilitado
                        @endif
                      <td>
                        @if($pais->estado == 0)
                          <a href="{{URL::to('updatePais')}}/{{$pais->id}}">Habilitar</a>
                        @else
                          <a href="{{URL::to('updatePais')}}/{{$pais->id}}">Deshabilitar</a>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
     </div>     
  </div>
</div>
@stop()