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
                      <td>{{$pais->nombre}}</td>
                      <td>
                        @if($pais->estado == 1)
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
     <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h4><span>Logo imagen</span> <a class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#modalImagen">Nuevo</a></h4>
            </div>
            <div class="panel-body">
              <table class="table table-bordered" id="tablaUsuarios">
              <thead>
                <tr>
                  <th>Link Imagen</th>
                  <th>Url</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Finalización</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($imgLogo as $image)
                  <tr>
                    <td><a target="_blank" href="{{asset('img/logo')}}/{{$image->imagen}}">{{$image->imagen}}</a></td>
                    <td>{{$image->url}}</td>
                    <td>{{$image->fechaInicio}}</td>
                    <td>{{$image->fechaFinalizacion}}</td>
                    <td><a href="" data-toggle="modal" data-target="#modalImagen{{$image->id}}">Editar</a> | <a href="{{URL::to('deleteLogoImg')}}/{{$image->id}}">Eliminar</a></td>
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
@section('scripts')
<script type="text/javascript" src="{{ asset('js/mascaras.js') }}"></script>
@stop()