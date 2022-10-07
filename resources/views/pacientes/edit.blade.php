@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Paciente</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>Whoops!</strong> Verifique los campos.<br><br>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge alert-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                                {{ Form::model($blog, ['method' => 'PATCH','route' => ['pacientes.update',1]]) }}
                                    <di class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Titulo:</strong>
                                                {{ Form::text('title', null, ['placeholder' => 'Titulo','class' => 'form-control']) }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Contenido:</strong>
                                                {{ Form::textarea('content', null, ['placeholder' => 'Contenido','class' => 'form-control', 'style' => 'height: 200px']) }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection