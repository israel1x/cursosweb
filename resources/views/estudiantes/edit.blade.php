@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Ingresar Estudiante')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Datos del Estudiante') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('estudiante.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('estudiante.update', $estudiante) }}" autocomplete="off">
{{--                            @csrf--}}
                            {{ csrf_field() }}
                            @method('put')
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Complete el Formulario') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('cedula') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-cedula">{{ __('Cedula') }}</label>
                                    <input type="text" name="cedula" id="input-cedula" pattern="[0-9]{10}" title="Solo se acepta maximo 10 digitos" class="form-control form-control-alternative{{ $errors->has('cedula') ? ' is-invalid' : '' }}" placeholder="{{ __('Cédula del Estudiante') }}" value="{{ old('cedula',  $estudiante->cedula) }}" required autofocus>

                                    @if ($errors->has('cedula'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cedula') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-nombre">{{ __('Nombres') }}</label>
                                    <input type="text" name="nombre" id="input-nombre" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre del Estudiante') }}" value="{{ old('nombre',$estudiante->nombre) }}" required autofocus>

                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('apellido') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-apellido">{{ __('Apellidos') }}</label>
                                    <input type="text" name="apellido" id="input-apellido" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('apellido') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellidos del Estudiante') }}" value="{{ old('apellido',$estudiante->apellido) }}" required autofocus>

                                    @if ($errors->has('apellido'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('apellido') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{--
                                <div class="form-group{{ $errors->has('tipoPerfil_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tipoperfil">{{ __('Tipo') }}</label>
                                    <select type="text" name="tipoPerfil_id" id="input-tipoperfil_id" class="form-control form-control-alternative{{ $errors->has('tipoPerfil_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Tipo') }}" value="{{ old('tipoPerfil_id') }}" required autofocus>
                                        <option selected>Seleccione el tipo de perfil</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Estudiante</option>
                                        <option value="3">Profesor</option>
                                    </select>
                                    @if ($errors->has('tipoPerfil_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tipoPerfil_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
--}}


                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email',$estudiante->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{--
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="" required>
                                    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmar Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirmar Password') }}" value="" required>
                                </div>

                                <input  hidden type="text" name="IdUsuarioCreacion" id="input-IdUsuarioCreacion" class="form-control form-control-alternative{{ $errors->has('lastname') ? ' is-invalid' : '' }}" value="'2'" >
--}}
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