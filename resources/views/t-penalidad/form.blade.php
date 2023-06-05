<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $tPenalidad->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Distrito') }}
            {{ Form::text('Distrito', $tPenalidad->Distrito, ['class' => 'form-control' . ($errors->has('Distrito') ? ' is-invalid' : ''), 'placeholder' => 'Distrito']) }}
            {!! $errors->first('Distrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Referencia') }}
            {{ Form::text('Referencia', $tPenalidad->Referencia, ['class' => 'form-control' . ($errors->has('Referencia') ? ' is-invalid' : ''), 'placeholder' => 'Referencia']) }}
            {!! $errors->first('Referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actividad') }}
            {{ Form::text('Actividad', $tPenalidad->Actividad, ['class' => 'form-control' . ($errors->has('Actividad') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
            {!! $errors->first('Actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ocurrencia') }}
            {{ Form::text('Ocurrencia', $tPenalidad->Ocurrencia, ['class' => 'form-control' . ($errors->has('Ocurrencia') ? ' is-invalid' : ''), 'placeholder' => 'Ocurrencia']) }}
            {!! $errors->first('Ocurrencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Item_Penalidad') }}
            {{ Form::text('Item_Penalidad', $tPenalidad->Item_Penalidad, ['class' => 'form-control' . ($errors->has('Item_Penalidad') ? ' is-invalid' : ''), 'placeholder' => 'Item Penalidad']) }}
            {!! $errors->first('Item_Penalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_Penalidad') }}
            {{ Form::text('Nombre_Penalidad', $tPenalidad->Nombre_Penalidad, ['class' => 'form-control' . ($errors->has('Nombre_Penalidad') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Penalidad']) }}
            {!! $errors->first('Nombre_Penalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Obs') }}
            {{ Form::text('Obs', $tPenalidad->Obs, ['class' => 'form-control' . ($errors->has('Obs') ? ' is-invalid' : ''), 'placeholder' => 'Obs']) }}
            {!! $errors->first('Obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nom_Sup_Pe') }}
            {{ Form::text('Nom_Sup_Pe', $tPenalidad->Nom_Sup_Pe, ['class' => 'form-control' . ($errors->has('Nom_Sup_Pe') ? ' is-invalid' : ''), 'placeholder' => 'Nom Sup Pe']) }}
            {!! $errors->first('Nom_Sup_Pe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ape_Sup_Pe') }}
            {{ Form::text('Ape_Sup_Pe', $tPenalidad->Ape_Sup_Pe, ['class' => 'form-control' . ($errors->has('Ape_Sup_Pe') ? ' is-invalid' : ''), 'placeholder' => 'Ape Sup Pe']) }}
            {!! $errors->first('Ape_Sup_Pe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DNI_Sup_pe') }}
            {{ Form::text('DNI_Sup_pe', $tPenalidad->DNI_Sup_pe, ['class' => 'form-control' . ($errors->has('DNI_Sup_pe') ? ' is-invalid' : ''), 'placeholder' => 'Dni Sup Pe']) }}
            {!! $errors->first('DNI_Sup_pe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_sup_pe') }}
            {{ Form::text('Correo_sup_pe', $tPenalidad->Correo_sup_pe, ['class' => 'form-control' . ($errors->has('Correo_sup_pe') ? ' is-invalid' : ''), 'placeholder' => 'Correo Sup Pe']) }}
            {!! $errors->first('Correo_sup_pe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular_Sup_pe') }}
            {{ Form::text('Celular_Sup_pe', $tPenalidad->Celular_Sup_pe, ['class' => 'form-control' . ($errors->has('Celular_Sup_pe') ? ' is-invalid' : ''), 'placeholder' => 'Celular Sup Pe']) }}
            {!! $errors->first('Celular_Sup_pe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Obs_Penalidad') }}
            {{ Form::text('Obs_Penalidad', $tPenalidad->Obs_Penalidad, ['class' => 'form-control' . ($errors->has('Obs_Penalidad') ? ' is-invalid' : ''), 'placeholder' => 'Obs Penalidad']) }}
            {!! $errors->first('Obs_Penalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios') }}
            {{ Form::text('Comentarios', $tPenalidad->Comentarios, ['class' => 'form-control' . ($errors->has('Comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('Comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $tPenalidad->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::text('Hora', $tPenalidad->Hora, ['class' => 'form-control' . ($errors->has('Hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('Hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Status') }}
            {{ Form::text('Status', $tPenalidad->Status, ['class' => 'form-control' . ($errors->has('Status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('Status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usu') }}
            {{ Form::text('usu', $tPenalidad->usu, ['class' => 'form-control' . ($errors->has('usu') ? ' is-invalid' : ''), 'placeholder' => 'Usu']) }}
            {!! $errors->first('usu', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>