@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Actualización de Usuario</h3>
    </div>
    <div class="card-body">
        <div class="container my-4">
        <form action="" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Nombre" class="form-control mb-2" value="{{$tipoUsuario->name}}">
                <input type="text" name="lastName" placeholder="Apellido" class="form-control mb-2" value="{{$tipoUsuario->lastName}}">
                <input type="date" name="nacimiento" placeholder="Fecha de Nacimiento" class="form-control mb-2" value="{{$tipoUsuario->nacimiento}}">

                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="position" id="position" class="form-control">
                            @foreach($tipoPerfil as $itemPerfil)
                                <option value="{{$itemPerfil->id}}">{{$itemPerfil->nombre}}</option>
                            @endforeach()
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="escalafon" id="escalafon" class="form-control">
                            escalafonAnterior={{$tipoUsuario->escalafon}}
                            @foreach($tipoEscalafon as $itemEscalafon)
                                @if ({{$itemEscalafon->nombre}}=='C4')
                                    <option value="{{$itemEscalafon->id}}" selected>{{$itemEscalafon->nombre}}</option>
                                @else
                                    <option value="{{$itemEscalafon->id}}">{{$itemEscalafon->nombre}}</option>
                                @endif
                            @endforeach()
                        </select>
                    </div>
                </div>
                <input type="text" name="titulo" placeholder="Titulo" class="form-control mb-2" value="{{$tipoUsuario->titulo}}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="tipoContrato" id="tipoContrato" class="form-control">
                            <option value="1">Contrata</option>
                            <option value="2">Honorario</option>
                            <option value="3">Planta</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                            <div style="form-control mb-2">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo"  value="{{$tipoUsuario->email}}">
                            </div>
                    </div>
                </div>
                <button class="btn btn-secondary btn-block">Actualizar</button>
            </form>
        </div>
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
