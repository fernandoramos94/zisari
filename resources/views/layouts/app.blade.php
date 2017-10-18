<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Zisare</title>

        <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}" >
        <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </head>
    <body>
        @yield('contenedor')
        <!-- <script src="{!! asset('js/bootstrap.min.js') !!}"></script> -->
        @yield('scripts')
    </body>
</html>
