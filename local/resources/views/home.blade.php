@extends('layouts.layoutBackend')

@section('contenedorBackend')
<div class="col-md-3 col-sm-6">
    <div class="dashboard-tile detail tile-red">
        <div class="content">
            <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500"> </h1>
            <p>Total de Usuarios</p>
        </div>
        <div class="icon"><i class="fa fa-users"></i>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6">
    <div class="dashboard-tile detail tile-turquoise">
        <div class="content">
            <h1 class="text-left timer" data-from="0" data-to="56" data-speed="2500"> </h1>
            <p>Total de Pagos</p>
        </div>
        <div class="icon"><i class="fa fa-users"></i>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6">
    <div class="dashboard-tile detail tile-blue">
        <div class="content">
            <h1 class="text-left timer" data-from="0" data-to="32" data-speed="2500"> </h1>
            <p>Usuarios Bloqueados</p>
        </div>
        <div class="icon"><i class="fa fa fa-users"></i>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6">
    <div class="dashboard-tile detail tile-purple">
        <div class="content">
            <h1 class="text-left timer" data-to="105" data-speed="2500"> </h1>
            <p>Usuarios Pagados</p>
        </div>
        <div class="icon"><i class="fa fa-users"></i>
        </div>
    </div>
</div>
@endsection
