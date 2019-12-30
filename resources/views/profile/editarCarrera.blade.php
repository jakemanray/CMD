@extends('layouts.plantilla')

@section('content')
@inject('facultades', 'App\Services\Facultades')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">ADMINISTRADOR: Actualización de Datos de Carrera</h3>
    </div>
    <div class="card-body">
        <div class="container my-4">
            @if (session('mensaje'))
                <div class="alert alert-success">
                    {{session('mensaje')}}

                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>



                    </button>
                    <div class="d-inline" style="text-align:rigth"><a href="{{route('carrera')}}" class="btn btn-outline-success" >Volver</a></div>
                </div>

            @endif
            <form action="" method="POST">
                @method('PUT')
                @csrf
                @error('nombre')
                    <div class="alert alert-danger">
                        El nombre de departamento obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('facultad_id')
                    <div class="alert alert-danger">
                        La Facultad es obligatoria
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                @error('departamento_id')
                    <div class="alert alert-danger">
                        El Departamento es obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror

                <div class="form-group row">
                    <div class="col-md-12">

                        <select v-model='selected_facultad' @change="loadDepartamentos" id="facultad_id" name="facultad_id" class="form-control{{ $errors->has('facultad_id') ? ' is-invalid' : '' }}">
                            @foreach($facultades->get() as $index => $facultad)
                                <option value="{{ $index }}">
                                    {{ $facultad }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-12">
                        <select v-model="selected_departamento" id="departamento_id"  name="departamento_id" class="form-control{{ $errors->has('departamento_id') ? ' is-invalid' : '' }}">
                            <option value="">Selecciona una Departamento</option>
                            <option v-for="(departamento, index) in departamentos" v-bind:value="index">
                                @{{departamento}}
                            </option>>
                        </select>
                    </div>
                </div>
                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$tipoCarrera->nombre}}">
                <button class="btn btn-secondary btn-block">Actualizar</button>
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
@endsection
