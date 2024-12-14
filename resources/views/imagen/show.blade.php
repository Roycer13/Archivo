@extends('layouts.app')

@section('template_title')
    {{ $imagen->name ?? __('Show') . " " . __('Imagen') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Imagen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('imagens.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Croquis:</strong>
                                    {{ $imagen->croquis }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Funcion:</strong>
                                    {{ $imagen->img_funcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Identidad:</strong>
                                    {{ $imagen->img_identidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Memo:</strong>
                                    {{ $imagen->img_memo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Inicial:</strong>
                                    {{ $imagen->img_inicial }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Recurrente:</strong>
                                    {{ $imagen->img_recurrente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Otro:</strong>
                                    {{ $imagen->img_otro }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
