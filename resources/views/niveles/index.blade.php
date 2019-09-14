@extends('layouts.app', ['title' => __('Administracion de Cursos')])

@section('content')
    @include('layouts.headers.cardsniveles')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Capitulos del Curso') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('nivel.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar') }}</a>
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
{{--

                    <div class="row" style="margin-left: 6px; margin-right: 6px;">
                        @foreach($capitulos as $capitulo)


                        @endforeach
                    </div>
--}}








                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
{{--                                <h3 class="mb-0">{{ __('') }}</h3>--}}
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('curso.index') }}" class="btn btn-sm btn-primary">{{ __('Agregar Capitulo') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection