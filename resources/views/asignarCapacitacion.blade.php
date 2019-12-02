@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">CAPACITACIÓN: Asignar Plan de Capacitación</h3>
    </div>
    <div class="card-body">
        <div class="container my-4">
        <form action="" method="POST">
                @csrf

                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
                <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{old('descripcion')}}">
                <input type="date" name="fechaInicio" placeholder="Fecha de Inicio" class="form-control mb-2" value="{{old('fechaInicio')}}">
                <input type="text" name="cantSCT" placeholder="Cantidad de SCT" class="form-control mb-2" value="{{old('cantSCT')}}">
                <button class="btn btn-secondary btn-block">Buscar</button>
            </form>
        </div>
    </div>
</div>
@endsection
