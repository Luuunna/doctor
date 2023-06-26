@extends('layouts.app')

@section('template_title')
    Hospital
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hospital') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('hospitals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
										<th>Tipo de servicios</th>
										<th>Numero de camas disponibles</th>
										<th>Direccion</Address></th>
										<th>Ubicacion</th>
										<th>Numero de Emergencia</th>
										<th>Id Patients</th>
										<th>Id Doctors</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hospitals as $hospital)
                                        <tr>
                                            <td>{{ $hospital->id }}</td>
                                            
											<td>{{ $hospital->name }}</td>
											<td>{{ $hospital->type_of_services }}</td>
											<td>{{ $hospital->bed_number_aviable }}</td>
											<td>{{ $hospital->address }}</td>
											<td>{{ $hospital->location }}</td>
											<td>{{ $hospital->emergency_number }}</td>
											<td>{{ $hospital->id_patients }}</td>
											<td>{{ $hospital->id_doctors }}</td>

                                            <td>
                                                <form action="{{ route('hospitals.destroy',$hospital->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('hospitals.show',$hospital->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('hospitals.edit',$hospital->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $hospitals->links() !!}
            </div>
        </div>
    </div>
@endsection
