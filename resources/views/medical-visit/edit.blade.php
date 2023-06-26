@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Medical Visit
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Medical Visit</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('medical-visits.update', $medicalVisit->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('medical-visit.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
