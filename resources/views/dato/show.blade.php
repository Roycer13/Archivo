@extends('layouts.app')

@section('template_title')
    {{ $dato->name ?? __('Show') . " " . __('Dato') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Dato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('datos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombres:</strong>
                                    {{ $dato->nombres }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido Pat:</strong>
                                    {{ $dato->apellido_pat }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido Mat:</strong>
                                    {{ $dato->apellido_mat }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Civil:</strong>
                                    {{ $dato->estado_civil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido Casada:</strong>
                                    {{ $dato->apellido_casada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nacionalidad:</strong>
                                    {{ $dato->nacionalidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $dato->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nac:</strong>
                                    {{ $dato->fecha_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Provincia:</strong>
                                    {{ $dato->provincia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Canton:</strong>
                                    {{ $dato->canton }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Departamento:</strong>
                                    {{ $dato->departamento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Serie Libreta Mil:</strong>
                                    {{ $dato->serie_libreta_mil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>N Libreta Mil:</strong>
                                    {{ $dato->n_libreta_mil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nro Matricula:</strong>
                                    {{ $dato->nro_matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Sangre:</strong>
                                    {{ $dato->tipo_sangre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ci:</strong>
                                    {{ $dato->ci }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Emision:</strong>
                                    {{ $dato->emision }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Afp:</strong>
                                    {{ $dato->afp }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>N N Cua:</strong>
                                    {{ $dato->n_n_cua }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>N Seguro:</strong>
                                    {{ $dato->n_seguro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $dato->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $dato->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contacto Emer:</strong>
                                    {{ $dato->contacto_emer }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $dato->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Clave:</strong>
                                    {{ $dato->clave }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Institucion:</strong>
                                    {{ $dato->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>N Cuenta:</strong>
                                    {{ $dato->n_cuenta }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $dato->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $dato->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mes:</strong>
                                    {{ $dato->mes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestion:</strong>
                                    {{ $dato->gestion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Instituto:</strong>
                                    {{ $dato->instituto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudad Pais:</strong>
                                    {{ $dato->ciudad_pais }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio G:</strong>
                                    {{ $dato->folio_g }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Desde Mes E:</strong>
                                    {{ $dato->desde_mes_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Desde Gestion E:</strong>
                                    {{ $dato->desde_gestion_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasta Mes E:</strong>
                                    {{ $dato->hasta_mes_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasta Gestion E:</strong>
                                    {{ $dato->hasta_gestion_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cargo E:</strong>
                                    {{ $dato->cargo_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom Empresa E:</strong>
                                    {{ $dato->nom_empresa_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tel Empresa E:</strong>
                                    {{ $dato->tel_empresa_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Motivo E:</strong>
                                    {{ $dato->motivo_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio E:</strong>
                                    {{ $dato->folio_e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Categorias:</strong>
                                    {{ $dato->id_categorias }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Imagenes:</strong>
                                    {{ $dato->id_imagenes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Cursos:</strong>
                                    {{ $dato->id_cursos }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
