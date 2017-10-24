@extends('layouts.layoutBackend')
@section('contenedorBackend')
<?php 
   use Illuminate\Support\Facades\DB;
   date_default_timezone_set('UTC');
   $text = DB::table('logotext')->get();
   $imgLogo = DB::table('logoimg')->get();
   $paises = DB::table('paises')->where('estado', 1)->get();
   $fechaActual = date("Y-m-d H:i:s");
?>
<div class="col-lg-12">
  <div class="panel panel-default">
      <div class="panel-body">
        Administación logo
      </div>
  </div>
  <div class="row">
     <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h4><span>Logo titulo</span> <a class="btn btn-success" data-toggle="modal" data-target="#modalTexto" style="float: right;">Nuevo</a></h4>
            </div>
            <div class="panel-body">
              <table class="table table-bordered" id="tablaUsuarios">
              <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Finalización</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($text as $title)
                  <tr>
                    <td>{{$title->titulo}}</td>
                    <td>{{$title->fechaInicio}}</td>
                    <td>{{$title->fechaFinalizacion}}</td>
                    <td><a href="" data-toggle="modal" data-target="#modalTexto{{$title->id}}" >Editar</a> | <a href="{{URL::to('deleteLogoText')}}/{{$title->id}}">Eliminar</a></td>
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

<!-- modal nuevo logo text -->
<div class="modal fade" id="modalTexto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Configurar y Selecionar Fecha</h4>
      </div>
      <form method="POST" action="{{URL::to('agregaLogoText')}}">
         <div class="modal-body">
               <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
               <div class="form-group">
                  <label>Texto de Titulo(400x112)</label>
                  <input type="text" class="form-control" name="titulo">
               </div>
               <div class="form-group">
                  <label>Texto de Titulo(98x27)</label>
                  <input type="text" class="form-control" name="tituloMini">
               </div>
               <div class="form-group">
                  <label>País</label>
                  <select name="pais" class="form-control">
                    <option>Seleccione</option>
                    @foreach($paises as $pais)
                      <option value="{{$pais->nombre}}">{{$pais->nombre}}</option>
                    @endforeach()
                  </select>
               </div>
               <div class="form-group">
                  <label>Definir Fecha de Inicio y de Finalizacion</label>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-lg-3">
                        <label>Inicio</label>
                     </div>
                     <div class="col-lg-6">
                        <input type="text" name="fechaInicio" name="fechaInicio" id="fechaInicioText" class="form-control">
                     </div>
                     <div class="col-lg-3">
                        <input type="text" id="horaInicioText" name="horaInicio" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-lg-3">
                        <label>Finalización</label>
                     </div>
                     <div class="col-lg-6">
                        <input type="text" name="fechaFinal" id="fechaFinalText" class="form-control">
                     </div>
                     <div class="col-lg-3">
                        <input type="text" id="horaFinalText" name="horaFinal" class="form-control">
                     </div>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-success">Guardar</button>
         </div>
      </form>
    </div>
  </div>
</div>
<!-- modal logo imagen  -->
<div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Configurar y Selecionar Imagen como Titulo</h4>
      </div>
      <form method="POST" action="{{URL::to('agregaLogoImg')}}" enctype="multipart/form-data">
         <div class="modal-body">
               <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
               <div class="form-group row col-lg-6">
                  <label>Subir Imagen (400x112)</label>
                  <input type="file" name="file" id="imagenLogo">
               </div>
               <div class="form-group row col-lg-6">
                  <label>Subir Imagen (98x127)</label>
                  <input type="file" name="fileMini" id="">
               </div>
               <div class="form-group">
                  <label>Texto Tooltip</label>
                  <input type="text" name="tooltip" class="form-control">
               </div>
               <div class="form-group">
                  <label>País</label>
                  <select name="pais" class="form-control">
                    <option>Seleccione</option>
                    @foreach($paises as $pais)
                      <option value="{{$pais->nombre}}">{{$pais->nombre}}</option>
                    @endforeach()
                  </select>
               </div>
               <div class="form-group">
                  <label>Enlace de Imagen</label>
                  <input type="text" name="url" class="form-control">
               </div>
               <div class="form-group">
                  <label>Definir Fecha de Inicio y de Finalizacion</label>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-lg-3">
                        <label>Inicio</label>
                     </div>
                     <div class="col-lg-6">
                        <input type="text" id="fechaInicioImg" name="fechaInicioImg" class="form-control">
                     </div>
                     <div class="col-lg-3">
                        <input type="text" id="horaInicioImg" name="horaInicioImg" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-lg-3">
                        <label>Finalización</label>
                     </div>
                     <div class="col-lg-6">
                        <input type="text" id="fechaFinalImg" name="fechaFinalImg" class="form-control">
                     </div>
                     <div class="col-lg-3">
                        <input type="text" id="horaFinalImg" name="horaFinalImg" class="form-control">
                     </div>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-success">Guardar</button>
         </div>
      </form>
    </div>
  </div>
</div>

@foreach ($text as $titulo)
   <?php 
      $fechaIni = new DateTime($titulo->fechaInicio);
      $fechaI = $fechaIni->format('Y-m-d');
      $horaI = $fechaIni->format('H:i:s');
      $fechaFin = new DateTime($titulo->fechaFinalizacion);
      $fechaF = $fechaFin->format('Y-m-d');
      $horaF = $fechaFin->format('H:i:s');
   ?>
   <div class="modal fade" id="modalTexto{{$titulo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Configurar y Selecionar Fecha</h4>
         </div>
         <form method="POST" action="{{URL::to('updateLogoText')}}">
            <div class="modal-body">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <input type="hidden" name="id" value="{{$titulo->id}}">
                  <div class="form-group">
                     <label>Texto de Titulo</label>
                     <input type="text" class="form-control" name="titulo" value="{{$titulo->titulo}}">
                  </div>
                  <div class="form-group">
                  <label>Texto de Titulo(98x27)</label>
                    <input type="text" class="form-control" value="{{$titulo->tituloMini}}" name="tituloMini">
                  </div>
                  <div class="form-group">
                    <label>País</label>
                    <select name="pais" class="form-control">
                      <option>Seleccione</option>
                      @foreach($paises as $pais)
                        <option value="{{$pais->nombre}}">{{$pais->nombre}}</option>
                      @endforeach()
                    </select>
                 </div>
                  <div class="form-group">
                     <label>Definir Fecha de Inicio y de Finalizacion</label>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-lg-3">
                           <label>Inicio</label>
                        </div>
                        <div class="col-lg-6">
                           <input type="text" value="{{$fechaI}}" name="fechaInicio" name="fechaInicio" id="fechaInicioText" class="form-control">
                        </div>
                        <div class="col-lg-3">
                           <input type="text" id="horaInicioText" value="{{$horaI}}" name="horaInicio" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-lg-3">
                           <label>Finalización</label>
                        </div>
                        <div class="col-lg-6">
                           <input type="text" name="fechaFinal" value="{{$fechaF}}" id="fechaFinalText" class="form-control">
                        </div>
                        <div class="col-lg-3">
                           <input type="text" id="horaFinalText" value="{{$horaF}}" name="horaFinal" class="form-control">
                        </div>
                     </div>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
               <button class="btn btn-success">Guardar</button>
            </div>
         </form>
       </div>
     </div>
   </div>
@endforeach

@foreach ($imgLogo as $logo)
   <?php 
      $fechaIniIm = new DateTime($logo->fechaInicio);
      $fechaIIm = $fechaIniIm->format('Y-m-d');
      $horaIIm = $fechaIniIm->format('H:i:s');
      $fechaFinIm = new DateTime($logo->fechaFinalizacion);
      $fechaFIm = $fechaFinIm->format('Y-m-d');
      $horaFIm = $fechaFinIm->format('H:i:s');
   ?>
   <div class="modal fade" id="modalImagen{{$logo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Configurar y Selecionar Imagen como Titulo</h4>
         </div>
         <form method="POST" action="{{URL::to('updateLogoImg')}}" enctype="multipart/form-data">
            <div class="modal-body">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <input type="hidden" name="id" value="{{$logo->id}}">
                  <div class="form-group row col-lg-6">
                      <label>Subir Imagen (400x112)</label>
                      <input type="file" name="file" id="imagenLogo">
                   </div>
                   <div class="form-group row col-lg-6">
                      <label>Subir Imagen (98x127)</label>
                      <input type="file" name="fileMini" id="">
                   </div>
                   <div class="form-group">
                      <label>Texto Tooltip</label>
                      <input type="text" name="tooltip" class="form-control">
                   </div>
                   <div class="form-group">
                      <label>País</label>
                      <select name="pais" class="form-control">
                        <option>Seleccione</option>
                        @foreach($paises as $pais)
                          <option value="{{$pais->nombre}}">{{$pais->nombre}}</option>
                        @endforeach()
                      </select>
                   </div>
                  <div class="form-group">
                     <label>Enlace de Imagen</label>
                     <input type="text" name="url" class="form-control" value="{{$logo->url}}">
                  </div>
                  <div class="form-group">
                     <label>Definir Fecha de Inicio y de Finalizacion</label>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-lg-3">
                           <label>Inicio</label>
                        </div>
                        <div class="col-lg-6">
                           <input type="text" id="fechaInicioImg" name="fechaInicioImg" value="{{$fechaIIm}}" class="form-control">
                        </div>
                        <div class="col-lg-3">
                           <input type="text" id="horaInicioImg" name="horaInicioImg" value="{{$horaIIm}}" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-lg-3">
                           <label>Finalización</label>
                        </div>
                        <div class="col-lg-6">
                           <input type="text" id="fechaFinalImg" name="fechaFinalImg" value="{{$fechaFIm}}" class="form-control">
                        </div>
                        <div class="col-lg-3">
                           <input type="text" id="horaFinalImg" name="horaFinalImg" value="{{$horaFIm}}" class="form-control">
                        </div>
                     </div>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
               <button class="btn btn-success">Guardar</button>
            </div>
         </form>
       </div>
     </div>
   </div>
@endforeach

@stop()
@section('scripts')
<script type="text/javascript" src="{{ asset('js/mascaras.js') }}"></script>
@stop()