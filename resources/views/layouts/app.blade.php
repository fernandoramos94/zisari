<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Zisare</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <title>Zisare</title>

        <!--{!! asset('js/app.min.js') !!}-->

        <!-- Styles -->
        <link />
    </head>
    <body>
        @yield('contenedor')
        
        <!-- <script type="text/javascript">
            $(document).ready(function(){
                $("#btn_link1").on("click", function(){
                    $("#list1").hide();
                    $("#list2").show();
                });
                $("#btn_link2").on("click", function(){
                    $("#list2").hide();
                    $("#list3").show();
                });
                $("#btn_link3").on("click", function(){
                    $("#list3").hide();
                    $("#list4").show();
                });
            });
        </script> -->
    </body>
</html>
