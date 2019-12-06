@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Ingreso de Datos del Docente</h3>
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
        <form action="{{route('profile.crearDocente')}}" method="POST">
                @csrf
                @error('rut')
                    <div class="alert alert-danger">
                        El rut es obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('nombre')
                    <div class="alert alert-danger">
                        El nombre es obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('apellido')
                    <div class="alert alert-danger">
                        El Apellido es obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('sexo')
                    <div class="alert alert-danger">
                        El sexo es obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('carrera_id')
                    <div class="alert alert-danger">
                        La carrera es obligatoria
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                <input type="text" name="rut" placeholder="Rut" class="form-control mb-2" value="{{old('rut')}}">
                <input type="text" name="nombre" placeholder="Nombres" class="form-control mb-2" value="{{old('nombre')}}">
                <input type="text" name="apellido" placeholder="Apellidos" class="form-control mb-2" value="{{old('apellido')}}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="carrera_id" id="carrera_id" class="form-control">
                        @foreach($tipoCarrera as $item)
                                <option value={{$item->id}}>{{$item->nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <button class="btn btn-secondary btn-block" type="submit">Agregar</button>
            </form>
            <table class="table table-responsive-sm">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Sexo</th>
                <th scope="col">Carrera</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoDocente as $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->rut}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->sexo}}</td>
                <td>{{$item->carrera->nombre}}</td>


                <td>
                <a href="{{route('profile.editarDocente',$item)}}" class="btn btn-outline-success btn-sm"><span class="fas fa-pen"></span>&nbspEditar</a>
                <form action="{{route('profile.deleteDocente',$item)}}" method="POST" class="d-inline">
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
