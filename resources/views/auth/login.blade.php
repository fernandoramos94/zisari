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
            @if ($title->endDate > $fechaActual)
                <h1 class="text-center" style="color: #74accf"><B>{{$title->longTitle}}</B></h1>
            @endif
        @endforeach

        @foreach ($imgLogo as $logo)
            @if ($logo->endDate > $fechaActual)
                @if ($logo->longImage != null && $logo->url == null || $logo->longImage != null && $logo->url != null)
                    <center>
                        <a href="{{$logo->url}}" target="_blank"><img data-toggle="tooltip" data-placement="top" title="{{$logo->tooltip}}" style="width: 100%;" src="{{asset('img/logo/'.$logo->longImage)}}"></a>
                    </center>
                @endif
            @endif
        @endforeach
        <div id="login1">
            <h3 class="text">Iniciar Sesión</h3>
            <label for="Nombre"><h5>Soñar en grande hace que gigantes cosas sucedan. !Bienvenidos al éxito¡</h5></label>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autofocus>
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
            <label></label>
            <label></label>
            <div class="form-group">
                <p class="emailInPassword">
                    <span id="spanMail"></span> <img id="imgUser" src="">
                </p>
                
            </div>
            <div class="form-group">
                <h4>Escribir contraseña</h4>
                <span>
                    Como vas a acceder a información confidencial, es necesario que confirmes tu contraseña.
                </span>
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
                <div class="row">
                    <div class="col-lg-6">
                        <a class="btn btn-primary btn-block" id="btnAtras" style="background: #cccccc !important; color: #000000 !important; border:none;" >
                            Atras
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <button type="submit" style="border:none;" class="btn btn-primary btn-block">
                            Iniciar Sesion
                        </button>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantener la sesión iniciada
                    </label>
                </div>
                <p align="center">
                    <a class="btn btn-link" href="{{URL::to('recuperarPassword') }}">
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
        var url = "{{URL::to('')}}";
        $("#siguienteLogin").on("click", function(){
            $("#siguienteLogin").attr('disabled', true);
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url+"/getUser",
                data: {email: $("#email").val()},
                success: function (data) {
                        if(data.length > 0){
                            $("#spanMail").text(data[0].email);
                            $("#imgUser").attr("src", "{{asset('img/img_users/perfil')}}/"+data[0].profilePhoto);
                            $("#login1").hide();
                            $("#login2").show();
                            $("#siguienteLogin").attr('disabled', false);
                        }else{
                            notif({
                                type: "error",
                                msg: "El email ingresado no esta actualmente registrado",
                                position: "right",
                                opacity: 0.8
                            });
                            $("#siguienteLogin").attr('disabled', false);
                            return false;
                        }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        })
        $("#btnAtras").on("click", function(){
            $("#login1").show();
            $("#login2").hide();
        })
    })
</script>
@stop()
