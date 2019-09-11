@extends('layouts.app', ['title' => __('Administracion de Cursos')])

@section('content')
    @include('layouts.headers.cardcursos')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Todos los Cursos') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('curso.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Curso') }}</a>
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

                    <div class="row" style="margin-left: 6px; margin-right: 6px;">
                    @foreach($cursos as $curso)

                        <div class="col-xl-3 col-lg-6" style="margin-bottom: 6px;">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">{{ $curso->estado }}</h5>
                                            <span class="h2 font-weight-bold mb-0">{{ $curso->descripcion }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-chart-bar"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <p class="mt-3 mb-0 text-muted text-sm">
                                         <span class="text-success mr-2"></i>Prerequisito:</span>
                                         <span class="text-nowrap">{{ $curso->prerequisito }}</span>
                                     </p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    </div>



                 {{--   <div class="table-responsive">

                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nombres') }}</th>
                                    <th scope="col">{{ __('Apellidos') }}</th>
                                    <th scope="col">{{ __('Tipo') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                   --}}{{-- <th scope="col">{{ __('Fecha Creación') }}</th>
                                    <th scope="col">{{ __('Fecha Modificación') }}</th>--}}{{--
                                    <th scope="col">{{ __('Opciones') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>{{ $user->quetipoPerfil->perfil }}</td>
                                        <td>
                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                        </td>
                                       --}}{{-- <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                        <td>{{ $user->updated_at->format('d/m/Y H:i') }}</td>--}}{{--
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @if ($user->id != auth()->id())
                                                        <form action="{{ route('user.destroy', $user) }}" method="post">
--}}{{--                                                            @csrf--}}{{--
                                                            {{ csrf_field() }}
                                                            @method('delete')
                                                            
                                                            <a class="dropdown-item" href="{{ route('user.edit', $user) }}">{{ __('Edit') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
                                                    @else
                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>--}}
{{--

                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $users->links() }}
                        </nav>
                    </div>
--}}

                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection