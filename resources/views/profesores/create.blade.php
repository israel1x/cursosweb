@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Ingresar Profesor')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Datos del Profesor') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('profesor.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profesor.store') }}" autocomplete="off">
{{--                            @csrf--}}
                            {{ csrf_field() }}
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Complete el Formulario') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('cedula') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-cedula">{{ __('Cédula') }}</label>
                                    <input type="text" name="cedula" id="input-cedula" pattern="[0-9]{10}" title="Solo se acepta maximo 10 digitos" class="form-control form-control-alternative{{ $errors->has('cedula') ? ' is-invalid' : '' }}" placeholder="{{ __('Cédula del Profesor') }}" value="{{ old('cedula') }}" required autofocus>

                                    @if ($errors->has('cedula'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cedula') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('nombres') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-nombres">{{ __('Nombres') }}</label>
                                    <input type="text" name="nombres" id="input-nombres" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('nombres') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombres del Profesor') }}" value="{{ old('nombres') }}" required autofocus>

                                    @if ($errors->has('nombres'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombres') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('apellidos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-apellidos">{{ __('Apellidos') }}</label>
                                    <input type="text" name="apellidos" id="input-apellidos" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellidos del Profesor') }}" value="{{ old('apellidos') }}" required autofocus>

                                    @if ($errors->has('apellidos'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('apellidos') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-apellidos">{{ __('Fecha de Nacimiento') }}</label>

                                    <input  class="form-control  datepicker"  type="text" name="fecha_nacimiento" id="input-apellidos"  title="Solo se aceptan palabras mayores a 3 caracteres"  required autofocus>

                                    @if ($errors->has('fecha_nacimiento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-titulo">{{ __('Titulo') }}</label>
                                    <input type="text" name="titulo" id="input-titulo" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="{{ __('Titulo del Profesor') }}" value="{{ old('titulo') }}" required autofocus>

                                    @if ($errors->has('titulo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('titulo') }}</strong>
                                        </span>
                                    @endif
                                </div>



                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('direccion') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-direccion">{{ __('Dirección') }}</label>
                                    <input type="text" name="direccion" id="input-direccion" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('direccion') ? ' is-invalid' : '' }}" placeholder="{{ __('Dirección del Profesor') }}" value="{{ old('direccion') }}" required autofocus>

                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('telf_convencional') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-direccion">{{ __('Teléfono Convencional') }}</label>
                                    <input type="text" name="telf_convencional" id="input-telf_convencional" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('telf_convencional') ? ' is-invalid' : '' }}" placeholder="{{ __('Teléfono Convencional') }}" value="{{ old('telf_convencional') }}" required autofocus>

                                    @if ($errors->has('telf_convencional'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telf_convencional') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('celular') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-celular">{{ __('Celular') }}</label>
                                    <input type="text" name="celular" id="input-celular" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('direccion') ? ' is-invalid' : '' }}" placeholder="{{ __('Celular del Profesor') }}" value="{{ old('celular') }}" required autofocus>

                                    @if ($errors->has('celular'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('celular') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection