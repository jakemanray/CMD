@extends('layouts.plantilla')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        function ver(){
            $(#efecto).show();
        }
    </script>
    <div ng-app="">
        <button ng-click="ocultar=true">Ocultar</button>
        <button ng-click="ocultar=false">Mostrar</button>

        <form ng-hide="ocultar">
        <input type="text" value="Este formulario se oculta">
        </form>
    </div>
    <div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Ingreso de Datos</h3>
    </div>
    <div class="card-body">

        <div class="card text-center">
            <div class="card-header">

                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-secondary" onclick="ver()" >Perfiles</button>
                    <!--<a class="btn btn-primary" aria-expanded="false" href="#">Perfiles</a>-->

                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="#">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
            </div>
        <div id="efecto">

        <h1>Hola</h1>

        </div>
        <div class="card-footer text-muted">
            <script type="text/javascript">
                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                var f=new Date();
                document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear() + ". " + f.getHours() + ":" + f.getMinutes() +":"+f.getSeconds());
            </script>
        </div>
    </div>


@endsection
