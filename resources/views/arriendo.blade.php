<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Arriendo de Canchas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Plugin css -->
    <link href="{{ asset('libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/checkpoint.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Título de la página -->
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h4 class="page-title"><i class="fas fa-futbol"></i>Arriendo de Canchas</h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card-box">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="row">
                                <!-- Formulario RUT -->
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <label class="col-sm-4  col-form-label"
                                                        for="simpleinput">RUT:</label>
                                                    <div class="col-sm-8">
                                                        <div class="row"></div>
                                                        <input type="text" id="simpleinput txtRut" class="form-control"
                                                            placeholder="ej: 11111111-1">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-4  col-form-label"
                                                        for="simpleinput">Teléfono:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="simpleinput txtNum" class="form-control"
                                                            placeholder="ej: 9 1234 5678">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 align-self-center">
                                                <button class="btn btn-sm btn-primary"><i class="fe-search"></i>
                                                    Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-sm">
                                                <h4 class="header-title">Datos Usuario</h4>
                                            </div>
                                            <div class="col-sm text-right">
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target=".bs-example-modal-center">
                                                    <i class="fas fa-plus-square"></i> Agregar
                                                </button>
                                            </div>
                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                                aria-labelledby="myCenterModalLabel" aria-hidden="true"
                                                style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myCenterModalLabel">Agregar
                                                                Usuario</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-md-12">
                                                                <div class="card-box">
                                                                    <div class="row">
                                                                        <label class="col-sm-2  col-form-label"
                                                                            for="simpleinput">RUT:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" id="simpleinput"
                                                                                class="form-control"
                                                                                placeholder="ej: 11111111-1">
                                                                        </div>
                                                                    </div> <br>
                                                                    <div class="row">
                                                                        <label for="nom"
                                                                            class="col-sm-2 col-form-label">Nombre:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" id="simpleinput"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div> <br>
                                                                    <div class="row">
                                                                        <label for="nom"
                                                                            class="col-sm-2 col-form-label">Apellido:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" id="simpleinput"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div> <br>
                                                                    <button type="button"
                                                                        class="btn btn-block btn-xs btn-primary waves-effect waves-light">Agregar
                                                                        Usuario</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Nombre:</label>
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-sm">
                                                <label for="">Apellido:</label>
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Teléfono:</label>
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-sm">
                                                <label for="">Correo:</label>
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Origen:</label>
                                                <select name="" id="" class="form-control form-control-sm">
                                                    <option value="">Seleccione Opción</option>
                                                    <option value="">Instagram</option>
                                                    <option value="">Facebook</option>
                                                    <option value="">Teléfono</option>
                                                    <option value="">WhatsApp</option>
                                                    <option value="">Correo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                                <label for="">Estado de Pago:</label>
                                                <select name="" id="" class="form-control form-control-sm">
                                                    <option value="">Seleccione Opción</option>
                                                    <option value="">Pagado</option>
                                                    <option value="">Por Cancelar</option>
                                                </select>
                                            </div>
                                        </div> <br>
                                    </div>
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-sm">
                                                <h4 class="header-title">Disponibilidad de Cancha</h4>
                                            </div>
                                        </div> <br>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button"
                                                    class="btn btn-block btn-xxs btn-success"><strong>CANCHA
                                                        1</strong></button>
                                            </div>
                                            <label class="col-sm-8" for="simpleinput">(5-8 disponible)</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button"
                                                    class="btn btn-block btn-xxs btn-success"><strong>CANCHA
                                                        2</strong></button>
                                            </div>
                                            <label class="col-sm-8" for="simpleinput">(5-8 disponible)</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button"
                                                    class="btn btn-block btn-xxs btn-success"><strong>CANCHA
                                                        3</strong></button>
                                            </div>
                                            <label class="col-sm-8" for="simpleinput">(5-8 disponible)</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button"
                                                    class="btn btn-block btn-xxs btn-success"><strong>CANCHA
                                                        4</strong></button>
                                            </div>
                                            <label class="col-sm-8" for="simpleinput">(5-8 disponible)</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button"
                                                    class="btn btn-block btn-xxs btn-success"><strong>CANCHA
                                                        5</strong></button>
                                            </div>
                                            <label class="col-sm-8" for="simpleinput">(5-8 disponible)</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button"
                                                    class="btn btn-block btn-xxs btn-success"><strong>CANCHA
                                                        6</strong></button>
                                            </div>
                                            <label class="col-sm-8" for="simpleinput">(5-8 disponible)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-box" style="height: 98%">
                                <div id="calendar"></div>
                            </div>
                            <!-- BEGIN MODAL -->
                            <div class="modal fade none-border" id="event-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title mt-0"><strong>Agregar Evento</strong></h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="button"
                                                class="btn btn-success save-event waves-effect waves-light">Crear
                                                Evento</button>
                                            <button type="button"
                                                class="btn btn-danger delete-event waves-effect waves-light"
                                                data-dismiss="modal">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Add Category -->
                            <div class="modal fade none-border" id="add-category">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title mt-0"><strong>Agrega una Categoría </strong></h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="control-label">Categoría</label>
                                                        <input class="form-control form-white" placeholder="Enter name"
                                                            type="text" name="category-name" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Choose Category Color</label>
                                                        <select class="form-control form-white"
                                                            data-placeholder="Choose a color..." name="category-color">
                                                            <option value="success">Success</option>
                                                            <option value="danger">Danger</option>
                                                            <option value="info">Info</option>
                                                            <option value="pink">Pink</option>
                                                            <option value="primary">Primary</option>
                                                            <option value="warning">Warning</option>
                                                            <option value="inverse">Inverse</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect"
                                                data-dismiss="modal">Close</button>
                                            <button type="button"
                                                class="btn btn-danger waves-effect waves-light save-category"
                                                data-dismiss="modal">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>

    <!-- fullcalendar plugins -->
    <script src="{{ asset('libs/moment/moment.js') }}"></script>
    <script src="{{ asset('libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('libs/fullcalendar/fullcalendar.min.js') }}"></script>

    <!-- fullcalendar js -->
    <script src="{{ asset('js/pages/fullcalendar.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('js/app.min.js') }}"></script>
</body>

</html>
