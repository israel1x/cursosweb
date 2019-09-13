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
                                    <a href="{{ route('nivel.index', ['curso' => $curso ]) }}" class="btn btn-sm btn-primary">Niveles</a>

                                </div>
                            </div>
                        </div>

                    @endforeach
                    </div>




                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection