@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Usuarios}}</span>
                    <a href="" class="btn btn-primary btn-sm">Nuevo Usuario</a>
                </div>

                <div class="card-body">
                    @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{session('mensaje')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Escalafon</th>
                            <th scope="col">Título</th>
                            <th scope="col">Tipo de Contrato</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
