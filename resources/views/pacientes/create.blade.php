@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Registrar Paciente</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Whoops!</strong> Verifique los campos.<br><br>
                            @foreach ($errors->all() as $error)
                            <span class="badge alert-danger">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        {{ Form::open(['route' => 'blogs.store','method'=>'POST']) }}
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Personal-tab" data-toggle="tab" href="#Personal" role="tab" aria-controls="Personal" aria-selected="true">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="General-tab" data-toggle="tab" href="#General" role="tab" aria-controls="General" aria-selected="false">General</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Personal" role="tabpanel" aria-labelledby="Personal-tab">
                                <di class="row gap-2">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Primer Nombre*</label>
                                            <input type="text" name="name1" class="name1 form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Segundo Nombre</label>
                                            <input type="text" name="name2" class="name2 form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Tercer Nombre</label>
                                            <input type="text" name="name3" class="name3 form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Primer Apellido*</label>
                                            <input type="text" name="lastName1" class="lastName1 form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Segundo Apellido</label>
                                            <input type="text" name="lastName2" class="lastName2 form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Apellido de Casada</label>
                                            <input type="text" name="lastName3" class="lastName3 form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Género*</label>
                                            <select class="form-control" name="genero">
                                                <option key="0">Masculino</option>
                                                <option key="1">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Estado Civil*</label>
                                            <select class="form-control" name="estadoCivil">
                                                <option key="0">Soltero(a)</option>
                                                <option key="1">Casado(a)</option>
                                                <option key="2">Divorciado(a)</option>
                                                <option key="3">Viudo(a)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Teléfono*</label>
                                            <input type="text" name="cellphone" class="cellphone form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Nacionalidad</label>
                                            <input type="text" name="nacionalidad" class="nacionalidad form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Fecha de Nacimiento*</label>
                                            {{ Form::date('fechaNacimiento', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Edad*</label>
                                            <input type="number" name="age" class="age form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Acceso al IGSS*</label>
                                            <select class="form-control" name="accesoIGSS">
                                                <option key="1">Sí</option>
                                                <option key="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">DPI/CUI</label>
                                            <input type="text" name="dpi" class="dpi form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Fecha de Vencimiento DPI</label>
                                            {{ Form::date('dpiFechaVencimiento', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Estado del DPI*</label>
                                            <select class="form-control" name="estadoDPI">
                                                <option key="1">Activo</option>
                                                <option key="0">No tramitado</option>
                                                <option key="2">En trámite</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Departamento de Origen*</label>
                                            <select class="form-control" name="deptoOrigen">
                                                <option key="0">Pendiente</option>
                                                <option key="1">Pendiente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Municipio de Origen*</label>
                                            <select class="form-control" name="muniOrigen">
                                                <option key="0">Pendiente</option>
                                                <option key="1">Pendiente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Dirección*</label>
                                            <input type="text" name="address" class="address form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Zona*</label>
                                            <select class="form-control" name="zona">
                                                <option key="1">1</option>
                                                <option key="2">2</option>
                                                <option key="3">3</option>
                                                <option key="4">4</option>
                                                <option key="5">5</option>
                                                <option key="6">6</option>
                                                <option key="7">7</option>
                                                <option key="8">8</option>
                                                <option key="9">9</option>
                                                <option key="10">10</option>
                                                <option key="11">11</option>
                                                <option key="12">12</option>
                                                <option key="13">13</option>
                                                <option key="14">14</option>
                                                <option key="15">15</option>
                                                <option key="16">16</option>
                                                <option key="17">17</option>
                                                <option key="18">18</option>
                                                <option key="19">19</option>
                                                <option key="20">20</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Colonia / Barrio / Aldea*</label>
                                            <input type="text" name="coloniaBarrioAldea" class="address form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Referencia de la Vivienda</label>
                                            <input type="text" name="refVivienda" class="address form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Departamento Actual*</label>
                                            <select class="form-control" name="deptoActual">
                                                <option key="0">Pendiente</option>
                                                <option key="1">Pendiente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Municipio Actual*</label>
                                            <select class="form-control" name="muniActual">
                                                <option key="0">Pendiente</option>
                                                <option key="1">Pendiente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Teléfono Casa*</label>
                                            <input type="text" name="telefonoCasa" class="telefonoCasa form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Teléfono 1</label>
                                            <input type="text" name="telefono1" class="telefono1 form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" style="font-size: 1rem;">Teléfono 2</label>
                                            <input type="text" name="telefono2" class="telefono2 form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-3 text-center pt-3">
                                        <button type="button" class="btn btn-block btn-lg btn-warning text-capitalize">REGRESAR SIN GUARDAR</button>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-9 text-center pt-3">
                                        <button type="submit" class="btn btn-block btn-lg btn-primary text-capitalize">GUARDAR PACIENTE</button>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="General" role="tabpanel" aria-labelledby="General-tab">de</div>
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
@section('scripts')
<script>
    $(document).ready(function() {
        $('.cellphone').inputmask('9999-9999');
        $('.telefonoCasa').inputmask('9999-9999');
        $('.telefono1').inputmask('9999-9999');
        $('.telefono2').inputmask('9999-9999');
        $('.dpi').inputmask('9999 99999 9999');
    });
</script>
@endsection