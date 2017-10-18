<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Zisare</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
        <script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

        <!--{!! asset('js/app.min.js') !!}-->

        <link />
    </head>
    <body>
        @yield('contenedor')
        @yield('scripts')
    </body>
</html>
