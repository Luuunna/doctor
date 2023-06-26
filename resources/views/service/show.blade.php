@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? "{{ __('Show') Service" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Servicios</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $service->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type Of Services:</strong>
                            {{ $service->type_of_services }}
                        </div>
                        <div class="form-group">
                            <strong>Specification:</strong>
                            {{ $service->specification }}
                        </div>
                        <div class="form-group">
                            <strong>Id Hospital:</strong>
                            {{ $service->id_hospital }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
