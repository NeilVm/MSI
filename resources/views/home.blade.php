@extends('layouts.admin')

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


										<th>Item Penalidad</th>
										<th>Nombre Penalidad</th>
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


											<td>{{ $tPenalidad->Item_Penalidad }}</td>
											<td>{{ $tPenalidad->Nombre_Penalidad }}</td>
											<td>{{ $tPenalidad->Fecha }}</td>
											<td>{{ $tPenalidad->Hora }}</td>
											<td>{{ $tPenalidad->Status }}</td>
											<td>{{ $tPenalidad->usu }}</td>

                                            <td>
                                                <form action="{{ route('t-penalidads.destroy',$tPenalidad->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('t-penalidads.show',$tPenalidad->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>

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
