@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Ingreso de Datos Escalafón</h3>
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
        <form action="{{route('profile.crearEscalafon')}}" method="POST">
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
            @error('sueldo')
                <div class="alert alert-danger">
                    El sueldo es obligatorio
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{old('descripcion')}}">
            <input type="text" name="sueldo" placeholder="Sueldo" class="form-control mb-2" value="{{old('sueldo')}}">
            <button class="btn btn-secondary btn-block">Agregar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Escalafón</th>
                <th scope="col">Descripción</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoEscalafon as $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->sueldo}}</td>
                <td>
                    <a href="{{route('profile.editarEscalafon',$item)}}" class="btn btn-outline-success btn-sm">Editar</a>
                    <form action="{{route('profile.deleteEscalafon',$item)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm" type="submit">Eliminar</button>
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
@endsection
