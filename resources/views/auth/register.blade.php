@extends('layouts.app')

@section('contenedor')
    <form class="crearcuenta" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
        <h3 class="text">Crear Cuenta</h3>
        <label for="Nombre"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
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
                        <input id="dia" placeholder="Día" type="number" class="form-control" name="dia" required autofocus>

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

                    <input id="numeroCelular" placeholder="+(Código) Número de Móbil" type="text" class="form-control" name="numeroCelular"  required>

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

                <input id="documento" placeholder="Documento de Identidad" type="number" class="form-control" name="documento" required>
                @if ($errors->has('documento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('documento') }}</strong>
                    </span>
                @endif
            </div>
            <p class="text-center">
                <button type="submit" class="btn btn-primary btn-block">
                    Finalizar
                </button>
            </p>
        </div>
    </form>
@stop
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
        var paises = [ "Afganistán", "Akrotiri", "Albania", "Alemania", "Andorra", "Angola", "Anguila", "Antártida", "Antigua y Barbuda", "Antillas Neerlandesas", "Arabia Saudí", "Arctic Ocean", "Argelia", "Argentina", "Armenia", "Aruba", "Ashmore andCartier Islands", "Atlantic Ocean", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bahráin", "Bangladesh", "Barbados", "Bélgica", "Belice", "Benín", "Bermudas", "Bielorrusia", "Birmania Myanmar", "Bolivia", "Bosnia y Hercegovina", "Botsuana", "Brasil", "Brunéi", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Chad", "Chile", "China", "Chipre", "Clipperton Island", "Colombia", "Comoras", "Congo", "Coral Sea Islands", "Corea del Norte", "Corea del Sur", "Costa de Marfil", "Costa Rica", "Croacia", "Cuba", "Dhekelia", "Dinamarca", "Dominica", "Ecuador", "Egipto", "El Salvador", "El Vaticano", "Emiratos Árabes Unidos", "Eritrea", "Eslovaquia", "Eslovenia", "España", "Estados Unidos", "Estonia", "Etiopía", "Filipinas", "Finlandia", "Fiyi", "Francia", "Gabón", "Gambia", "Gaza Strip", "Georgia", "Ghana", "Gibraltar", "Granada", "Grecia", "Groenlandia", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Ecuatorial", "Guinea-Bissau", "Guyana", "Haití", "Honduras", "Hong Kong", "Hungría", "India", "Indian Ocean", "Indonesia", "Irán", "Iraq", "Irlanda", "Isla Bouvet", "Isla Christmas", "Isla Norfolk", "Islandia", "Islas Caimán", "Islas Cocos", "Islas Cook", "Islas Feroe", "Islas Georgia del Sur y Sandwich del Sur", "Islas Heard y McDonald", "Islas Malvinas", "Islas Marianas del Norte", "IslasMarshall", "Islas Pitcairn", "Islas Salomón", "Islas Turcas y Caicos", "Islas Vírgenes Americanas", "Islas Vírgenes Británicas", "Israel", "Italia", "Jamaica", "Jan Mayen", "Japón", "Jersey", "Jordania", "Kazajistán", "Kenia", "Kirguizistán", "Kiribati", "Kuwait", "Laos", "Lesoto", "Letonia", "Líbano", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Macao", "Macedonia", "Madagascar", "Malasia", "Malaui", "Maldivas", "Malí", "Malta", "Man, Isle of", "Marruecos", "Mauricio", "Mauritania", "Mayotte", "México", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montserrat", "Mozambique", "Namibia", "Nauru", "Navassa Island", "Nepal", "Nicaragua", "Níger", "Nigeria", "Niue", "Noruega", "Nueva Caledonia", "Nueva Zelanda", "Omán", "Pacific Ocean", "Países Bajos", "Pakistán", "Palaos", "Panamá", "Papúa-Nueva Guinea", "Paracel Islands", "Paraguay", "Perú", "Polinesia Francesa", "Polonia", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "República Centroafricana", "República Checa", "República Democrática del Congo", "República Dominicana", "Ruanda", "Rumania", "Rusia", "Sáhara Occidental", "Samoa", "Samoa Americana", "San Cristóbal y Nieves", "San Marino", "San Pedro y Miquelón", "San Vicente y las Granadinas", "Santa Helena", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Southern Ocean", "Spratly Islands", "Sri Lanka", "Suazilandia", "Sudáfrica", "Sudán", "Suecia", "Suiza", "Surinam", "Svalbard y Jan Mayen", "Tailandia", "Taiwán", "Tanzania", "Tayikistán", "TerritorioBritánicodel Océano Indico", "Territorios Australes Franceses", "Timor Oriental", "Togo", "Tokelau", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Unión Europea", "Uruguay", "Uzbekistán", "Vanuatu", "Venezuela", "Vietnam", "Wake Island", "Wallis y Futuna", "West Bank", "World", "Yemen", "Yibuti", "Zambia", "Zimbabue" ];
            var op = "";
            for (var i = 0; i < paises.length; i++) {
                op += "<option value='"+paises[i]+"'>"+paises[i]+"</option>";
            }
            $("#pais").append(op);

            var meses = ['enero','febrero','marzo','abril','mayo','junio','julio', 'agosto','septiembre','octubre','noviembre','diciembre'];
            var opM = "";
            for (var a = 0; a < meses.length; a++) {
                opM += "<option value='"+meses[a]+"'>"+meses[a]+"</option>";
            }
            $("#mes").append(opM);
            $("#btn_link1").on("click", function(){
                if ($("#name").val() == ""){
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo nombre de usuario es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                if ($("#email").val() == ""){
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo correo es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                if ($("#password").val() == ""){
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo contraseña es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                if ($("#password-confirm").val() == "") {
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo confirmar contraseña es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                var emal = JSON.parse($("#email").val());

                for (var e = 0; e < emal.length; e++) {
                    console.log(emal[e]);
                    if( emal[e] != "@" ){
                        $.amaran({
                            'theme'     :'awesome warning',
                            'content'   :{
                                title: "",
                                message:'El correo ingresado es incorrecto.',
                                info: "",
                                icon:'fa fa-ban'
                            },
                            'position'  :'top right',
                            'delay'     :3000
                        });
                        return false;
                    }
                }
                $("#div2").show();
                $("#div1").hide();
            })
            $("#btn_link2").on("click", function(){
                if ($("#nombres").val() == ""){
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo nombres es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                if ($("#apellidos").val() == ""){
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo apellidos es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                if ($("#pais").val() == ""){
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo pais es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                if ($("#genero").val() == "") {
                    $.amaran({
                        'theme'     :'awesome warning',
                        'content'   :{
                            title: "",
                            message:'El campo género es requerido.',
                            info: "",
                            icon:'fa fa-ban'
                        },
                        'position'  :'top right',
                        'delay'     :3000
                    });
                    return false;
                }
                $("#div3").show();
                $("#div2").hide();
            })
        })
    </script>
@stop
