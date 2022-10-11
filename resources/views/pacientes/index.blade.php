@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Pacientes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                             @can('crear-paciente')
                                <div class="pull-right">
                                    <a class="btn btn-warning" href="{{ route('pacientes.create') }}">Nuevo</a>
                                    <form action="{{route('pacientes.index')}}" method="get" class="form-inline my-2 my-lg-0 float-right">
                                        <input name="texto" class="form-control mr-sm-2" type="text" placeholder="Ingrese Paciente" aria-label="Search">
                                        <button class="btn btn btn-info my-2 my-sm-0" type="submit">Buscar Paciente</button>
                                    </form>  
                                </div>
                             @endcan
                             <br>
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef" >
                                    <th style="display: none" >ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Apellido</th>
                                    <th style="color: #fff">Dirección</th>
                                    <th style="color: #fff">Telefono</th>
                                    <th style="color: #fff">Estado</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @if (count($pacientes)<=0)
                                        <tr>
                                            <td colspan="5">¡El paciente no existe!</td>
                                        </tr>
                                    @else    
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td style="display: none">{{ $paciente->id }}</td>
                                            <td>{{ $paciente->primer_Nombre." ".$paciente->segundo_Nombre }}</td>
                                            <td>{{ $paciente->primer_Apellido." ".$paciente->segundo_Apellido }}</td>
                                            <td>{{ $paciente->Direccion }}</td>
                                            <td>{{ $paciente->Telefono }}</td>
                                            <td><select name="dowpdown" class="btn btn-warning">
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>
                                              </select></td>
                                            <td>
                                                <div class="btn-group" roel="group" aria-lavel="Basic exame">
                                                    <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                                <div class="pagination justify-content-end">
                                    {{ $pacientes->links() }}
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
