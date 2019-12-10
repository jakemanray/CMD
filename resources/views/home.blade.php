@extends('layouts.plantilla')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header"><center><h3>Áreas CMD</h3></center></div>
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
            <div class=" card-body row mt-5 justify-content-center">

                <div class="col cols=12 md-4">
                    <div class="card text-white bg-info mb-2" style="width: 15rem;">
                        <div class="card-header"><h3 class="text-center">Capacitación</h3></div>
                        <img src="{{asset('img/capacitacion.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!--<center><a href="#" class="btn btn-danger">Acceso</a></center>-->

                        </div>
                        <div class="card text-info bg-info" style="font-size:75%">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item card border-info"><a class="text-info"  href="{{route('planificacionModulo')}}"><span class="fas fa-book-open"></span>&nbspMódulos</a></li>
                            <li class="list-group-item card border-info"><a class="text-info" href="{{route('planificacionNivel')}}"><span class="fas fa-grip-lines"></span>&nbspNiveles</a></li>
                            <li class="list-group-item card border-info"><a class="text-info" href="{{route('planificacionCapacitacion')}}"><span class="fa fa-calendar"></span>&nbspPlanificar Capacitación</a></li>
                            <li class="list-group-item card border-info"><a class="text-info" href="{{route('asignarDocenteCapacitacion')}}"><span class="far fa-calendar-plus"></span>&nbspAsignar Docente Capacitación</a></li>
                            <li class="list-group-item card border-info"><a class="text-info" href="{{route('asignarAsistenciaCapacitacion')}}"><span class="fas fa-user-check"></span>&nbspAsignar Asistencia Capacitación</a></li>
                            <div class="list-group-item card border-info">
  <button type="button" class="text-info">
    Split dropright
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropright</span>
  </button>
  <div class="dropdown-menu">
  <li class="list-group-item card border-info"><small><a class="text-info" href="{{route('asignarAsistenciaCapacitacion')}}"><span class="fas fa-user-check"></span>&nbspAsignar Asistencia Capacitación</a></small></li>
  </div>
</div>

                        </li>
                            </ul>
                        </ul>
                        </div>

                    </div>
                </div>
                <div class="col cols=12 md-4">
                    <div class="card text-white bg-danger mb-2" style="width: 15rem;">
                        <div class="card-header"><h3 class="text-center">Asesoria</h3></div>
                        <img src="{{asset('img/asesoria.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <center><a href="#" class="btn btn-danger">Acceso</a></center>
                        </div>
                    </div>
                </div>
                <div class="col cols=12 md-4">
                    <div class="card text-white bg-success mb-2" style="width: 15rem;">
                        <div class="card-header"><h3 class="text-center">Innovación</h3></div>
                        <img src="{{asset('img/innovacion.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <center><a href="#" class="btn btn-danger">Acceso</a></center>
                        </div>
                    </div>
                </div>
                <div class="col cols=12 md-4">
                    <div class="card text-white bg-warning mb-2" style="width: 15rem;">
                        <div class="card-header"><h3 class="text-center">Moodle</h3></div>
                        <img src="{{asset('img/moodle.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <center><a href="#" class="btn btn-danger">Acceso</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
