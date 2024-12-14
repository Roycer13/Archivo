@extends('layouts.app')

@section('template_title')
    Imagens
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Imagens') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('imagens.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Croquis</th>
									<th >Img Funcion</th>
									<th >Img Identidad</th>
									<th >Img Memo</th>
									<th >Img Inicial</th>
									<th >Img Recurrente</th>
									<th >Img Otro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($imagens as $imagen)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $imagen->croquis }}</td>
										<td >{{ $imagen->img_funcion }}</td>
										<td >{{ $imagen->img_identidad }}</td>
										<td >{{ $imagen->img_memo }}</td>
										<td >{{ $imagen->img_inicial }}</td>
										<td >{{ $imagen->img_recurrente }}</td>
										<td >{{ $imagen->img_otro }}</td>

                                            <td>
                                                <form action="{{ route('imagens.destroy', $imagen->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('imagens.show', $imagen->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('imagens.edit', $imagen->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $imagens->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
