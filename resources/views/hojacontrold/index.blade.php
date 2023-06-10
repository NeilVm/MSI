@extends('layouts.app')

@section('template_title')
    Hojacontrold
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hojacontrold') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('hojacontrolds.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Tierra Papeles</th>
										<th>Embolsado Residuos</th>
										<th>Nivel Ejecucion</th>
										<th>Uso Apro Uni</th>
										<th>Uniforme</th>
										<th>Herramientas</th>
										<th>Personal Comp</th>
										<th>Personal Iden</th>
										<th>Epp</th>
										<th>Cobertura Ser</th>
										<th>Usu</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hojacontrolds as $hojacontrold)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $hojacontrold->tierra_papeles }}</td>
											<td>{{ $hojacontrold->embolsado_residuos }}</td>
											<td>{{ $hojacontrold->nivel_ejecucion }}</td>
											<td>{{ $hojacontrold->uso_apro_uni }}</td>
											<td>{{ $hojacontrold->uniforme }}</td>
											<td>{{ $hojacontrold->herramientas }}</td>
											<td>{{ $hojacontrold->personal_comp }}</td>
											<td>{{ $hojacontrold->personal_iden }}</td>
											<td>{{ $hojacontrold->epp }}</td>
											<td>{{ $hojacontrold->cobertura_ser }}</td>
											<td>{{ $hojacontrold->usu }}</td>

                                            <td>
                                                <form action="{{ route('hojacontrolds.destroy',$hojacontrold->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('hojacontrolds.show',$hojacontrold->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('hojacontrolds.edit',$hojacontrold->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $hojacontrolds->links() !!}
            </div>
        </div>
    </div>
@endsection
