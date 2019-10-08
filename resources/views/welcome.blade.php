<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('img/favicon.png')}}">
        <title>{{ ('Sistemas CMD') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <!-- Styles -->

    </head>
    <body style="height:200px">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Inicio</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="row">
                    <img src="{{asset('img/logo.gif')}}" width="200" height="200" alt="">
                    <div class="col-md-2"></div>
                    <div class=" col-md-8 title m-b-md">SISTEMAS CMD</div>
                    <div class="col-md-2">
                </div>
                <!--<div class="title m-b-md">
                    Laravel
                </div>-->

                <div class="links">
                    <a href="http://www.uda.cl/">Universidad de Atacama</a>
                    <a href="http://www.cmd.uda.cl">CMD</a>
                    <a href="https://twitter.com/CMD_UDA?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3ACMD_UDA&ref_url=http%3A%2F%2Fwww.cmd.uda.cl%2F">Twitter</a>


                </div>

            </div>
            <div class="footer"><br><br><br><br><br><br><br><br><br><p align="center"><i>&copy; Creado por CMD     <strong>Universidad de Atacama</strong></i> </p></div>
        </div>
    </body>
</html>
