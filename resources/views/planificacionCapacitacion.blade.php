@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">CAPACITACIÓN: Descripción de Plan de Capacitación</h3>
    </div>
    <div class="card-body">
        <div class="container my-4">
            @if (session('mensaje'))
                <div class="alert alert-success">
                    {{session('mensaje')}}

                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{route('profile.crearPlanCapacitacion')}}" method="POST">
                @csrf
                @error('nombre')
                    <div class="alert alert-danger">
                        El Plan de Capacitación es obligatorio
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
                        La fecha de término es obligatoria
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
                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
                <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{old('descripcion')}}">
                <input type="text" name="fechaInicio" placeholder="Fecha Inicio" class="form-control mb-2 textbox-n" onfocusin="(this.type='date')" onfocusout="(this.type='text')"  id="date" value="{{old('fechaInicio')}}">
                <input type="text" name="fechaTermino" placeholder="Fecha Termino" class="form-control mb-2 textbox-n" onfocusin="(this.type='date')" onfocusout="(this.type='text')"  id="date" value="{{old('fechaTermino')}}">

                <input type="datextte" name="cantidadSCT" placeholder="Cantidad de SCT" class="form-control mb-2" value="{{old('cantidadSCT')}}">
                <button class="btn btn-secondary btn-block">Agregar</button>
            </form>
            <table class="table table-responsive-sm">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha de Inicio</th>
                <th scope="col">Fecha Termino</th>
                <th scope="col">Cantidad SCT</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoPlanCapacitacion as $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->fechaInicio->format('d.m.Y')}}</td>
                <td>{{$item->fechaTermino->format('d.m.Y')}}</td>
                <td>{{$item->cantidadSCT}}</td>
                <td>
                <a href="{{route('profile.editarPlanCapacitacion',$item)}}" class="btn btn-outline-success btn-sm"><span class="fas fa-pen"></span>&nbspEditar</a>
                <form action="{{route('profile.deletePlanCapacitacion',$item)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger btn-sm" type="submit"><span class="icon-bin"></span>&nbspEliminar</button>
                </form>
                </td>
                </tr>
            @endforeach()
            </tbody>
            </table>
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
