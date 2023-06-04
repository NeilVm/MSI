<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tierra_papeles') }}
            {{ Form::text('tierra_papeles', $hojacontrold->tierra_papeles, ['class' => 'form-control' . ($errors->has('tierra_papeles') ? ' is-invalid' : ''), 'placeholder' => 'Tierra Papeles']) }}
            {!! $errors->first('tierra_papeles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('embolsado_residuos') }}
            {{ Form::text('embolsado_residuos', $hojacontrold->embolsado_residuos, ['class' => 'form-control' . ($errors->has('embolsado_residuos') ? ' is-invalid' : ''), 'placeholder' => 'Embolsado Residuos']) }}
            {!! $errors->first('embolsado_residuos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_ejecucion') }}
            {{ Form::text('nivel_ejecucion', $hojacontrold->nivel_ejecucion, ['class' => 'form-control' . ($errors->has('nivel_ejecucion') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Ejecucion']) }}
            {!! $errors->first('nivel_ejecucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso_apro_uni') }}
            {{ Form::text('uso_apro_uni', $hojacontrold->uso_apro_uni, ['class' => 'form-control' . ($errors->has('uso_apro_uni') ? ' is-invalid' : ''), 'placeholder' => 'Uso Apro Uni']) }}
            {!! $errors->first('uso_apro_uni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uniforme') }}
            {{ Form::text('uniforme', $hojacontrold->uniforme, ['class' => 'form-control' . ($errors->has('uniforme') ? ' is-invalid' : ''), 'placeholder' => 'Uniforme']) }}
            {!! $errors->first('uniforme', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('herramientas') }}
            {{ Form::text('herramientas', $hojacontrold->herramientas, ['class' => 'form-control' . ($errors->has('herramientas') ? ' is-invalid' : ''), 'placeholder' => 'Herramientas']) }}
            {!! $errors->first('herramientas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('personal_comp') }}
            {{ Form::text('personal_comp', $hojacontrold->personal_comp, ['class' => 'form-control' . ($errors->has('personal_comp') ? ' is-invalid' : ''), 'placeholder' => 'Personal Comp']) }}
            {!! $errors->first('personal_comp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('personal_iden') }}
            {{ Form::text('personal_iden', $hojacontrold->personal_iden, ['class' => 'form-control' . ($errors->has('personal_iden') ? ' is-invalid' : ''), 'placeholder' => 'Personal Iden']) }}
            {!! $errors->first('personal_iden', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('epp') }}
            {{ Form::text('epp', $hojacontrold->epp, ['class' => 'form-control' . ($errors->has('epp') ? ' is-invalid' : ''), 'placeholder' => 'Epp']) }}
            {!! $errors->first('epp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_ser') }}
            {{ Form::text('cobertura_ser', $hojacontrold->cobertura_ser, ['class' => 'form-control' . ($errors->has('cobertura_ser') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Ser']) }}
            {!! $errors->first('cobertura_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>