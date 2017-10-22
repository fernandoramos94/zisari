@extends('layouts.app')

@section('contenedor')
    <?php 
        use Illuminate\Support\Facades\DB;
        date_default_timezone_set('UTC');
        $text = DB::table('logotext')->get();
        $imgLogo = DB::table('logoimg')->get();
        $fechaActual = date("Y-m-d H:i:s");
        $usuarios =json_encode(DB::table('users')->get());
     ?>
    <form class="crearcuenta" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        @foreach ($text as $title)
            @if ($title->estado == 1 && $title->fechaFinalizacion > $fechaActual)
                <h1 class="text-center" style="color: #74accf"><B>{{$title->titulo}}</B></h1>
            @endif
        @endforeach

        @foreach ($imgLogo as $logo)
            @if ($logo->estado == 1 && $logo->fechaFinalizacion > $fechaActual)
                @if ($logo->imagen != null && $logo->url == null || $logo->imagen != null && $logo->url != null)
                    <center>
                        <img style="width: 100%;" src="{{asset('img/logo/'.$logo->imagen)}}">
                    </center>
                @else
                    <center>
                        <img style="width: 100%;" src="{{asset('img/logo/'.$logo->imagen)}}">
                    </center>
                @endif
            @endif
        @endforeach
        <div id="login1">
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
            <fdiv class="form-group">
                <a class="btn btn-block btn-primary" id="siguienteLogin">Siguiente</a>
            </fdiv>
            <div class="form-group">
                <p style="margin-bottom: 0; margin-top: 5%;">
                    ¿Aun no tienes una cuenta?<a  class="btn btn-link" href="{{URL::to('registro')}}">Crear una</a>
                </p>
            </div>
        </div>
        <div id="login2" style="display: none;">
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
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantener la sesión iniciada
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    Iniciar Sesion
                </button>
                <p align="center">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                    Recuperar Contraseña
                    </a>
                </p>
            </div>
        </div>


    </form>

@stop()
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $("#siguienteLogin").on("click", function(){
            $.ajax({
            type: "POST",
                url: "http://localhost/blog/public/getUser",
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        })
    })
</script>
@stop()
