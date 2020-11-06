<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Movimiento Mensual de Empleados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/checkpoint.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

</head>

<body>
    <header id="topnav">
        <div class="navbar-custom" style="background-color: #355d8e">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="pro-user-name ml-1">
                                Administrador <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo_w.png') }}" alt="" height="25">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="{{ asset('images/logo_w.png') }}" alt="" height="20">
                        </span>
                    </a>
                </div>

            </div> <!-- end container-fluid-->
        </div>

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="index.html"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-invert-colors"></i>User Interface <div class="arrow-down">
                                </div></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="ui-cards.html">Cards</a>
                                        </li>
                                        <li>
                                            <a href="ui-draggable-cards.html">Draggable Cards</a>
                                        </li>
                                        <li>
                                            <a href="ui-checkbox-radio.html">Checkboxs-Radios</a>
                                        </li>
                                        <li>
                                            <a href="ui-material-icons.html">Material Design Icons</a>
                                        </li>
                                        <li>
                                            <a href="ui-font-awesome-icons.html">Font Awesome</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="ui-dripicons.html">Dripicons</a>
                                        </li>
                                        <li>
                                            <a href="ui-themify-icons.html">Themify Icons</a>
                                        </li>
                                        <li>
                                            <a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li>
                                            <a href="ui-notification.html">Notification</a>
                                        </li>
                                        <li>
                                            <a href="ui-range-slider.html">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="ui-components.html">Components</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="ui-sweetalert.html">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="ui-treeview.html">Tree view</a>
                                        </li>
                                        <li>
                                            <a href="ui-widgets.html">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="ui-typography.html">Typography</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                                <i class="mdi mdi-lifebuoy"></i>Components <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Forms <div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="form-elements.html">General Elements</a>
                                        </li>
                                        <li>
                                            <a href="form-advanced.html">Advanced Form</a>
                                        </li>
                                        <li>
                                            <a href="form-validation.html">Form Validation</a>
                                        </li>
                                        <li>
                                            <a href="form-wizard.html">Form Wizard</a>
                                        </li>
                                        <li>
                                            <a href="form-fileupload.html">Form Uploads</a>
                                        </li>
                                        <li>
                                            <a href="form-quilljs.html">Quilljs Editor</a>
                                        </li>
                                        <li>
                                            <a href="form-xeditable.html">X-editable</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Tables <div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="tables-basic.html">Basic Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-datatable.html">Data Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-responsive.html">Responsive Table</a>
                                        </li>
                                        <li>
                                            <a href="tables-editable.html">Editable Table</a>
                                        </li>
                                        <li>
                                            <a href="tables-tablesaw.html">Tablesaw Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="inbox.html">Mail</a>
                                </li>

                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-chart-donut-variant"></i>Charts <div class="arrow-down">
                                </div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="charts-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartist.html">Chartist Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Chartjs Charts</a>
                                </li>
                                <li>
                                    <a href="charts-other.html">Other Charts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-cards-outline"></i>Pages <div class="arrow-down"></div></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="pages-starter.html">Starter Page</a>
                                        </li>
                                        <li>
                                            <a href="pages-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="extras-projects.html">Projects</a>
                                        </li>
                                        <li>
                                            <a href="extras-tour.html">Tour</a>
                                        </li>
                                        <li>
                                            <a href="extras-taskboard.html">Taskboard</a>
                                        </li>
                                        <li>
                                            <a href="extras-taskdetail.html">Task Detail</a>
                                        </li>
                                        <li>
                                            <a href="extras-profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a href="extras-maps.html">Maps</a>
                                        </li>
                                        <li>
                                            <a href="extras-contact.html">Contact list</a>
                                        </li>
                                        <li>
                                            <a href="extras-pricing.html">Pricing</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="extras-timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="extras-invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="extras-faq.html">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="extras-gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="extras-email-templates.html">Email Templates</a>
                                        </li>
                                        <li>
                                            <a href="extras-maintenance.html">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="extras-comingsoon.html">Coming Soon</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-card-bulleted-settings-outline"></i>Layouts <div
                                    class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="layouts-menubar-dark.html">Menubar Dark</a>
                                </li>
                                <li>
                                    <a href="layouts-center-menu.html">Center Menu</a>
                                </li>
                                <li>
                                    <a href="layouts-menu-drop-dark.html">Menu Drop Dark</a>
                                </li>
                                <li>
                                    <a href="layouts-preloader.html">Preloader</a>
                                </li>
                                <li>
                                    <a href="layouts-normal-header.html">Unsticky Header</a>
                                </li>
                                <li>
                                    <a href="layouts-boxed.html">Boxed</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
    </header>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title"> <i class="mdi mdi-account"></i> Movimiento Mensual de Empleados</h4>
                    </div>
                </div>
            </div>

            <div class="card-box">
                <form>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="header-title mt-0 mb-3" data-form_title="">Selección de Cliente</h4>
                                        <div class="form-group">
                                            <label for="cliente_id">Buscar por RUT</label>
                                            <select name="cliente_id" id="" class="form-control select">
                                                <option>Seleccione Opción</option>
                                                <option>13435234-3</option>
                                                <option>21006700-0</option>
                                                <option>13288763-2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary btn-sm float-right"
                                            id="agregar-usuario-btn"><i class="fas fa-plus"></i> Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="header-title mt-0 mb-3" data-form_title="">Selección de Recurso</h4>
                                        <div class="form-group">
                                            <label for="cliente_id">Buscar por RUT</label>
                                            <select name="cliente_id" id="" class="form-control select">
                                                <option>Seleccione Opción</option>
                                                <option>Recurso 1</option>
                                                <option>Recurso 2</option>
                                                <option>Recurso 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary btn-sm float-right"
                                            id="agregar-recurso-btn"><i class="fas fa-plus"></i> Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="header-title mt-0 mb-3" data-form_title="">Selección de Responsable
                                        </h4>
                                        <div class="form-group">
                                            <label for="cliente_id">Buscar por RUT</label>
                                            <select name="cliente_id" id="" class="form-control select">
                                                <option>Seleccione Opción</option>
                                                <option>Gustavo</option>
                                                <option>Guillermo</option>
                                                <option>Matías</option>
                                                <option>Hugo</option>
                                                <option>Pancho</option>
                                                <option>Todos Menos Vicente</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary btn-sm float-right"
                                            id="agregar-responsable-btn"><i class="fas fa-plus"></i> Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="header-title mt-0 mb-3" data-form_title="">Horario</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="fecha">Fecha</label>
                                            <input type="date" name="fecha" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="hora_inicio">Hora Inicio</label>
                                            <input type="time" name="hora_inicio" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="hora_termino">Hora Término</label>
                                            <input type="time" name="hora_termino" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="card-box">
                                <h4 class="header-title mt-0 mb-3" data-form_title="">Valor</h4>
                                <div class="form-group">
                                    <label for="valor">Ingrese un Valor</label>
                                    <input type="number" min="0" name="valor" placeholder="19887" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-box">
                                <h4 class="header-title mt-0 mb-3" data-form_title="">Estado</h4>
                                <div class="form-group">
                                    <label for="estado">Seleccione un Estado</label>
                                    <select name="estado" id="" class="form-control">
                                        <option>Seleccione Opción</option>
                                        <option>Reservado</option>
                                        <option>Confirmado</option>
                                        <option>Cancelado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="rightbar-overlay"></div>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

    <script src="{{ asset('js/agenda.js') }}"></script>
</body>

</html>
