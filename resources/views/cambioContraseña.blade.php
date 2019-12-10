@extends('layouts.plantilla')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">USUARIO: Cambio de Contraseña</h3>
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

        <form action="{{route('updatePassword')}}" method="POST">
            @csrf
            @error('myPassword')
                <div class="alert alert-danger">
                    La clave actual es obligatoria
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('password')
                <div class="alert alert-danger">
                    La contraseña nueva es obligatoria
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('password_confirmation')
                <div class="alert alert-danger">
                    La confirmacion de la contraseña es obligatoria
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <input type="password" name="myPassword" placeholder="Contraseña Actual" class="form-control mb-2" value="">
            <input type="password" name="password" placeholder="Contraseña Nueva" class="form-control mb-2" value="">
            <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" class="form-control mb-2" value="">
            <button class="btn btn-secondary btn-block">Actualizar Mi Contraseña</button>
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
</div>
@endsection
