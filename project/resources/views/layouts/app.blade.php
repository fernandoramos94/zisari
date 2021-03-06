<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Zisare</title>

        <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}" >
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="http://www.amaranjs.com/AmaranJS/dist/css/amaran.min.css">
        <link rel="stylesheet" href="http://www.amaranjs.com/AmaranJS/dist/css/animate.min.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/notifIt.css') }}">
        <script type="text/javascript" src="{{ asset('js/notifIt.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.mask.min.js') }}"></script>

    </head>
    <body>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('contenedor')
        <div class="footer">
            <div class="copyright">
                <!-- <div class="container"> -->
                    <div class="col-md-6">
                        <h6 class="text" style="color: #ffffff">© 2017 - Zisari</h6>
                    </div>
                    <div class="col-md-6">
                        <ul class="bottom_ul">
                            <li><a class="text" style="color: #1cb495" href="#">Nosotros</a></li>
                            <li><a class="text" style="color: #1cb495" href="#">Términos</a></li>
                            <li><a class="text" style="color: #1cb495" href="#">Política de Privacidad</a></li>
                            <li><a class="text" style="color: #1cb495" href="#">Publicidad</a></li>
                            <li><a class="text" style="color: #1cb495" href="#">Blog</a></li>
                            <li><a class="text" style="color: #1cb495" href="#">Actualizaciones</a></li>
                        </ul>
                    </div>
                <!-- </div> -->
            </div>
        </div>
        @yield('scripts')
    </body>
</html>
