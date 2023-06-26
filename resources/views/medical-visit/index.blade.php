@extends('layouts.app')

@section('template_title')
    Medical Visit
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Medical Visit') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('medical-visits.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Date</th>
										<th>Hour</th>
										<th>Location</th>
										<th>City</th>
										<th>Id Patients</th>
										<th>Id Doctors</th>
										<th>Id Hospital</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicalVisits as $medicalVisit)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $medicalVisit->date }}</td>
											<td>{{ $medicalVisit->hour }}</td>
											<td>{{ $medicalVisit->location }}</td>
											<td>{{ $medicalVisit->city }}</td>
											<td>{{ $medicalVisit->id_patients }}</td>
											<td>{{ $medicalVisit->id_doctors }}</td>
											<td>{{ $medicalVisit->id_hospital }}</td>

                                            <td>
                                                <form action="{{ route('medical-visits.destroy',$medicalVisit->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('medical-visits.show',$medicalVisit->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('medical-visits.edit',$medicalVisit->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $medicalVisits->links() !!}
            </div>
        </div>
    </div>
@endsection
