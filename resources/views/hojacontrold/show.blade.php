@extends('layouts.app')

@section('template_title')
    {{ $hojacontrold->name ?? "{{ __('Show') Hojacontrold" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Hojacontrold</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hojacontrolds.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tierra Papeles:</strong>
                            {{ $hojacontrold->tierra_papeles }}
                        </div>
                        <div class="form-group">
                            <strong>Embolsado Residuos:</strong>
                            {{ $hojacontrold->embolsado_residuos }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Ejecucion:</strong>
                            {{ $hojacontrold->nivel_ejecucion }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Apro Uni:</strong>
                            {{ $hojacontrold->uso_apro_uni }}
                        </div>
                        <div class="form-group">
                            <strong>Uniforme:</strong>
                            {{ $hojacontrold->uniforme }}
                        </div>
                        <div class="form-group">
                            <strong>Herramientas:</strong>
                            {{ $hojacontrold->herramientas }}
                        </div>
                        <div class="form-group">
                            <strong>Personal Comp:</strong>
                            {{ $hojacontrold->personal_comp }}
                        </div>
                        <div class="form-group">
                            <strong>Personal Iden:</strong>
                            {{ $hojacontrold->personal_iden }}
                        </div>
                        <div class="form-group">
                            <strong>Epp:</strong>
                            {{ $hojacontrold->epp }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Ser:</strong>
                            {{ $hojacontrold->cobertura_ser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
