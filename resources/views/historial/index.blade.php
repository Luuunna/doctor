@extends('layouts.app')

@section('template_title')
    Historial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historials.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre completo del paciente</th>
										<th>Numero de emergencia del paciente</th>
										<th>Info del paciente</th>
										<th>Descripcion</th>
										<th>Receta</th>
										<th>Patient Conditions</th>
										<th>Fecha de entrada del paciente.</th>
										<th>Fecha de alta del paciente.</th>
										<th>Id Services</th>
										<th>Id Patients</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historials as $historial)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $historial->full_name_of_patient }}</td>
											<td>{{ $historial->emergency_number_of_the_patient }}</td>
											<td>{{ $historial->info_of_patient }}</td>
											<td>{{ $historial->descripcion }}</td>
											<td>{{ $historial->recipe }}</td>
											<td>{{ $historial->patient_conditions }}</td>
											<td>{{ $historial->patient_addmission_date }}</td>
											<td>{{ $historial->patient_discharge_date }}</td>
											<td>{{ $historial->id_services }}</td>
											<td>{{ $historial->id_patients }}</td>

                                            <td>
                                                <form action="{{ route('historials.destroy',$historial->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historials.show',$historial->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historials.edit',$historial->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historials->links() !!}
            </div>
        </div>
    </div>
@endsection
