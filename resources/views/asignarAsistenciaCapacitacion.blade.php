@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">CAPACITACIÓN: Asignar Asistencia Plan de Capacitación</h3>
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
            <div class="form-group row">
                <div class="col-md-12">
                    <select name="capacitacion_id" id="capacitacion_id" class="form-control">
                    @foreach($tipoModulo as $itemModulo)
                            <option value={{$itemModulo->id}}>{{$itemModulo->nombre}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <h3>Docentes</h3>
            <table class="table table-responsive-sm">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Asistencia</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoDocente as $itemDocente)
                <tr>
                <th scope="row">{{$itemDocente->id}}</th>
                <td>{{$itemDocente->nombre}}</td>
                <td>{{$itemDocente->apellido}}</td>
                <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                </div>
                </td>


                </tr>
            @endforeach()
            </tbody>
            </table>
            </form>
        </div>
    </div>
</div>
@endsection
