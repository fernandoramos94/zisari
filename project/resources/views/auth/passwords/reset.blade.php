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
<form class="crearcuenta" method="POST" action="{{ URL::to('updatePass') }}">
    {{ csrf_field() }}
    @foreach ($text as $title)
        @if ($title->endDate > $fechaActual && $title->longTitle != null || $title->longTitle != "")
            <h1 class="text-center" style="color: #74accf"><B>{{$title->longTitle}}</B></h1>
        @endif
    @endforeach

    @foreach ($imgLogo as $logo)
        @if ($logo->endDate > $fechaActua)
            @if ($logo->longImage != null || $logo->longImage != "")
                <center>
                    <a href="{{$logo->url}}" target="_blank"><img data-toggle="tooltip" data-placement="top" title="{{$logo->tooltip}}" style="width: 100%;" src="{{asset('img/logo/'.$logo->longImage)}}"></a>
                </center>
            @endif
        @endif
    @endforeach
    <br>
    <br>
    <center>
        <h4>
            Restablecer Contraseña
        </h4>
    </center>
    <br>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required placeholder="Correo electronico">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-6">
                <a class="btn btn-primary btn-block" href="{{URL::to('')}}" style="background: #cccccc !important; color: #000000 !important; border:none;" >
                    Atras
                </a>
            </div>
            <div class="col-lg-6">
                <a id="restablecer" style="border:none;" class="btn btn-primary btn-block">Restablecer</a>
                <button id="buttonRestablecer" style="display: none;" class="btn btn-primary btn-block">
                    
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        var url = "{{URL::to('')}}";
        $("#restablecer").on("click", function() {
            if ($("#password").val() != $("#password-confirm").val()) {
                notif({
                    type: "error",
                    msg: "Las contaseñas no coinciden.",
                    position: "right",
                    opacity: 0.8
                });
                return false;
            }
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url+"/getUser",
                data: {email: $("#email").val()}
                success: function (data) {
                    for (var i = 0; i < data.length; i++) {
                        if(data.length > 0){
                            $("#buttonRestablecer").trigger("click");
                        }else{
                            notif({
                                type: "error",
                                msg: "El email ingresado no esta actualmente registrado",
                                position: "right",
                                opacity: 0.8
                            });
                            return false;
                        }
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });


        })
    })
    
</script>
@stop()