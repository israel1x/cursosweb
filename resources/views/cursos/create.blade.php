@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Nuevo Curso')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Datos del Curso') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('curso.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('curso.store') }}" autocomplete="off">
{{--                            @csrf--}}
                            {{ csrf_field() }}
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Complete el Formulario') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Descripción') }}</label>
                                    <input type="text" name="descripcion" id="input-descripcion" pattern="[A-Za-z]{3,25}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripción') }}" value="{{ old('descripcion') }}" required autofocus>

                                    @if ($errors->has('descripcion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('descripcion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('descripcionlarga') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lastname">{{ __('Detalles') }}</label>
                                    <input type="text" name="descripcionlarga" id="input-lastname" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('descripcionlarga') ? ' is-invalid' : '' }}" placeholder="{{ __('Detalles del Curso') }}" value="{{ old('descripcionlarga') }}" required autofocus>

                                    @if ($errors->has('descripcionlarga'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('descripcionlarga') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('prerequisito') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lastname">{{ __('Prerequisito:') }}</label>
                                    <input type="text" name="prerequisito" id="input-prerequisito" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('prerequisito') ? ' is-invalid' : '' }}" placeholder="{{ __('Prerequisito') }}" value="{{ old('prerequisito') }}" required autofocus>

                                    @if ($errors->has('prerequisito'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('prerequisito') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('objetivos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lastname">{{ __('Objetivos:') }}</label>
                                    <input type="text" name="objetivos" id="input-objetivos" pattern="[A-Za-z]{3,20}" title="Solo se aceptan palabras mayores a 3 caracteres" class="form-control form-control-alternative{{ $errors->has('objetivos') ? ' is-invalid' : '' }}" placeholder="{{ __('Objetivos') }}" value="{{ old('objetivos') }}" required autofocus>

                                    @if ($errors->has('objetivos'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('objetivos') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('estado') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-estado">{{ __('Tipo') }}</label>
                                    <select type="text" name="estado" id="input-estado" class="form-control form-control-alternative{{ $errors->has('estado') ? ' is-invalid' : '' }}" placeholder="{{ __('Estado') }}" value="{{ old('estado') }}" required autofocus>
                                        <option selected>Seleccione el estado</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Desactivado</option>
                                    </select>
                                    @if ($errors->has('estado'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('estado') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('areaconocimiento_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-areaconocimiento_id">{{ __('Area de Conocimiento') }}</label>
                                    <select type="text" name="areaconocimiento_id" id="input-areaconocimiento_id" class="form-control form-control-alternative{{ $errors->has('areaconocimiento_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Area de Conocimiento') }}" value="{{ old('areaconocimiento_id') }}" required autofocus>
                                        <option selected>Seleccione el area</option>
                                        <option value="1">Java</option>
                                        <option value="2">Python</option>
                                    </select>
                                    @if ($errors->has('areaconocimiento_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('areaconocimiento_id') }}</strong>
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