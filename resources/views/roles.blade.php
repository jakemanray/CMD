@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Ingreso de Datos de Roles</h3>
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
            <form action="{{route('profile.crearRol')}}" method="POST">
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
                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
                <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{old('descripcion')}}">
                <button class="btn btn-secondary btn-block">Agregar</button>
            </form>
            <table class="table table-responsive-sm">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoRoles as $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>
                <a href="{{route('profile.editarRol',$item)}}" class="btn btn-outline-success btn-sm"><span class="fas fa-pen"></span>&nbspEditar</a>
                <form action="{{route('profile.deleteRol',$item)}}" method="POST" class="d-inline">
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
@endsection
