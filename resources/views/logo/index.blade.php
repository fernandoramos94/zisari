@extends('layouts.layoutBackend')
@section('contenedorBackend')
<div class="col-lg-12">
  <div class="panel panel-default">
      <div class="panel-body">
        Administación logo
      </div>
  </div>
  <div class="panel panel-default">
      <div class="panel-heading">Logo titulo</div>
      <div class="panel-body">
        <table class="table table-bordered" id="tablaUsuarios">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Fecha Inicio</th>
            <th>Fecha Finalización</th>
            <th>Actualizar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($titulo as $title)
            <tr>
              <td>{{$title->titulo}}</td>
              <td>{{$title->fechaInicio}}</td>
              <td>{{$title->FechaFinalizacion}}</td>
              <td>d</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
  </div>
  <div class="panel panel-default">
      <div class="panel-heading">Logo imagen</div>
      <div class="panel-body">
        <table class="table table-bordered" id="tablaUsuarios">
        <thead>
          <tr>
            <th>Link Imagen</th>
            <th>Url</th>
            <th>Fecha Inicio</th>
            <th>Fecha Finalización</th>
            <th>Actualizar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($imagen as $image)
            <tr>
              <td>{{$image->imagen}}</td>
              <td>{{$image->url}}</td>
              <td>{{$image->fechaInicio}}</td>
              <td>{{$image->FechaFinalizacion}}</td>
              <td>d</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
  </div>
</div>
@stop()