@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">CAPACITACIÓN: Asignar Docente a Plan de Capacitación</h3>
    </div>
    <div class="card-body">
        <div class="container my-4">
        <form action="" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-md-12">
                    <select name="capacitacion_id" id="capacitacion_id" class="form-control">
                    @foreach($tipoCapacitacion as $item)
                            <option value={{$item->id}}>{{$item->nombre}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <h3>Docentes</h3>
            <table class="table table-responsive-sm">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Carrera</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoDocente as $item)
                <tr>
                <th scope="row">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">{{$item->id}}</label>
                </div>
                </th>
                <td>{{$item->rut}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->carrera->nombre}}</td>
                </tr>
            @endforeach()
            </tbody>
            </table>
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
