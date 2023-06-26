<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $doctor->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('last_name', $doctor->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de cedula') }}
            {{ Form::text('identification_card', $doctor->identification_card, ['class' => 'form-control' . ($errors->has('identification_card') ? ' is-invalid' : ''), 'placeholder' => 'Numero de cedula']) }}
            {!! $errors->first('identification_card', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de telefono') }}
            {{ Form::text('phone_number', $doctor->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Numero de telefono']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de nacimiento') }}
            {{ Form::text('birthdate', $doctor->birthdate, ['class' => 'form-control' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de nacimiento']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('age', $doctor->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Genero') }}
            {{ Form::text('gender', $doctor->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('address', $doctor->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('email', $doctor->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hospital que atiende') }}
            {{ Form::text('hospital_taht_attends', $doctor->hospital_taht_attends, ['class' => 'form-control' . ($errors->has('hospital_taht_attends') ? ' is-invalid' : ''), 'placeholder' => 'Hospital que atiende']) }}
            {!! $errors->first('hospital_taht_attends', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Puesto de trabajo') }}
            {{ Form::text('workstation', $doctor->workstation, ['class' => 'form-control' . ($errors->has('workstation') ? ' is-invalid' : ''), 'placeholder' => 'Puesto de trabajo']) }}
            {!! $errors->first('workstation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especialidad') }}
            {{ Form::text('specialty', $doctor->specialty, ['class' => 'form-control' . ($errors->has('specialty') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad']) }}
            {!! $errors->first('specialty', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Turno') }}
            {{ Form::text('turn', $doctor->turn, ['class' => 'form-control' . ($errors->has('turn') ? ' is-invalid' : ''), 'placeholder' => 'Turno']) }}
            {!! $errors->first('turn', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardad') }}</button>
    </div>
</div>