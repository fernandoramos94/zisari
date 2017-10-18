@extends('layouts.app')

@section('contenedor')
    <form class="crearcuenta" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div id="div1">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
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
        </div>
        <div id="div2">
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
                    <select placeholder="Seleccionar país" name="pais" class="form-control">
                        <option></option>
                    </select>

                    @if ($errors->has('pais'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pais') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('genero') ? has-'error' : '' }}">
                <select class="form-control" name="genero" placeholder="Selecciona tu género">
                    <option></option>
                </select>
                @if ($errors->has('genero')
                    <span class="help-block">
                        <strong>{{ $errors->first('genero'}}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div id="div3">
            <div class="form-group{{ $errors->has('dia') ? ' has-error' : '' }}">
                <div class="row">
                    <div class="col-lg-4">
                        <input id="dias" placeholder="Día" type="number" class="form-control" name="dia" required autofocus>

                        @if ($errors->has('dia'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dia') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-lg-4">
                        <select class="form-control" name="mes" placeholder="Mes">
                            <option></option>
                        </select>

                        @if ($errors->has('mes'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mes') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-lg-4">
                        <input id="anio" placeholder="Año" type="number" class="form-control" name="anio" required autofocus>

                        @if ($errors->has('anio'))
                            <span class="help-block">
                                <strong>{{ $errors->first('anio') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group{{ $errors->has('numeroCelular') ? ' has-error' : '' }}">

                    <input id="numeroCelular" placeholder="+(Código)" type="text" class="form-control" name="numeroCelular"  required>

                    @if ($errors->has('numeroCelular'))
                        <span class="help-block">
                            <strong>{{ $errors->first('numeroCelular') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                    
                    <input id="correo" type="email" placeholder="Correo" class="form-control" name="correo" required>

                    @if ($errors->has('correo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('correo') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('genero') ? has-'error' : '' }}">

                <input id="documento" placeholder="Documento de Identidad" type="number" class="form-control" name="documento" required>
                @if ($errors->has('documento')
                    <span class="help-block">
                        <strong>{{ $errors->first('documento'}}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection
