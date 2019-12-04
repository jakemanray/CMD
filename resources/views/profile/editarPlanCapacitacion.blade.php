@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Actualización de Plan de Capacitación</h3>
    </div>
    <div class="card-body">
        <div class="container my-4">
            @if (session('mensaje'))
                <div class="alert alert-success">
                    {{session('mensaje')}}

                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>



                    </button>
                    <div class="d-inline" style="text-align:rigth"><a href="{{route('planificacionCapacitacion')}}" class="btn btn-outline-success" >Volver</a></div>
                </div>

            @endif
            <form action="{{route('profile.updatePlanCapacitacion',$tipoPlanCapacitacion->id)}}" method="POST">
                @method('PUT')
                @csrf
                @error('nombre')
                    <div class="alert alert-danger">
                        El nombre es obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('descripcion')
                    <div class="alert alert-danger">
                        La descripcion es obligatoria
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('fechaInicio')
                    <div class="alert alert-danger">
                        La fecha de inicio es obligatoria
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('fechaTermino')
                    <div class="alert alert-danger">
                        La fecha de termino es obligatoria
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('cantidadSCT')
                    <div class="alert alert-danger">
                        La cantidad de SCT es obligatoria
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                <div class="form-group row text-left">
                    <label class="col-sm-2 col-form-label">Plan Capacitación: </label>
                    <div class="col-sm-10">
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$tipoPlanCapacitacion->nombre}}">
                    </div>
                </div>
                <div class="form-group row text-left">
                    <label class="col-sm-2 col-form-label">Descripción: </label>
                    <div class="col-sm-10">
                        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{$tipoPlanCapacitacion->descripcion}}">
                    </div>
                </div>
                <div class="form-group row text-left">
                    <label class="col-sm-2 col-form-label">Fecha Inicio: </label>
                    <div class="col-sm-10">
                        <input type="date" name="fechaInicio" placeholder="Fecha de Inicio" class="form-control mb-2" value="{{$tipoPlanCapacitacion->fechaInicio}}">
                    </div>
                </div>
                <div class="form-group row text-left">
                    <label class="col-sm-2 col-form-label">Fecha Termino: </label>
                    <div class="col-sm-10">
                        <input type="date" name="fechaTermino" placeholder="Fecha de Termino" class="form-control mb-2" value="{{$tipoPlanCapacitacion->fechaTermino}}">
                    </div>
                </div>
                <div class="form-group row text-left">
                    <label class="col-sm-2 col-form-label">Cantidad de SCT: </label>
                    <div class="col-sm-10">
                        <input type="text" name="cantidadSCT" placeholder="Cantidad de SCT" class="form-control mb-2" value="{{$tipoPlanCapacitacion->cantidadSCT}}">
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
@endsection
