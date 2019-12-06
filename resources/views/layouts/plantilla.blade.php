<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <title>{{ ('Sistemas CMD') }}</title><!--config('app.name', 'Laravel') -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">



</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    <img src="{{asset('img/logo.png')}}" width="250" height="75" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="{{route('home')}}" class="nav-link" style="font-size:100%; padding: 15px 20px"><span class="icon-home"></span>&nbspInicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('asesoria')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; font-size:100%; padding: 15px 20px">
                            <span class="icon-spinner10"></span>&nbspAsesoria
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span class="fa fa-calendar"></span>&nbspPlanificar Asesoría</a>
                            <a class="dropdown-item" href=""><span class="fa fa-calendar-check-o"></span>&nbspAsignar Asesoría</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; font-size:100%; padding: 15px 20px">
                            <span class="fas fa-chalkboard-teacher"></span>&nbspCapacitación
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('planificacionModulo')}}"><span class="fas fa-book-open"></span>&nbspMódulos</a>
                            <a class="dropdown-item" href="{{route('planificacionNivel')}}"><span class="fas fa-grip-lines"></span>&nbspNiveles</a>
                            <a class="dropdown-item" href="{{route('planificacionCapacitacion')}}"><span class="far fa-calendar-alt"></span>&nbspPlanificar Capacitación</a>
                            <a class="dropdown-item" href="{{route('asignarCapacitacion')}}"><span class="fa fa-calendar-check-o"></span>&nbspAsignar Informacion Plan Capacitación</a>
                            <a class="dropdown-item" href="{{route('asignarDocenteCapacitacion')}}"><span class="far fa-calendar-plus"></span>&nbspAsignar Docente Capacitación</a>
                            <a class="dropdown-item" href="{{route('asignarAsistenciaCapacitacion')}}"><span class="fas fa-user-check"></span>&nbspAsignar Asistencia Capacitación</a>
                            <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; font-size:100%; padding: 15px 20px">
                            <span class="fas fa-chalkboard-teacher"></span>&nbspCapacitación
                            </a>
                            </li>
                            </ul

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; font-size:100%; padding: 15px 20px">
                            <span class="icon-cloud"></span>&nbspMoodle
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('moodleLoad')}}">Cargar Backup</a>
                            <a class="dropdown-item" href="{{route('moodleDownload')}}">Descargar Backup</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; font-size:100%; padding: 15px 20px">
                            <span class="icon-user-check"></span>&nbspAdministrador
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('usuarios')}}"><span class="fa fa-user-plus"></span>&nbspUsuario</a>
                            <a class="dropdown-item" href="{{route('perfiles')}}"><span class="icon-address-book"></span>&nbspPerfiles</a>
                            <a class="dropdown-item" href="{{route('roles')}}"><span class="far fa-id-badge"></span>&nbsp&nbspRol</a>
                            <a class="dropdown-item" href="{{route('escalafon')}}"><span class="icon-file-text"></span>&nbspEscalafón</a>
                            <a class="dropdown-item" href="{{route('facultad')}}"><span class="fas fa-university"></span>&nbspFacultad</a>
                            <a class="dropdown-item" href="{{route('departamento')}}"><span class="fas fa-city"></span>&nbspDepartamento</a>
                            <a class="dropdown-item" href="{{route('carrera')}}"><span class="far fa-building"></span>&nbspCarrera</a>
                            <a class="dropdown-item" href="{{route('docente')}}"><span class="fas fa-diagnoses"></span>&nbspDocente</a>

                            <!--<a class="dropdown-item" href="{{route('moodleDownload')}}">Agregar Usuario</a>-->

                        </li>


                        <!--<li class="nav-item active"><a href="{{route('administrador')}}" class="nav-link" style="font-size:100%; padding: 15px 20px"><span class="icon-user-check"></span>&nbspAdministrador</a></li>-->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:black">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fas fa-sign-out-alt"></span>
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>


