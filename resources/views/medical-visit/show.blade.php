@extends('layouts.app')

@section('template_title')
    {{ $medicalVisit->name ?? "{{ __('Show') Medical Visit" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medical Visit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medical-visits.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $medicalVisit->date }}
                        </div>
                        <div class="form-group">
                            <strong>Hour:</strong>
                            {{ $medicalVisit->hour }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $medicalVisit->location }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $medicalVisit->city }}
                        </div>
                        <div class="form-group">
                            <strong>Id Patients:</strong>
                            {{ $medicalVisit->id_patients }}
                        </div>
                        <div class="form-group">
                            <strong>Id Doctors:</strong>
                            {{ $medicalVisit->id_doctors }}
                        </div>
                        <div class="form-group">
                            <strong>Id Hospital:</strong>
                            {{ $medicalVisit->id_hospital }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
