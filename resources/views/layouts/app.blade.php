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

        <!--{!! asset('js/app.min.js') !!}-->

    </head>
    <body>
        @yield('contenedor')
        <script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
        @yield('scripts')
    </body>
</html>
