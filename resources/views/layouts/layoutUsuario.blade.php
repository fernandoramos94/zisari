<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zisari</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css') }}">
    <!-- ToDos  -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/todo/css/todos.css') }}">
    <!-- Morris  -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/css/morris.css') }}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body style="height: 100%; overflow: hidden;">
    <script src="{{ asset('js/main.js') }}"></script>
    <section id="container" style="height: 100vh;position: relative;">
        <header id="header" class="cabecera" style="background: transparent !important;">
          
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Menú de Navegación">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div style="display: inline-block;margin-left: 2%;">
                <?php 
                    use Illuminate\Support\Facades\DB;
                    date_default_timezone_set('UTC');
                    $imgLogo = DB::table('logoimg')->get();
                    $text = DB::table('logotext')->get();
                    $fechaActual = date("Y-m-d H:i:s");
                 ?>
                 @foreach ($text as $title)
                    @if ($title->estado == 1 && $title->fechaFinalizacion > $fechaActual)
                        <h4 class="text-center" style="color: #74accf"><B>{{$title->titulo}}</B></h4>
                    @endif
                @endforeach

                @foreach ($imgLogo as $logo)
                    @if ($logo->estado == 1 && $logo->fechaFinalizacion > $fechaActual)
                        @if ($logo->imagenLogo != null && $logo->url == null || $logo->imagenLogo != null && $logo->url != null)
                                <a href="{{$logo->url}}" target="_blank"><img data-toggle="tooltip" data-placement="top" title="{{$logo->tooltip}}" width="92" src="{{asset('img/logo/'.$logo->imagenLogo)}}"></a>
                        @else
                            <a href="{{$logo->url}}" target="_blank"><img data-toggle="tooltip" data-placement="top" title="{{$logo->tooltip}}" style="width: 100%" id="imagenLogo" src="$logo->url"></a>
                        @endif
                    @endif
                @endforeach
                <!-- <img src="https://www.google.com.co/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" width="92"> -->
            </div>
            <div class="search">
                    <input placeholder="Buscar a tus amigos(as) para tu comunidad" type="text" class="buscador" data-provide="typeahead" id="typeahead">
                    <button>Buscar</button>
            </div>
            <div class="user-nav">
                <ul>
                    
                    <li class="dropdown messages">
                        <!-- <span class="badge badge-danager animated bounceIn" id="new-messages">5</span> -->
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="tooltip" data-placement="right" title="Usuarios">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu alert animated fadeInDown">
                            <li>
                                <h1>Tienes <strong>5</strong> mensajes nuevos</h1>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar1.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender"></span>
                                        <span class="time">2 hour</span>
                                        <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar2.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Ver todos los mensajes <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown messages">
                        <!-- <span class="badge badge-danager animated bounceIn" id="new-messages">5</span> -->
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mensaje" data-toggle="tooltip" data-placement="right" title="Mensajes">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu alert animated fadeInDown">
                            <li>
                                <h1>Tienes <strong>5</strong> mensajes nuevos</h1>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar1.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender"></span>
                                        <span class="time">2 hour</span>
                                        <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar2.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Ver todos los mensajes <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown messages">
                        <!-- <span class="badge badge-danager animated bounceIn" id="new-messages">5</span> -->
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-noti" data-toggle="tooltip" data-placement="right" title="Notificaciones">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu alert animated fadeInDown">
                            <li>
                                <h1>Tienes <strong>5</strong> mensajes nuevos</h1>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar1.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender"></span>
                                        <span class="time">2 hour</span>
                                        <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar2.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Ver todos los mensajes <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li><strong style="color: #fff">|</strong></li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Fernando Ramos<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i> Calendario</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i> Mensajes <span class="badge badge-danager" id="user-inbox">5</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li>
                    <li class="profile-photo">
                        <img src="http://www.thisischile.cl/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <p style="color: #fff; margin-left: 3%; margin: 0;">0.00000000 Z</p>
                    </li>
                    <li class="dropdown settings">
                        <p style="color: #fff; margin: 0;">0 Ptos</p>
                    </li>

                </ul>
            </div>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </header>
        <!--sidebar left start-->
        <aside class="menuOculto sidebar sidebar-toggle">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <br>
                    <li class="active">
                        <a><i class="fa fa-home"></i><span>Inicio</span></a>
                    </li>
                    <hr>
                    <h4 style="padding: 10px 0 10px 25px">GANAR ZISARICOINS</h4>
                    <li class="sub-menu">
                        <a href="{{URL::to('layout')}}"><i class="fa fa-gift"></i><span>Recojer Gratis</span></a>
                        <!-- <i class="arrow fa fa-angle-right pull-right"></i> -->
                    </li>
                    <li class="sub-menu">
                        <a><i class="fa fa-video-camera"></i><span>Ver videos</span></a>
                    </li>

                </ul>
                <div class="politicas">
                    <p><a href="#">Nosotros</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Términos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Blog</a></p>
                    <p><a href="#">Política de Privacidad</a></p>
                    <p><a href="#">Publicidad</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Actualizaciones</a></p>
                </div>
                <center style="position: absolute;bottom: 10vh;left: 5%;">&copy; 2017 Zisari</center>
            </div>
        </aside>
        <section class="main-content-wrapper main-content-toggle-left contenidoPrincipal">
            <section id="main-content">
                <!--tiles start-->
                <div class="row">
                    @yield('contenedorLayout')
                </div>
            </section>
        </section>
        <!--main content end-->
        <!--sidebar right start-->
        <aside class="sidebarRight">
            <div id="rightside-navigation ">
                <div class="sidebar-heading"><i class="fa fa-user"></i> Contacts</div>
                <div class="sidebar-title">online</div>
                <div class="list-contacts">
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>James Bagian</h4>
                            <p>Los Angeles, CA</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar1.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Jeffrey Ashby</h4>
                            <p>New York, NY</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar2.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>John Douey</h4>
                            <p>Dallas, TX</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar3.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Ellen Baker</h4>
                            <p>London</p>
                        </div>
                        <div class="item-status item-status-away"></div>
                    </a>
                </div>

                <div class="sidebar-title">offline</div>
                <div class="list-contacts">
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar4.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Ivan Bella</h4>
                            <p>Tokyo, Japan</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar5.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Gerald Carr</h4>
                            <p>Seattle, WA</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar6.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Viktor Gorbatko</h4>
                            <p>Palo Alto, CA</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                </div>
            </div>
        </aside>
        <!--sidebar right end-->
    </section>
    <!--Global JS-->
    <!-- <script src="{{ asset('assets/js/jquery-1.10.2.min.js') }}"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/application.js') }}"></script>
    <!--Page Level JS-->
    <script src="{{ asset('assets/plugins/countTo/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/plugins/weather/js/skycons.js') }}"></script>
    <!-- FlotCharts  -->
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.canvas.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.image.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.categories.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.crosshair.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.errorbars.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.fillbetween.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.navigate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.selection.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.stack.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.symbol.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.threshold.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.colorhelpers.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.example.js') }}"></script>
    <!-- Morris  -->
    <script src="{{ asset('assets/plugins/morris/js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/js/raphael.2.1.0.min.js') }}"></script>
    <!-- Vector Map  -->
    <script src="{{ asset('assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- ToDo List  -->
    <script src="{{ asset('assets/plugins/todo/js/todos.js') }}"></script>
    <!--Load these page level functions-->
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.0/bootstrap3-typeahead.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src="http://jscrollpane.kelvinluck.com/script/jquery.jscrollpane.min.js"></script>

    <script>
        $("#contenidoGratis").jScrollPane();
        $(".menuOculto").on("click", function(){
            $(".menuOculto").addClass('sidebar-toggle');
            $(".contenidoPrincipal").addClass("main-content-toggle-left");
        })
        $(document).ready(function() {
            app.timer();
            app.map();
            app.weather();
            app.morrisPie();
        });
        $(document).ready(function() {

        var url = "{{URL::to('')}}";
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url+"/getUser",
            success: function (data) {
                var array = [];
                var urlImg = "{{asset('img/img_users/perfil')}}";
                for (var i = 0; i < data.length; i++) {
                    array.push(data[i].nombres+"#"+data[i].apellidos+"#"+data[i].name+"#"+data[i].imagen+"#"+data[i].id)
                    if (i == data.length-1) {
                        $('#typeahead').typeahead({
                            source: array,
                            highlighter: function(item) {
                                var parts = item.split('#'),
                                html = '<div class="contetido">';
                                html += '<div class="profile-photo">';
                                html += '<img src="'+urlImg+'/'+parts[3]+'" width="45" height="45" alt="" class="img-circle">';
                                html += '</div>';
                                html += '<div class="message-info">';
                                html += '<span class="sender">'+parts[0]+' '+parts[1]+'</span>';
                                html += '<div class="message-content"><span>hendrerit pellentesque, iure tincidunt...</span></div>';
                                html += '</div></div>'
                                var jElem = $(html);

                                return jElem.html();
                            },
                            updater: function(selectedName) {
                                var name = selectedName.split('#')[0];
                                return name;
                            }
                        })
                    }
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
    </script>
    <style type="text/css">
        ul.typeahead.dropdown-menu{
            width: 33.2%;
            top: 62px !important;
        }
        ul.typeahead.dropdown-menu > li.active > a{
            background: #1bbc9b;
            color: #fff;
        }
        ul.typeahead.dropdown-menu > li > a > div.message-info{
            display: inline-block;
            margin-left: 15px;
            vertical-align: middle;
        }
        ul.typeahead.dropdown-menu > li > a > div.profile-photo{
            display: inline-block;
        }
    </style>
    @yield('scripts')
</body>

</html>
