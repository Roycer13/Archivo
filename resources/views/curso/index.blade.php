@extends('layouts.app')

@section('template_title')
    Cursos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cursos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cursos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Gestion Mes Ce</th>
									<th >Evento Ce</th>
									<th >Duracion Ce</th>
									<th >Intitucion Ce</th>
									<th >Folio Ce</th>
									<th >Gestion Mes Co</th>
									<th >Evento Co</th>
									<th >Duracion Co</th>
									<th >Intitucion Co</th>
									<th >Folio Co</th>
									<th >Idioma</th>
									<th >Institucion I</th>
									<th >Lectura</th>
									<th >Escritura</th>
									<th >Conversacion</th>
									<th >Folio I</th>
									<th >Curso C</th>
									<th >Nivel Cono</th>
									<th >Folio C</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $curso->gestion_mes_ce }}</td>
										<td >{{ $curso->evento_ce }}</td>
										<td >{{ $curso->duracion_ce }}</td>
										<td >{{ $curso->intitucion_ce }}</td>
										<td >{{ $curso->folio_ce }}</td>
										<td >{{ $curso->gestion_mes_co }}</td>
										<td >{{ $curso->evento_co }}</td>
										<td >{{ $curso->duracion_co }}</td>
										<td >{{ $curso->intitucion_co }}</td>
										<td >{{ $curso->folio_co }}</td>
										<td >{{ $curso->idioma }}</td>
										<td >{{ $curso->institucion_i }}</td>
										<td >{{ $curso->lectura }}</td>
										<td >{{ $curso->escritura }}</td>
										<td >{{ $curso->conversacion }}</td>
										<td >{{ $curso->folio_i }}</td>
										<td >{{ $curso->curso_c }}</td>
										<td >{{ $curso->nivel_cono }}</td>
										<td >{{ $curso->folio_c }}</td>

                                            <td>
                                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cursos.show', $curso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cursos.edit', $curso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cursos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
