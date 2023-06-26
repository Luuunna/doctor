<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre completo del paciente') }}
            {{ Form::text('full_name_of_patient', $historial->full_name_of_patient, ['class' => 'form-control' . ($errors->has('full_name_of_patient') ? ' is-invalid' : ''), 'placeholder' => 'Nombre completo del paciente']) }}
            {!! $errors->first('full_name_of_patient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de emergencia del paciente') }}
            {{ Form::text('emergency_number_of_the_patient', $historial->emergency_number_of_the_patient, ['class' => 'form-control' . ($errors->has('emergency_number_of_the_patient') ? ' is-invalid' : ''), 'placeholder' => 'Numero de emergencia del paciente']) }}
            {!! $errors->first('emergency_number_of_the_patient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Info del paciente') }}
            {{ Form::text('info_of_patient', $historial->info_of_patient, ['class' => 'form-control' . ($errors->has('info_of_patient') ? ' is-invalid' : ''), 'placeholder' => 'Info del paciente']) }}
            {!! $errors->first('info_of_patient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $historial->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Receta medica') }}
            {{ Form::text('recipe', $historial->recipe, ['class' => 'form-control' . ($errors->has('recipe') ? ' is-invalid' : ''), 'placeholder' => 'Receta medica']) }}
            {!! $errors->first('recipe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condicion del paciente') }}
            {{ Form::text('patient_conditions', $historial->patient_conditions, ['class' => 'form-control' . ($errors->has('patient_conditions') ? ' is-invalid' : ''), 'placeholder' => 'Condicion del paciente']) }}
            {!! $errors->first('patient_conditions', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de entrada del paciente') }}
            {{ Form::text('patient_addmission_date', $historial->patient_addmission_date, ['class' => 'form-control' . ($errors->has('patient_addmission_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de entrada del paciente']) }}
            {!! $errors->first('patient_addmission_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de alta del paciente.') }}
            {{ Form::text('patient_discharge_date', $historial->patient_discharge_date, ['class' => 'form-control' . ($errors->has('patient_discharge_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de alta del paciente.']) }}
            {!! $errors->first('patient_discharge_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_services') }}
            {{ Form::text('id_services', $historial->id_services, ['class' => 'form-control' . ($errors->has('id_services') ? ' is-invalid' : ''), 'placeholder' => 'Id Services']) }}
            {!! $errors->first('id_services', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_patients') }}
            {{ Form::text('id_patients', $historial->id_patients, ['class' => 'form-control' . ($errors->has('id_patients') ? ' is-invalid' : ''), 'placeholder' => 'Id Patients']) }}
            {!! $errors->first('id_patients', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>