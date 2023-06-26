<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $service->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de servicios') }}
            {{ Form::text('type_of_services', $service->type_of_services, ['class' => 'form-control' . ($errors->has('type_of_services') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de servicio']) }}
            {!! $errors->first('type_of_services', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especificacion') }}
            {{ Form::text('specification', $service->specification, ['class' => 'form-control' . ($errors->has('specification') ? ' is-invalid' : ''), 'placeholder' => 'Especificacion']) }}
            {!! $errors->first('specification', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_hospital') }}
            {{ Form::text('id_hospital', $service->id_hospital, ['class' => 'form-control' . ($errors->has('id_hospital') ? ' is-invalid' : ''), 'placeholder' => 'Id Hospital']) }}
            {!! $errors->first('id_hospital', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardad') }}</button>
    </div>
</div>