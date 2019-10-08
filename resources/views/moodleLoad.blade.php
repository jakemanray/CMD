@extends('layouts.plantilla')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card well" >
                <div class="card-header text-md-center"><h3><strong>{{ __('CARGAR BACKUP') }}</strong></h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('moodleLoad') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="categoria" id="categoaria" class="form-control">

                                            <option value="PREGRADO">PREGRADO</option>
                                            <option value="SEDE VALLENAR">SEDE VALLENAR</option>
                                            <option value="UDA ENGLISH CENTER (UEC)">UDA ENGLISH CENTER (UEC)</option>
                                            <option value="DIRECCION DE EDUCACION CONTINUA">DIRECCIÓN DE EDUCACIÓN CONTINUA</option>
                                            <option value="POSTGRADO">POSTGRADO</option>
                                            <option value="COMPLEJO TECNOLOGICO DE APRENDIZAJE (CTA)">COMPLEJO TECNOLÓGICO DE APRENDIZAJE (CTA)</option>
                                            <option value="CENTRO DE MEJORAMIENTO DOCENTE (CMD)">CENTRO DE MEJORAMIENTO DOCENTE (CMD)</option>
                                            <option value="DIPLOMADOS">DIPLOMADOS</option>
                                        </select>

                                    </div>
                                </div>
                                @error('categoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facultad" class="col-md-4 col-form-label text-md-right">{{ __('Facultad') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="facultad" id="facultad" class="form-control">

                                            <option value="FACULTAD DE HUMANIDADES Y EDUCACION">FACULTAD DE HUMANIDADES Y EDUCACIÓN</option>
                                            <option value="FACULTAD DE INGENIERIA">FACULTAD DE INGENIERÍA</option>
                                            <option value="FACULTAD TECNOLOGICA">FACULTAD TECNOLÓGICA</option>
                                            <option value="FACULTAD DE CIENCIAS JURÍDICAS Y SOCIALES">FACULTAD DE CIENCIAS JURÍDICAS Y SOCIALES</option>
                                            <option value="FACULTAD DE CIENCIAS DE LA SALUD">FACULTAD DE CIENCIAS DE LA SALUD</option>
                                            <option value="FACULTAD DE CIENCIAS NATURALES">FACULTAD DE CIENCIAS NATURALES</option>
                                            <option value="FACULTAD DE MEDICINA">FACULTAD DE MEDICINA</option>
                                        </select>

                                    </div>
                                </div>
                                @error('facultad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="año" class="col-md-4 col-form-label text-md-right">{{ __('Año') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="año" id="año" class="form-control">
                                        @for ($i = 2019; $i < 2030; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                        </select>

                                    </div>
                                </div>
                                @error('año')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="semestre" class="col-md-4 col-form-label text-md-right">{{ __('Semestre') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                    <div style="float:left">
                                        <select name="semestre" id="semestre" class="form-control">
                                        @for ($i = 1; $i < 3; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                        </select>

                                    </div>
                                </div>
                                @error('semestre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asignatura" class="col-md-4 col-form-label text-md-right">{{ __('Asignatura') }}</label>

                            <div class="col-md-6">
                                <input id="asignatura" type="text" class="form-control @error('asignatura') is-invalid @enderror" name="asignatura" value="{{ old('asignatura') }}" required autocomplete="asignatura" autofocus>

                                @error('asignatura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="docente" class="col-md-4 col-form-label text-md-right">{{ __('Docente') }}</label>

                            <div class="col-md-6">
                                <input id="docente" type="text" class="form-control @error('docente') is-invalid @enderror" name="docente" value="{{ old('docente') }}" required autocomplete="docente" autofocus>

                                @error('docente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" autofocus>

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
