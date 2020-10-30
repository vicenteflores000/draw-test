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

    <!-- third party css -->
    <link href="{{ asset('libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/checkpoint.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="wrapper">
        <div class="container-fluid" style="margin-top: -100px">
            <div class="col-md-12">
                <div class="page-title-box">
                    <h4 class="page-title"><i class="fas fa-futbol"></i>Arriendo de Canchas</h4>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card-box">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <label for="bsuqueda" class="col-sm-2 col-form-label"><strong> BUSCAR POR:
                                            </strong></label>
                                        <div class="col-sm">
                                            <select id="busqueda" class="form-control form-control-sm">
                                                <option>Seleccione Opción</option>
                                                <option value="">Apellido Paterno</option>
                                                <option value="">Apellido Materno</option>
                                                <option value="">Nombre</option>
                                                <option value="">Teléfono</option>
                                                <option value="">RUT</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" id="busqueda" class="form-control form-control-sm">
                                        </div>
                                        <div class="col-sm">
                                            <button class="btn btn-sm btn-block btn-primary">Buscar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombres</th>
                                                        <th>Apellido Paterno</th>
                                                        <th>Apellido Materno</th>
                                                        <th>Estado</th>
                                                        <th>Centro</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <center><a href="#"><i class="fas fa-check"
                                                                        style="color: #10c469"></i></a></center>
                                                        </td>
                                                        <td>VICENTE ANDRÉS</td>
                                                        <td>FLORES</td>
                                                        <td>ARRIAZA </td>
                                                        <td>ACTIVO</td>
                                                        <td>RANCAGUA MUJICA #256</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <br>

                                    <hr style="border-color: rgba(0, 0, 0, .4)">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th colspan="5"><center>Modelo</center></th>
                                                        <th colspan="2"><center>Programar</center></th>
                                                        <th colspan="2"><center>Excluir</center></th>
                                                        <th rowspan="2"><center>Obligar : Clave</center></th>
                                                        <th colspan="2" rowspan="2"><span><span></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Categoría</th>
                                                        <th>Tipo Agenda</th>
                                                        <th>Centro</th>
                                                        <th>Código</th>
                                                        <th>Nombre</th>
                                                        <th>Desde</th>
                                                        <th>Hasta</th>
                                                        <th>Desde</th>
                                                        <th>Hasta</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>VICENTE ANDRÉS</td>
                                                        <td>FLORES</td>
                                                        <td>ARRIAZA </td>
                                                        <td>ACTIVO</td>
                                                        <td>RANCAGUA MUJICA #256</td>
                                                        <td><input type="text" size="1" class="form-control"></td>
                                                        <td><input type="text" size="1" class="form-control"></td>
                                                        <td><input type="text" size="1" class="form-control"></td>
                                                        <td><input type="text" size="1" class="form-control"></td>
                                                        <td><input type="checkbox" id="chk" onclick="activarInput()">
                                                            <input type="text" id="txt" size="15" disabled>
                                                        </td>
                                                        <td><a href="#"><i class="fas fa-check"
                                                            style="color: #10c469"></i></a></td>
                                                        <td><a href="#"><i class="fas fa-times"
                                                                    style="color: #b71c1c"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm"><button class="btn btn-xs btn-block btn-primary">Nuevo</button></div>
                                        <div class="col-sm"><button class="btn btn-xs btn-block btn-primary">Programar</button></div>
                                        <div class="col-sm"><button class="btn btn-xs btn-block btn-primary">Cancelar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <script src="{{ asset('js/es.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{ asset('js/pages/datatables.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('js/app.min.js') }}"></script>

    <!-- Inserción de Eventos -->
    <script src="{{ asset('js/pages/eventos.js') }}"></script>

    <script>
        function activarInput() {
            if (document.getElementById('chk').checked == true) {
                document.getElementById('txt').disabled = false;
            }

            if (document.getElementById('chk').checked == false) {
                document.getElementById('txt').disabled = true;
            }
        }

    </script>

</body>

</html>
