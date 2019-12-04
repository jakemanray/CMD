@extends('layouts.plantilla')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header"><center><h3>Áreas CMD</h3></center></div>
            <div class=" card-body row mt-5 justify-content-center">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col cols=12 md-4">
                    <div class="card text-white bg-info mb-2" style="width: 15rem;">
                        <div class="card-header"><h3 class="text-center">Capacitación</h3></div>
                        <img src="{{asset('img/capacitacion.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!--<center><a href="#" class="btn btn-danger">Acceso</a></center>-->

                        </div>
                        <div class="card text-info bg-info">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item card border-info"><a class="text-info" href="{{route('planificacionModulo')}}"><span class="fas fa-book-open"></span>&nbspMódulos</a></li>
                            <li class="list-group-item card border-info"><a class="text-info" href="{{route('planificacionCapacitacion')}}"><span class="fa fa-calendar"></span>&nbspPlanificar Capacitación</a></li>
                            <li class="list-group-item card border-info"><a class="text-info" href=""><span class="fa fa-calendar-check-o"></span>&nbspAsignar Capacitación</a></li>
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
