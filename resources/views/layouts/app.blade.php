<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Zisare</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}" >
        
        <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
        

    </head>
    <body>
        @yield('contenedor')
        <!-- <script src="{!! asset('js/bootstrap.min.js') !!}"></script> -->
        @yield('scripts')
    </body>
</html>
