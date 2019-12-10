@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">CAPACITACIÓN: Asignar Información Plan de Capacitación</h3>
    </div>
    <div class="card-body">
        <div class="container my-4">
        <form action="{{route('profile.crearAsignarCapacitacion')}}" method="POST">
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
            <h3>Modulos</h3>
            <table class="table table-responsive-sm">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>

                <th scope="col">Capacitador</th>
                <th scope="col">Nivel</th>
                <th scope="col">Modalidad</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoModulo as $item)
                <tr>
                <th scope="row">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="modulo_id[]" id="modulo_id" value={{$item->id}}>
                    <label class="form-check-label" for="inlineCheckbox1">{{$item->id}}</label>
                </div>
                </th>
                <td>{{$item->nombre}}</td>

                <td>
                <div class="form-check form-check-inline">
                        <select name="capacitador_id[]" id="capacitador_id" class="form-control-2">
                        @foreach($tipoUsuario as $itemUsuario)
                                <option value={{$itemUsuario->id}}>{{$itemUsuario->name}}</option>
                        @endforeach

                        </select>
                </div>
                </td>
                <td>
                        <select name="nivel_id[]" id="nivel_id" class="form-control-2">
                        @foreach($tipoNivel as $itemNivel)
                                <option value={{$itemNivel->id}}>{{$itemNivel->nombre}}</option>
                        @endforeach
                        </select>

                </td>
                <td>
                        <select name="modalidad[]" id="modalidad" class="form-control-2">
                            <option value="PRESENCIAL">PRESENCIAL</option>
                            <option value="B-LEARNING">B-LEARNING</option>
                            <option value="E-LEARNING">E-LEARNING</option>
                        </select>

                </td>
                </tr>
            @endforeach()
            </tbody>
            </table>
            <button class="btn btn-secondary btn-block" type="submit">Agregar</button>
            </form>
        </div>
    </div>
</div>
@endsection
