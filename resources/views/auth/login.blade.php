@extends('layouts.app')

@section('contenedor')
    <?php 
        use Illuminate\Support\Facades\DB;
        $text = DB::table('logotext')->get();
     ?>
    <form class="crearcuenta" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        @foreach ($text as $title)
            <h1 class="text-center" style="color: #74accf"><B>{{$title->titulo}}</B></h1>
        @endforeach
        <h3 class="text">Iniciar Sesión</h3>
        <label for="Nombre"><h5>Soñar en grande hace que gigantes cosas sucedan. !Bienvenidos al éxito¡</h5></label>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" placeholder="Correo" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                </label>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
                Iniciar Sesion
            </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">
            Recuperar Contraseña?
            </a>
        </div>
    </form>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
