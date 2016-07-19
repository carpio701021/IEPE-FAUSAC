@extends('layouts.admin-user')

@section('content')
<div class="container">
    @include('layouts.mensajes')
    <h3>Administrar recursos para aspirantes</h3>
    <br />

    <div class="panel panel-default">
        <div class="panel-heading"><b>Imagen informativa de fechas</b></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    Esta imagen mostrará un afiche con información relevante a las próximas aplicaciones.
                </div>
                <div class="col-sm-5">
                    <form class="form-horizontal" role="form" action="/admin/recursos/imagenFechas" method="Post" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label class="btn btn-default btn-file" onclick="cancelarFile(2)">
                                    Seleccionar archivo...
                                    {!! Form::file('reglamento' , array(
                                    'style' =>'display:none',
                                    'onchange'=> "cambiar_archivo(2)",
                                    'id' => 'file2',
                                    'accept' => 'image/*'
                                    )) !!}

                                </label>
                                <label class="control-label" id="labelfile2">No se ha seleccionado ningun archivo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5">
                                <button type="submit" class="btn btn-primary">Cargar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <a href="/admin/recursos/reglamento" class="btn btn-default" target="_blank">Ver afiche actual</a>
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><b>Reglamento</b></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    Éste reglamento es accesible por cualquier persona que visite el sitio web.
                </div>
                <div class="col-sm-5">
                    <form class="form-horizontal" role="form" action="/admin/recursos/reglamento" method="Post" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label class="btn btn-default btn-file" onclick="cancelarFile(1)">
                                    Seleccionar archivo...
                                    {!! Form::file('reglamento' , array(
                                    'style' =>'display:none',
                                    'onchange'=> "cambiar_archivo(1)",
                                    'id' => 'file1',
                                    'accept' => '.pdf'
                                    )) !!}

                                </label>
                                <label class="control-label" id="labelfile1">No se ha seleccionado ningun archivo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5">
                                <button type="submit" class="btn btn-primary">Cargar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <a href="/admin/recursos/reglamento" class="btn btn-default" target="_blank">Ver reglamento actual</a>
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><b>Video de bienvenida</b></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    Éste video se auto reproduce al momento de ingresar a la página de bienvenida.
                    Es accesible por todos. El video se debe subir a youtube, y copiar el enlace para llenar éste formulario.
                </div>
                <div class="col-sm-5">
                    <form class="form-horizontal" role="form" action="/admin/recursos/videoBienvenida" method="Post" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label>Enlace de youtube:</label>
                                <input type="text" name="enlace">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <a href="/un enlace a youtube" class="btn btn-default" target="_blank">Ver video actual</a>
                </div>
            </div>

        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading"><b>Guía de exámen específico</b></div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/admin/recursos/reglamento" method="Post" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        Por cada aptitud que el estudiante debe aprobar se dará una breve explicación en un video.
                    </div>
                    <div class="col-sm-6">
                        <a href="/aspirantes/recursos/guia" class="btn btn-default" target="_blank">Ver guía actual</a>
                    </div>
                </div>
                <h4>Razonamiento abstracto</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Boton:</label>
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label class="btn btn-default btn-file" onclick="cancelarFile(3)">
                                    Seleccionar archivo...
                                    {!! Form::file('reglamento' , array(
                                    'style' =>'display:none',
                                    'onchange'=> "cambiar_archivo(3)",
                                    'id' => 'file3',
                                    'accept' => 'image/*'
                                    )) !!}

                                </label>
                                <label class="control-label" id="labelfile3">No se ha seleccionado ningun archivo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label>Enlace de youtube:</label><br />
                                <input type="text" name="enlace">
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Aptitud espacial</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Boton:</label>
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label class="btn btn-default btn-file" onclick="cancelarFile(4)">
                                    Seleccionar archivo...
                                    {!! Form::file('reglamento' , array(
                                    'style' =>'display:none',
                                    'onchange'=> "cambiar_archivo(4)",
                                    'id' => 'file4',
                                    'accept' => 'image/*'
                                    )) !!}

                                </label>
                                <label class="control-label" id="labelfile4">No se ha seleccionado ningun archivo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label>Enlace de youtube:</label><br />
                                <input type="text" name="enlace">
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Razonamiento verbal</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Boton:</label>
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label class="btn btn-default btn-file" onclick="cancelarFile(5)">
                                    Seleccionar archivo...
                                    {!! Form::file('reglamento' , array(
                                    'style' =>'display:none',
                                    'onchange'=> "cambiar_archivo(5)",
                                    'id' => 'file5',
                                    'accept' => 'image/*'
                                    )) !!}

                                </label>
                                <label class="control-label" id="labelfile5">No se ha seleccionado ningun archivo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label>Enlace de youtube:</label><br />
                                <input type="text" name="enlace">
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Aptitud numérica</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Boton:</label>
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label class="btn btn-default btn-file" onclick="cancelarFile(6)">
                                    Seleccionar archivo...
                                    {!! Form::file('reglamento' , array(
                                    'style' =>'display:none',
                                    'onchange'=> "cambiar_archivo(6)",
                                    'id' => 'file6',
                                    'accept' => 'image/*'
                                    )) !!}

                                </label>
                                <label class="control-label" id="labelfile6">No se ha seleccionado ningun archivo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="container">
                                {{csrf_field()}}
                                <label>Enlace de youtube:</label><br />
                                <input type="text" name="enlace">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-xs-5">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@stop

@section('scripts')
    <script type="text/javascript">

        function cancelarFile(id){
            document.getElementById('file'+id).value=null;
        }
        function cambiar_archivo(id) {
            document.getElementById('labelfile'+id).innerHTML=document.getElementById('file'+id).value;
        }
    </script>
@stop