<!DOCTYPE html>
<html lang="es">
<head>
    <title>Específicas - FARUSAC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href="{{ url('css/googlefonts-css-latio.css') }}" type='text/css'>
    <link rel="stylesheet" href="{{ url('css/aspirante.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/simple-sidebar.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-datetimepicker.min.css') }}">

    <style>
        body {
            font-family: 'Lato';
        }
    </style>

</head>
<body>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="{{ url('aspirante') }}">
                <img src="{{ url('img/logotipoFARUSAC_Amarillo.png') }}"  style="width:210px;height:70px;">
            </a></li>
            <li>&nbsp;</li>
            <li><a href="{{ url('aspirante/recursos/fechas') }}"><span class="glyphicon glyphicon-calendar" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                    Fechas</a></li>
            <li><a href="{{ url('aspirante/recursos/reglamento') }}"><span class="glyphicon glyphicon-file" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                    Reglamento</a></li>
            <li><a href="{{ url('aspirante/recursos/guia-asignacion') }}"><span class="glyphicon glyphicon-facetime-video" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                    Guía de asignación</a></li>
            <li><a href="{{ url('aspirante/recursos/guia-aplicacion') }}"><span class="glyphicon glyphicon-ok" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                    Guía de aplicación</a></li>
            <li>&nbsp;</li>
            @if  (Auth::guest())
                <li><a href="{{ url('aspirante/login') }}"><span class="glyphicon glyphicon-log-in" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                        Iniciar Sesión</a></li>
                <li><a href="{{ url('aspirante/register') }}"><span class="glyphicon glyphicon-user" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                        Registro</a></li>
            @else
                <li id="item_aspirante">
                    <a href="{{ url('aspirante') }}">
                        <span class="glyphicon glyphicon-edit" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                        Datos</a>
                </li>
                <li id="li_pruebaEspecifica">
                    <a href="{{ url('aspirante/PruebaEspecifica/create') }}">
                        <span class="glyphicon glyphicon-align-justify" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                        Prueba Específica</a>
                </li>
                <li>
                    <a href="{{ url('aspirante/formulario/'.Auth::user()->getFormulario()->id_formulario) }}/edit">
                        <span class="glyphicon glyphicon-check" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                        Aprobados</a>
                </li>
                <li>&nbsp;</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                        NOV: {{ Auth::user()->NOV }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('aspirante/configuracion') }}">
                                <span class="glyphicon glyphicon-wrench" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                                Configurar cuenta</a></li>
                        <li><a href="{{ url('aspirante/logout') }}">
                                <span class="glyphicon glyphicon-log-out" style="font-size:25px"></span>&nbsp;&nbsp;&nbsp;
                                Cerrar Sesión</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if  (!Auth::guest())
                        @if($errors->any())
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                @foreach ($errors->all() as $error)
                                    <strong>Error: </strong> {!!$error !!}<br/>
                                @endforeach
                            </div>
                        @endif
                        @if (Session::has('mensaje_exito'))
                            <div class="container">
                                <div class="alert alert-success fade in" id="alert_message">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {!! Session::get('mensaje_exito') !!}
                                </div>
                            </div>

                            <script>
                                window.setTimeout(function () { // hide alert message
                                    $("#alert_message").alert('close');
                                }, 7000);//milisegundos
                            </script>
                        @endif
                    @endif

                    <!--a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a-->
                </div>
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div> <!-- /#wrapper -->





<!-- JavaScripts -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/moment.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>

<script src="{{ url('js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/locale/es.js') }}" type="text/javascript"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
@section('scripts')
@show

</body>
</html>

