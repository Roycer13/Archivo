@extends('layouts.app')

@section('template_title')
    Datos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('datos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombres</th>
									<th >Apellido Pat</th>
									<th >Apellido Mat</th>
									<th >Estado Civil</th>
									<th >Apellido Casada</th>
									<th >Nacionalidad</th>
									<th >Direccion</th>
									<th >Fecha Nac</th>
									<th >Provincia</th>
									<th >Canton</th>
									<th >Departamento</th>
									<th >Serie Libreta Mil</th>
									<th >N Libreta Mil</th>
									<th >Nro Matricula</th>
									<th >Tipo Sangre</th>
									<th >Ci</th>
									<th >Emision</th>
									<th >Afp</th>
									<th >N N Cua</th>
									<th >N Seguro</th>
									<th >Telefono</th>
									<th >Celular</th>
									<th >Contacto Emer</th>
									<th >Email</th>
									<th >Clave</th>
									<th >Institucion</th>
									<th >N Cuenta</th>
									<th >Titulo</th>
									<th >Descripcion</th>
									<th >Mes</th>
									<th >Gestion</th>
									<th >Instituto</th>
									<th >Ciudad Pais</th>
									<th >Folio G</th>
									<th >Desde Mes E</th>
									<th >Desde Gestion E</th>
									<th >Hasta Mes E</th>
									<th >Hasta Gestion E</th>
									<th >Cargo E</th>
									<th >Nom Empresa E</th>
									<th >Tel Empresa E</th>
									<th >Motivo E</th>
									<th >Folio E</th>
									<th >Id Categorias</th>
									<th >Id Imagenes</th>
									<th >Id Cursos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datos as $dato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $dato->nombres }}</td>
										<td >{{ $dato->apellido_pat }}</td>
										<td >{{ $dato->apellido_mat }}</td>
										<td >{{ $dato->estado_civil }}</td>
										<td >{{ $dato->apellido_casada }}</td>
										<td >{{ $dato->nacionalidad }}</td>
										<td >{{ $dato->direccion }}</td>
										<td >{{ $dato->fecha_nac }}</td>
										<td >{{ $dato->provincia }}</td>
										<td >{{ $dato->canton }}</td>
										<td >{{ $dato->departamento }}</td>
										<td >{{ $dato->serie_libreta_mil }}</td>
										<td >{{ $dato->n_libreta_mil }}</td>
										<td >{{ $dato->nro_matricula }}</td>
										<td >{{ $dato->tipo_sangre }}</td>
										<td >{{ $dato->ci }}</td>
										<td >{{ $dato->emision }}</td>
										<td >{{ $dato->afp }}</td>
										<td >{{ $dato->n_n_cua }}</td>
										<td >{{ $dato->n_seguro }}</td>
										<td >{{ $dato->telefono }}</td>
										<td >{{ $dato->celular }}</td>
										<td >{{ $dato->contacto_emer }}</td>
										<td >{{ $dato->email }}</td>
										<td >{{ $dato->clave }}</td>
										<td >{{ $dato->institucion }}</td>
										<td >{{ $dato->n_cuenta }}</td>
										<td >{{ $dato->titulo }}</td>
										<td >{{ $dato->descripcion }}</td>
										<td >{{ $dato->mes }}</td>
										<td >{{ $dato->gestion }}</td>
										<td >{{ $dato->instituto }}</td>
										<td >{{ $dato->ciudad_pais }}</td>
										<td >{{ $dato->folio_g }}</td>
										<td >{{ $dato->desde_mes_e }}</td>
										<td >{{ $dato->desde_gestion_e }}</td>
										<td >{{ $dato->hasta_mes_e }}</td>
										<td >{{ $dato->hasta_gestion_e }}</td>
										<td >{{ $dato->cargo_e }}</td>
										<td >{{ $dato->nom_empresa_e }}</td>
										<td >{{ $dato->tel_empresa_e }}</td>
										<td >{{ $dato->motivo_e }}</td>
										<td >{{ $dato->folio_e }}</td>
										<td >{{ $dato->id_categorias }}</td>
										<td >{{ $dato->id_imagenes }}</td>
										<td >{{ $dato->id_cursos }}</td>

                                            <td>
                                                <form action="{{ route('datos.destroy', $dato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datos.show', $dato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('datos.edit', $dato->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $datos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
