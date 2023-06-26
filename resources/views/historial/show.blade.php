@extends('layouts.app')

@section('template_title')
    {{ $historial->name ?? "{{ __('Show') Historial" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Full Name Of Patient:</strong>
                            {{ $historial->full_name_of_patient }}
                        </div>
                        <div class="form-group">
                            <strong>Emergency Number Of The Patient:</strong>
                            {{ $historial->emergency_number_of_the_patient }}
                        </div>
                        <div class="form-group">
                            <strong>Info Of Patient:</strong>
                            {{ $historial->info_of_patient }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $historial->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Recipe:</strong>
                            {{ $historial->recipe }}
                        </div>
                        <div class="form-group">
                            <strong>Patient Conditions:</strong>
                            {{ $historial->patient_conditions }}
                        </div>
                        <div class="form-group">
                            <strong>Patient Addmission Date:</strong>
                            {{ $historial->patient_addmission_date }}
                        </div>
                        <div class="form-group">
                            <strong>Patient Discharge Date:</strong>
                            {{ $historial->patient_discharge_date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Services:</strong>
                            {{ $historial->id_services }}
                        </div>
                        <div class="form-group">
                            <strong>Id Patients:</strong>
                            {{ $historial->id_patients }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
