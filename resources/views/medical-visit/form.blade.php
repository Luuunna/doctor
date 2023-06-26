<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha para su cita') }}
            {{ Form::text('date', $medicalVisit->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::text('hour', $medicalVisit->hour, ['class' => 'form-control' . ($errors->has('hour') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hour', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicacion') }}
            {{ Form::text('location', $medicalVisit->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('city', $medicalVisit->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_patients') }}
            {{ Form::text('id_patients', $medicalVisit->id_patients, ['class' => 'form-control' . ($errors->has('id_patients') ? ' is-invalid' : ''), 'placeholder' => 'Id Patients']) }}
            {!! $errors->first('id_patients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_doctors') }}
            {{ Form::text('id_doctors', $medicalVisit->id_doctors, ['class' => 'form-control' . ($errors->has('id_doctors') ? ' is-invalid' : ''), 'placeholder' => 'Id Doctors']) }}
            {!! $errors->first('id_doctors', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_hospital') }}
            {{ Form::text('id_hospital', $medicalVisit->id_hospital, ['class' => 'form-control' . ($errors->has('id_hospital') ? ' is-invalid' : ''), 'placeholder' => 'Id Hospital']) }}
            {!! $errors->first('id_hospital', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>