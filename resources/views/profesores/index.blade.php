@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cardsprofe')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Todos los Profesores') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('profesor.create') }}" class="btn btn-sm btn-primary">{{ __('Crear Nuevo Profesor') }}</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nombres') }}</th>
                                    <th scope="col">{{ __('Apellidos') }}</th>
                                    <th scope="col">{{ __('Cédula') }}</th>
                                    <th scope="col">{{ __('Fecha de Nacimiento') }}</th>
                                    <th scope="col">{{ __('Titulo') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Dirección') }}</th>
                                    <th scope="col">{{ __('Telefono') }}</th>
                                    <th scope="col">{{ __('Celular') }}</th>

                                  {{--  <th scope="col">{{ __('Creado') }}</th>--}}
                                </tr>
                            </thead>
                            <tbody>
                               {{-- @foreach ($estudiantes as $estudiante)
                                    <tr>
                                        <td>{{ $estudiante->nombre }}</td>
                                        <td>{{ $estudiante->apellido }}</td>
                                        <td>{{ $estudiante->cedula }}</td>
                                        <td>
                                            <a href="mailto:{{ $estudiante->email }}">{{ $estudiante->email }}</a>
                                        </td>
                                       --}}{{-- <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                        <td>{{ $user->updated_at->format('d/m/Y H:i') }}</td>--}}{{--
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                  --}}{{--  @if ($estudiante->id != auth()->id())--}}{{--
                                                        <form action="{{ route('estudiante.destroy', $estudiante) }}" method="post">
                                                            {{ csrf_field() }}
                                                         @method('delete')
                                                            
                                                            <a class="dropdown-item" href="{{ route('estudiante.edit', $estudiante) }}">{{ __('Editar') }}</a>

                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
--}}{{--                                                    @else--}}{{--
--}}{{--                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>--}}{{--
--}}{{--                                                    @endif--}}{{--
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                       {{-- <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $users->links() }}
                        </nav>--}}
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection