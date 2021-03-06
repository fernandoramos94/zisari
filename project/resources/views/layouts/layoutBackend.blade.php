<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador - Zisari</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo"><span>Zisari</span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Menú de Navegación">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>
                    <li class="dropdown messages">
                        <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
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
                                        <span class="sender">James Bagian</span>
                                        <span class="time">30 mins</span>
                                        <div class="message-content">Lorem ipsum dolor sit amet, elit rutrum felis sed erat augue fusce...</div>
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
                                        <span class="sender">John Douey</span>
                                        <span class="time">3 hours</span>
                                        <div class="message-content">Penatibus suspendisse sit pellentesque eu accumsan condimentum nec...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ellen Baker</span>
                                        <span class="time">7 hours</span>
                                        <div class="message-content">Sem dapibus in, orci bibendum faucibus tellus, justo arcu...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ivan Bella</span>
                                        <span class="time">6 hours</span>
                                        <div class="message-content">Curabitur metus faucibus sapien elit, ante molestie sapien...</div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Ver todos los mensajes <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </li>
                    <li class="profile-photo">
                        <img src="{{asset('img/img_users/perfil/'.Auth::user()->imagen)}}" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      {{Auth::user()->name}} <i class="fa fa-angle-down"></i>
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
                    <li>
                        <div class="toggle-navigation toggle-right">
                            <button type="button" class="btn btn-default" id="toggle-right">
                                <i class="fa fa-comment"></i>
                            </button>
                        </div>
                    </li>

                </ul>
            </div>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </header>
        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active" id="liuno">
                        <a href="{{URL::to('home')}}"><i class="fa fa-dashboard"></i><span>Administrador General</span></a>
                    </li>
                    <li class="sub-menu" id="lidos">
                        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Elementos de Diseño</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href="{{URL::to('logo')}}">Imagen de Fecha calendario</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu" id="litres">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Usuarios</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="">Administración</a>
                            </li>
                            <li id="userRegister"><a href="{{URL::to('usuarios')}}" >Registros</a>
                            </li>
                            <li id="paisesActivos"><a href="{{URL::to('paises')}}" >Paises</a>
                            </li>
                        </ul>
                    </li>                   
                </ul>
            </div>

        </aside>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <!--tiles start-->
                <div class="row">
                    @yield('contenedorBackend')
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
    <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var url = location.pathname;
            url = url.split("/").pop();
            if (url == "logo") {
                $("#lidos > ul").show();
                $("#lidos > ul > li").addClass("active");
                $("#liuno").removeClass("active");
                $("#litres").removeClass("active");
            }
            if (url == "home") {
                $("#liuno").addClass("active");
                $("#lidos").removeClass("active");
                $("#litres").removeClass("active");
            }
            if (url == "usuarios") {
                $("#litres > ul").show();
                $("#litres > ul > li#userRegister").addClass("active");
                $("#liuno").removeClass("active");
                $("#lidos").removeClass("active");
            }
            if (url == "paises") {
                $("#litres > ul").show();
                $("#litres > ul > li#paisesActivos").addClass("active");
                $("#liuno").removeClass("active");
                $("#lidos").removeClass("active");
            }

            app.timer();
            app.map();
            app.weather();
            app.morrisPie();
        });
    </script>
    @yield('scripts')
</body>

</html>
