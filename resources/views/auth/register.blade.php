@extends('layouts.app')

@section('contenedor')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
                </div>
            </div>
        </div>
    </div>
</div> -->

<form method="POST" action="{{ route('register') }}" class="crearcuenta">
    {{ csrf_field() }}
    <div style="overflow: auto;">
        <div id="list1">
            <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
            <h3 class="text">Crear Cuenta</h3>
            <div class="form-group">
                <label for="Nombre"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
                <input type="text" class="form-control" name="name" placeholder="Nombre de usuario" required>
                <input type="text" class="form-control" name="email" placeholder="alguien@gmail.com" required>
                <input type="password" class="form-control" name="password" id="password-confirm" placeholder="Crear contraseña" required>
                <input type="password" class="form-control" id="Nombre" placeholder="Confirmar contraseña" name="password_confirmation" required>
            </div>
            <p class="text-center">
                <a class="btn btn-primary btn-block" id="btn_link1">Siguiente</a>
            </p>
        </div>
        <div id="list2">
            <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
            <h3 class="text">Crear Cuenta</h3>
            <div class="form-group">
                <label for="Nombre"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
                <input type="text" class="form-control" name="nombres" placeholder="Nombres" required>
                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
                <select class="form-control" name="pais" style="margin: 15px 0;">
                    <option>Seleccionar país</option>
                </select>
                <select class="form-control" name="genero" style="margin: 15px 0;">
                    <option>Selecciona tu género</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>
            <p class="text-center">
                <a class="btn btn-primary btn-block" id="btn_link2">Siguiente</a>
            </p>
        </div>
        <div id="list3">
            <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
            <h3 class="text">Crear Cuenta</h3>
            <div class="form-group">
                <label for="Nombre"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="dia" placeholder="Día" required >
                </div>
                <div class="col-md-4">
                    <select class="form-control" name="mes">
                        <option>Mes</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="anio" placeholder="Año" required>
                </div>
            </div>
            <!-- <div class="input-group"></div>     -->
                <input type="text" class="form-control" name="numeroCelular" placeholder="+(Código) Número de celular" required>
                <input type="text" class="form-control" name="email" placeholder="Correo de Coinbase" required autofocus>
                <input type="text" class="form-control" name="documento" placeholder="Documento de Identidad" required autofocus>
            <!-- </div> -->
            <p class="text-center">
                <button type="submit" class="btn btn-primary btn-block">
                    Register
                </button>
                <!-- <a class="btn btn-primary btn-block" id="btn_link3">Siguiente</a> -->
            </p>
        </div>

    </div>
    <!-- <div id="list4" style="display: none">
        <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
        <h3 class="text">Escribir contraseña</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="" placeholder="Contraseña" required autofocus>
        </div>
        <p class="text-center">
            <a class="btn btn-primary btn-block" id="btn_link4">Siguiente</a>
        </p>
    </div> -->

</form>


@endsection
