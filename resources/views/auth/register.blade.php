@extends('layouts.app')

@section('contenedor')
    <?php 
        use Illuminate\Support\Facades\DB;
        date_default_timezone_set('UTC');
        $text = DB::table('logotext')->get();
        $imgLogo = DB::table('logoimg')->get();
        $paises = DB::table('paises')->where('estado', 1)->get();
        $fechaActual = date("Y-m-d H:i:s");
     ?>
    <form class="crearcuenta" autocomplete="off" method="POST" action="{{URL::to('agregarUser')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @foreach ($text as $title)
            @if ($title->fechaFinalizacion > $fechaActual)
                <h1 class="text-center" id="title" style="color: #74accf"><B>{{$title->titulo}}</B></h1>
            @endif
        @endforeach

        @foreach ($imgLogo as $logo)
            @if ($logo->fechaFinalizacion > $fechaActual)
                @if ($logo->imagen != null && $logo->url == null || $logo->imagen != null && $logo->url != null)
                    <center >
                        <a href="{{asset('img/logo/'.$logo->imagen)}}" target="_blank"><img data-toggle="tooltip" data-placement="top" title="{{$logo->tooltip}}" style="width: 100%" id="imagenLogo" src="{{asset('img/logo/'.$logo->imagen)}}"></a>
                    </center>
                @else
                    <center >
                        <a href="$logo->url" target="_blank"><img data-toggle="tooltip" data-placement="top" title="{{$logo->tooltip}}" style="width: 100%" id="imagenLogo" src="$logo->url"></a>
                    </center>
                @endif
            @endif
        @endforeach
        <h3 class="text" id="textCrear">Crear Cuenta </h3>
        <label for="Nombre" id="con"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
        <div id="div1">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="hidden" name="ipAddress" id="ip">
                    <input id="name" placeholder="Nombre de Usuario" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input id="email" placeholder="alguien@gmail.com" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" placeholder="Contraseña" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group">
                <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <p class="text-center">
                <a class="btn btn-primary btn-block" id="btn_link1">Siguiente</a>
            </p>
        </div>
        <div id="div2" style="display: none;">
            <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                    <input id="nombres" placeholder="Nombres" type="text" class="form-control" name="nombres" required autofocus>

                    @if ($errors->has('nombres'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombres') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">

                    <input id="apellidos" placeholder="Apellidos" type="text" class="form-control" name="apellidos"" required>

                    @if ($errors->has('apellidos'))
                        <span class="help-block">
                            <strong>{{ $errors->first('apellidos') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                    <select placeholder="Seleccionar país" id="pais" name="pais" class="form-control">
                        <option value="">Seleccionar país</option>
                        @foreach ($paises as $pais)
                            <option value="{{$pais->nombre}}">{{$pais->nombre}}</option>
                        @endforeach()
                    </select>

                    @if ($errors->has('pais'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pais') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('genero') ? has-'error' : '' }}">
                <select class="form-control" name="genero" id="genero" placeholder="Selecciona tu género">
                    <option value="">Selecciona tu género</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                @if ($errors->has('genero'))
                    <span class="help-block">
                        <strong>{{ $errors->first('genero') }}</strong>
                    </span>
                @endif
            </div>
            <p class="text-center">
                <a class="btn btn-primary btn-block" id="btn_link2">Siguiente</a>
            </p>
        </div>
        <div id="div3" style="display: none;">
            <div class="form-group{{ $errors->has('dia') ? ' has-error' : '' }}">
                <div class="row">
                    <div class="col-lg-3">
                        <input id="dia" placeholder="Día" type="text" class="form-control" name="dia" required autofocus>

                        @if ($errors->has('dia'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dia') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-lg-5">
                        <select class="form-control" id="mes" name="mes" placeholder="Mes">
                            <option value="">Mes</option>
                        </select>

                        @if ($errors->has('mes'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mes') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-lg-4">
                        <input id="anio" placeholder="Año" type="tetx" class="form-control" name="anio" required autofocus>

                        @if ($errors->has('anio'))
                            <span class="help-block">
                                <strong>{{ $errors->first('anio') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group{{ $errors->has('numeroCelular') ? ' has-error' : '' }}">

                    <input id="numeroCelular" type="text" class="form-control" name="numeroCelular"  required>

                    @if ($errors->has('numeroCelular'))
                        <span class="help-block">
                            <strong>{{ $errors->first('numeroCelular') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                    
                    <input id="correo" type="email" placeholder="Correo de coinbase" class="form-control" name="correo" required>

                    @if ($errors->has('correo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('correo') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('genero') ? has-'error' : '' }}">

                <input id="documento" placeholder="Documento de Identidad" type="text" class="form-control" name="documento" required>
                @if ($errors->has('documento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('documento') }}</strong>
                    </span>
                @endif
            </div>
            <p class="text-center">
                <a class="btn btn-primary btn-block" id="btn_link3">Siguiente</a>
            </p>
        </div>
        <div id="div4" style="display: none;">
            <input id="uploadPortada" name="portada" style="display: none;" type="file"/>
            <input id="uploadFoto" name="foto" style="display: none;" type="file"/>
            <div class="portada">
                <a class="actualizarPortada" id="actualizarPortada">
                    <img src="" id="iconPortada">
                </a>
                <img src="{{asset('img/img_users/portadas/$2a$04$1lrlqTr8WqiM3NHlYEEGy.png')}}" id="portada">
            </div>
            <div style="padding: 0 35px; ">
                <div class="foto col-lg-4">
                    <a class="actualizarPerfil" id="actualizarPerfil">
                        <img src="" id="iconPerfil">
                    </a>
                    <img src="{{asset('img/img_users/perfil/TFQirkLGuJP6ipZyCNuJIEdCHMk5Ce7cO.png')}}" id="foto">
                </div>
                <div id="nombreFinalizar" class="col-lg-8"></div>
                <div id="mensaje" class="col-lg-12">
                    <p>Es importante mantener actualizado tu foto de perfil y/o portada; asi será más fácil que sea encontrado por tus amigos, familiares y comunidad</p>
                </div>
                <p class="text-center">
                    <button id="finalizar" type="submit" class="btn btn-primary btn-block">
                        Finalizar
                    </button>
                </p>
            </div>
        </div>
    </form>
@stop
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/arrays.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/portada.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/validaciones.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mascaras.js') }}"></script>
@stop
