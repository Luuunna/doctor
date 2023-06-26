<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $hospital->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de servicios') }}
            {{ Form::text('type_of_services', $hospital->type_of_services, ['class' => 'form-control' . ($errors->has('type_of_services') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de servicios']) }}
            {!! $errors->first('type_of_services', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de camas') }}
            {{ Form::text('bed_number_aviable', $hospital->bed_number_aviable, ['class' => 'form-control' . ($errors->has('bed_number_aviable') ? ' is-invalid' : ''), 'placeholder' => 'Numero de camas']) }}
            {!! $errors->first('bed_number_aviable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('address', $hospital->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ucacion') }}
            {{ Form::text('location', $hospital->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de emergencia') }}
            {{ Form::text('emergency_number', $hospital->emergency_number, ['class' => 'form-control' . ($errors->has('emergency_number') ? ' is-invalid' : ''), 'placeholder' => 'Numero de emergencia']) }}
            {!! $errors->first('emergency_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_patients') }}
            {{ Form::text('id_patients', $hospital->id_patients, ['class' => 'form-control' . ($errors->has('id_patients') ? ' is-invalid' : ''), 'placeholder' => 'Id Patients']) }}
            {!! $errors->first('id_patients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_doctors') }}
            {{ Form::text('id_doctors', $hospital->id_doctors, ['class' => 'form-control' . ($errors->has('id_doctors') ? ' is-invalid' : ''), 'placeholder' => 'Id Doctors']) }}
            {!! $errors->first('id_doctors', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardad') }}</button>
    </div>
</div>