@extends('layouts.app')

@section('template_title')
    Doctor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Doctor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('doctors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('crear nuevo') }}
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
                                        <th>ID</th>
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>cedula</th>
										<th>Numer de telefono</th>
										<th>Fecha de nacimiento</th>
										<th>Edad</th>
										<th>Genero</th>
										<th>Direccion</th>
										<th>Email</th>
										<th>Hospital que atiende</th>
										<th>Lugar de trabajo</th>
										<th>Especialidad</th>
										<th>Turno</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>{{$doctor->id}}</td>
                                            
											<td>{{ $doctor->name }}</td>
											<td>{{ $doctor->last_name }}</td>
											<td>{{ $doctor->identification_card }}</td>
											<td>{{ $doctor->phone_number }}</td>
											<td>{{ $doctor->birthdate }}</td>
											<td>{{ $doctor->age }}</td>
											<td>{{ $doctor->gender }}</td>
											<td>{{ $doctor->address }}</td>
											<td>{{ $doctor->email }}</td>
											<td>{{ $doctor->hospital_taht_attends }}</td>
											<td>{{ $doctor->workstation }}</td>
											<td>{{ $doctor->specialty }}</td>
											<td>{{ $doctor->turn }}</td>

                                            <td>
                                                <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doctors.show',$doctor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doctors.edit',$doctor->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $doctors->links() !!}
            </div>
        </div>
    </div>
@endsection
