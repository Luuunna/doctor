@extends('layouts.app')

@section('template_title')
    {{ $doctor->name ?? "{{ __('Show') Doctor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Doctor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctors.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $doctor->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $doctor->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Identification Card:</strong>
                            {{ $doctor->identification_card }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $doctor->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $doctor->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $doctor->age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $doctor->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $doctor->address }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $doctor->email }}
                        </div>
                        <div class="form-group">
                            <strong>Hospital Taht Attends:</strong>
                            {{ $doctor->hospital_taht_attends }}
                        </div>
                        <div class="form-group">
                            <strong>Workstation:</strong>
                            {{ $doctor->workstation }}
                        </div>
                        <div class="form-group">
                            <strong>Specialty:</strong>
                            {{ $doctor->specialty }}
                        </div>
                        <div class="form-group">
                            <strong>Turn:</strong>
                            {{ $doctor->turn }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
