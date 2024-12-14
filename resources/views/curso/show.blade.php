@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? __('Show') . " " . __('Curso') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cursos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestion Mes Ce:</strong>
                                    {{ $curso->gestion_mes_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Evento Ce:</strong>
                                    {{ $curso->evento_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion Ce:</strong>
                                    {{ $curso->duracion_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Intitucion Ce:</strong>
                                    {{ $curso->intitucion_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio Ce:</strong>
                                    {{ $curso->folio_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestion Mes Co:</strong>
                                    {{ $curso->gestion_mes_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Evento Co:</strong>
                                    {{ $curso->evento_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion Co:</strong>
                                    {{ $curso->duracion_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Intitucion Co:</strong>
                                    {{ $curso->intitucion_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio Co:</strong>
                                    {{ $curso->folio_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idioma:</strong>
                                    {{ $curso->idioma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Institucion I:</strong>
                                    {{ $curso->institucion_i }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lectura:</strong>
                                    {{ $curso->lectura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Escritura:</strong>
                                    {{ $curso->escritura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Conversacion:</strong>
                                    {{ $curso->conversacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio I:</strong>
                                    {{ $curso->folio_i }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Curso C:</strong>
                                    {{ $curso->curso_c }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel Cono:</strong>
                                    {{ $curso->nivel_cono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio C:</strong>
                                    {{ $curso->folio_c }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
