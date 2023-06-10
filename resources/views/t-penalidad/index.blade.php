@extends('layouts.app')

@section('template_title')
    T Penalidad
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('T Penalidad') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('t-penalidads.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva Penalidad') }}
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

										<th>Direccion</th>
										<th>Distrito</th>
										<th>Referencia</th>
										<th>Actividad</th>
										<th>Ocurrencia</th>
										<th>Item Penalidad</th>
										<th>Nombre Penalidad</th>
										<th>Obs</th>
										<th>Nom Sup Pe</th>
										<th>Ape Sup Pe</th>
										<th>Dni Sup Pe</th>
										<th>Correo Sup Pe</th>
										<th>Celular Sup Pe</th>
										<th>Obs Penalidad</th>
										<th>Comentarios</th>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Status</th>
										<th>Usu</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tPenalidads as $tPenalidad)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $tPenalidad->Direccion }}</td>
											<td>{{ $tPenalidad->Distrito }}</td>
											<td>{{ $tPenalidad->Referencia }}</td>
											<td>{{ $tPenalidad->Actividad }}</td>
											<td>{{ $tPenalidad->Ocurrencia }}</td>
											<td>{{ $tPenalidad->Item_Penalidad }}</td>
											<td>{{ $tPenalidad->Nombre_Penalidad }}</td>
											<td>{{ $tPenalidad->Obs }}</td>
											<td>{{ $tPenalidad->Nom_Sup_Pe }}</td>
											<td>{{ $tPenalidad->Ape_Sup_Pe }}</td>
											<td>{{ $tPenalidad->DNI_Sup_pe }}</td>
											<td>{{ $tPenalidad->Correo_sup_pe }}</td>
											<td>{{ $tPenalidad->Celular_Sup_pe }}</td>
											<td>{{ $tPenalidad->Obs_Penalidad }}</td>
											<td>{{ $tPenalidad->Comentarios }}</td>
											<td>{{ $tPenalidad->Fecha }}</td>
											<td>{{ $tPenalidad->Hora }}</td>
											<td>{{ $tPenalidad->Status }}</td>
											<td>{{ $tPenalidad->usu }}</td>

                                            <td>
                                                <form action="{{ route('t-penalidads.destroy',$tPenalidad->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('t-penalidads.show',$tPenalidad->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Detalles') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('t-penalidads.edit',$tPenalidad->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tPenalidads->links() !!}
            </div>
        </div>
    </div>
@endsection
