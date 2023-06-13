@extends('layouts.app')

@section('template_title')
    {{ $tPenalidad->name ?? "{{ __('Show') T Penalidad" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} T Penalidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('t-penalidads.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $tPenalidad->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Distrito:</strong>
                            {{ $tPenalidad->Distrito }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $tPenalidad->Referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $tPenalidad->Actividad }}
                        </div>
                        <div class="form-group">
                            <strong>Ocurrencia:</strong>
                            {{ $tPenalidad->Ocurrencia }}
                        </div>
                        <div class="form-group">
                            <strong>Item Penalidad:</strong>
                            {{ $tPenalidad->Item_Penalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Penalidad:</strong>
                            {{ $tPenalidad->Nombre_Penalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Obs:</strong>
                            {{ $tPenalidad->Obs }}
                        </div>
                        <div class="form-group">
                            <strong>Nom Sup Pe:</strong>
                            {{ $tPenalidad->Nom_Sup_Pe }}
                        </div>
                        <div class="form-group">
                            <strong>Ape Sup Pe:</strong>
                            {{ $tPenalidad->Ape_Sup_Pe }}
                        </div>
                        <div class="form-group">
                            <strong>Dni Sup Pe:</strong>
                            {{ $tPenalidad->DNI_Sup_pe }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Sup Pe:</strong>
                            {{ $tPenalidad->Correo_sup_pe }}
                        </div>
                        <div class="form-group">
                            <strong>Celular Sup Pe:</strong>
                            {{ $tPenalidad->Celular_Sup_pe }}
                        </div>
                        <div class="form-group">
                            <strong>Obs Penalidad:</strong>
                            {{ $tPenalidad->Obs_Penalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $tPenalidad->Comentarios }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $tPenalidad->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $tPenalidad->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $tPenalidad->Status }}
                        </div>
                        <div class="form-group">
                            <strong>Usu:</strong>
                            {{ $tPenalidad->usu }}
                        </div>
                        <div >
                            <img src="https://firebasestorage.googleapis.com/v0/b/msis-d2976.appspot.com/o/IMG_20230613_155319.jpg?alt=media&token=94865a39-434d-4196-aac0-a48f471054f8" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
