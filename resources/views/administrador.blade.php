@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
  <div class="card-header">
    <h3 class="card-title">ADMINISTRADOR: Ingreso de Datos</h3>
  </div>
  <div class="card-body">

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#formPerfil">Perfiles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#formUsuario">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
        </div>
    </div>
    <div id="pai" display="none">
    Hola
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
