@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Ingreso de Usuarios</h3>
    </div>
    <div class="card-body">
        <div class="container my-2">
            <form action="" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Nombre" class="form-control mb-2" value="{{old('name')}}">
                <input type="text" name="lastName" placeholder="Apellido" class="form-control mb-2" value="{{old('lastName')}}">
                <input type="date" name="nacimiento" placeholder="Fecha de Nacimiento" class="form-control mb-2" value="{{old('nacimiento')}}">

                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="position" id="position" class="form-control">
                            @foreach($tipoPerfil as $itemPerfil)
                                <option value="{{$itemPerfil->id}}">{{$itemPerfil->nombre}}</option>
                            @endforeach()
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="escalafon" id="escalafon" class="form-control">
                            @foreach($tipoEscalafon as $itemEscalafon)
                                <option value="{{$itemEscalafon->id}}">{{$itemEscalafon->nombre}}</option>
                            @endforeach()
                        </select>
                    </div>
                </div>
                <input type="text" name="titulo" placeholder="Titulo" class="form-control mb-2" value="{{old('titulo')}}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <select name="tipoContrato" id="tipoContrato" class="form-control">
                            <option value="1">Contrata</option>
                            <option value="2">Honorario</option>
                            <option value="3">Planta</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                            <div style="form-control mb-2">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo"  value="{{old('email')}}">
                            </div>
                    </div>
                </div>
                <button class="btn btn-secondary btn-block">Agregar</button>
            </form>
        <table class="table table-responsive-sm" style="font-size:70%">
            <thead>
                <tr>
                <th scope="col-sm-2" style="vertical-align:middle">#id</th>
                <th scope="col-sm-2" style="vertical-align:middle">Nombre</th>
                <th scope="col-sm-2" style="vertical-align:middle">Apellido</th>
                <th scope="col-sm-2" style="vertical-align:middle">Fecha de Nacimiento</th>
                <th scope="col-sm-2" style="vertical-align:middle">Cargo</th>
                <th scope="col-sm-2" style="vertical-align:middle">Escalafón</th>
                <th scope="col-sm-2" style="vertical-align:middle">Título</th>
                <th scope="col-sm-2" style="vertical-align:middle">Tipo de Contrato</th>
                <th scope="col-sm-2" style="vertical-align:middle">Correo</th>
                <th scope="col-sm-2" style="vertical-align:middle">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoUsuario as $item)
                <tr>
                <th scope="col-sm-2">{{$item->id}}</th>
                <td scope="col-sm-2">{{$item->name}}</td>
                <td scope="col-sm-2">{{$item->lastName}}</td>
                <td scope="col-sm-2">{{$item->nacimiento}}</td>
                <td scope="col-sm-2">{{$item->position}}</td>
                <td scope="col-sm-2">{{$item->escalafon}}</td>
                <td scope="col-sm-2">{{$item->titulo}}</td>
                <td scope="col-sm-2">{{$item->tipoContrato}}</td>
                <td scope="col-sm-2">{{$item->email}}</td>
                <td>
                <a href="{{route('profile.editarUsuarios',$item)}}" class="btn btn-outline-success btn-sm"><span class="fas fa-pen"></span>&nbspEditar</a>
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
