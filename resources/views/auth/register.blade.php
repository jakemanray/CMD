@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center"><h3><strong>{{ __('INGRESO DE DATOS') }}</h3></strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="nacimiento" type="date" class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" value="{{ old('nacimiento') }}" required autocomplete="lastName" autofocus>

                                @error('nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perfil_id" class="col-md-4 col-form-label text-md-right">{{ __('Perfil') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="perfil_id" id="perfil_id" class="form-control">
                                            <option value="" hidden>Perfil</option>
                                            <option value=1>Informatico</option>

                                        </select>
                                        </select>

                                    </div>
                                </div>
                                @error('perfil_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rol_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="rol_id" id="rol_id" class="form-control">
                                            <option value="" hidden>Rol</option>
                                            <option value=0>Ninguno</option>
                                            <option value=1>Asesor</option>
                                        </select>
                                        </select>

                                    </div>
                                </div>
                                @error('perfil_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="escalafon_id" class="col-md-4 col-form-label text-md-right">{{ __('Escalafón') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="escalafon_id" id="escalafon_id" class="form-control">
                                            <option value=1>B1</option>
                                            <option value="2">B2</option>
                                            <option value="3">B3</option>
                                            <option value="4">B4</option>
                                            <option value="5">B5</option>
                                            <option value="6">B6</option>
                                            <option value="7">B7</option>
                                            <option value="8">B8</option>
                                            <option value="9">B9</option>
                                            <option value="10">B10</option>
                                            <option value="11">B11</option>
                                            <option value="12">B12</option>
                                            <option value="13">B13</option>
                                            <option value="14">B14</option>
                                            <option value="15">C1</option>
                                            <option value="16">C2</option>
                                            <option value="17">C3</option>
                                            <option value="18">C4</option>
                                            <option value="19">C5</option>
                                            <option value="20">C6</option>
                                            <option value="21">C7</option>
                                            <option value="22">C8</option>
                                            <option value="23">C9</option>
                                        </select>

                                    </div>
                                </div>
                                @error('escalafon_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="titulo" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo">

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipoContrato" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Contrato') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="tipoContrato" id="tipoContrato" class="form-control">
                                            <option value="1">Contrata</option>
                                            <option value="2">Honorario</option>
                                            <option value="3">Planta</option>
                                        </select>

                                    </div>
                                </div>
                                @error('tipoContrato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
