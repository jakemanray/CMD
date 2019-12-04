@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Ingreso de Datos de Departamentos</h3>
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
        <form action="{{route('profile.crearDepartamento')}}" method="POST">
                @csrf
                @error('nombre')
                    <div class="alert alert-danger">
                        El nombre de departamento obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('descripcion')
                    <div class="alert alert-danger">
                        La Facultad es obligatoria
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror

                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">


                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="facultad_id" id="facultad_id" class="form-control">
                        @foreach($tipoFacultad as $item)
                                <option value={{$item->id}}>{{$item->nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <button class="btn btn-secondary btn-block">Agregar</button>
            </form>
            <table class="table table-responsive-sm">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Facultad</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoDepartamento as $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td scope="row">{{$item->nombre}}</td>
                <td scope="row">{{$item->facultad->nombre}}</td>
                <td>
                <a href="" class="btn btn-outline-success btn-sm"><span class="fas fa-pen"></span>&nbspEditar</a>
                <form action="" method="POST" class="d-inline">
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
