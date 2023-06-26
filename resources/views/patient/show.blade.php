@extends('layouts.app')

@section('template_title')
    {{ $patient->name ?? "{{ __('Show') Patient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('patients.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $patient->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $patient->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Identification Card:</strong>
                            {{ $patient->identification_card }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $patient->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $patient->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $patient->age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $patient->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $patient->address }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $patient->email }}
                        </div>
                        <div class="form-group">
                            <strong>Info Of Patient:</strong>
                            {{ $patient->info_of_patient }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
