<!DOCTYPE html> <!-- Situación del Mes -->
<html lang="en">

<head>
    <meta charset="utf-8" />
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
</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">

        <!-- Topbar Start -->
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
                                Nowak <i class="mdi mdi-chevron-down"></i>
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
                            <img src="{{ asset('images/logo_w.png') }}" alt="" height="30">
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
        <!-- end Topbar -->

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
        <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title"> <i class="mdi mdi-account"></i> Movimiento Mensual de Empleados</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="col-xl-12">

                <div class="card-box">
                    <div class="col-md-12">

                        <div class="card-box">
                            <!-- 1ra Fila: Datos Empleado -->
                            <h4 class="mt-0 mb-3 header-title">Datos Personales</h4>

                            <form role="form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="rutempleado">RUT Empleado</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="ej: 12345678-9">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-sm btn-primary"
                                                    id="botonimportar">Importar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-12">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item">
                                    <a href="#s-mes" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Datos Personales</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#habydes" data-toggle="tab" aria-expanded="true" class="nav-link">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Datos Laborales</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#licenyperm" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Dato Previsional</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#listado" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Cargas Familiares</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#movimientos" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Movimientos</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="s-mes">
                                    <p class="mb-0">Food truck fixie locavore,
                                        accusamus mcsweeney's marfa nulla single-origin coffee squid.
                                        Exercitation +1 labore velit, blog sartorial PBR leggings next level
                                        wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                        photo booth letterpress, commodo enim craft beer mlkshk aliquip jean
                                        shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda
                                        labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia
                                        yr, vero magna velit sapiente labore stumptown. Vegan fanny pack
                                        odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY
                                        ethical culpa terry richardson biodiesel. Art party scenester
                                        stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed
                                        echo park.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="habydes">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-sm-2  col-form-label" for="simpleinput">Número de
                                                    Contacto</label>
                                                <div class="col-sm-4">
                                                    <input type="number" id="simpleinput" class="form-control"
                                                        placeholder="0">
                                                </div>

                                                <label class="col-sm-2  col-form-label" for="simpleinput">Fecha de
                                                    Contrato</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="simpleinput" class="form-control datepicker"
                                                        value="{{ date('d-m-Y') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <br>

                                    <div class="row">
                                        <!-- 2da Fila: Sueldo, Otros Antecedentes y Contratación -->

                                        <div class="col-md-4">
                                            <!-- Días -->
                                            <div class="card-box">
                                                <h4 class="mt-0 mb-3 header-title">Contratación</h4>

                                                <div class="form-group row">
                                                    <label class="col-sm-3  col-form-label"
                                                        for="dausentes">Ausentes:</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" id="dausentes" class="form-control"
                                                            placeholder="0">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3  col-form-label" for="dnocontratados">No
                                                        Contratados:</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" id="dnocontratados" class="form-control"
                                                            placeholder="0">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3  col-form-label"
                                                        for="dlicencia">Licencia:</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" id="dlicencia" class="form-control"
                                                            placeholder="0">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3  col-form-label"
                                                        for="dlocomocion">Locomoción:</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" id="dlocomocion" class="form-control"
                                                            placeholder="0">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3  col-form-label"
                                                        for="dcolacion">Colación:</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" id="dcolacion" class="form-control"
                                                            placeholder="0">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <!-- Hrs. Extray hrs. Descuento -->
                                            <div class="card-box">
                                                <h4 class="mt-0 mb-3 header-title">Horas Extras</h4>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label" for="hnormal">Normal:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" id="hnormal" placeholder="0"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label" for="hnoche">Noche:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" id="hnoche" placeholder="0"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label"
                                                        for="hfestivo">Festivo:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" id="hfestivo" placeholder="0"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-box">
                                                <h4 class="mt-0 mb-3 header-title">Horas Descuento</h4>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label"
                                                        for="hdescuento">Normal:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" id="hdescuento" placeholder="0"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <!-- Otros y Otras rentas -->
                                            <div class="card-box">
                                                <h4 class="mt-0 mb-3 header-title">Otros</h4>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label" for="hnormal">Tipo Horas
                                                        Extra:</label>
                                                    <div class="col-sm-8">
                                                        <select name="tipohorasextra" id="tipohorasextra"
                                                            class="form-control">
                                                            <option>Seleccione Opción</option>
                                                            <option value="">Sueldo Base</option>
                                                            <option value="">Sueldo Extra</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="card-box">
                                                <h4 class="mt-0 mb-3 header-title">Otras Rentas</h4>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="orentas">Otras
                                                        Rentas:</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" id="orentas" placeholder="0"
                                                            class="form-control">
                                                    </div>

                                                    <label class="col-sm-3 col-form-label" for="misapre">Monto
                                                        Isapre:</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" id="misapre" placeholder="0"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <label for="">Banco:</label>
                                                <select name="select-banco" id="" class="form-control">
                                                    <option>Seleccione Opción</option>
                                                    <option value="">Banco Estado</option>
                                                    <option value="">Banco de Crédito e Inversiones</option>
                                                    <option value="">Banco Carebeso</option>
                                                </select>

                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label" for="hnormal">Monto Salud
                                                        Descontado de la Base de Impuesto Único (en $):</label>
                                                    <div class="col-sm-12">
                                                        <input type="number" id="hnormal" placeholder="0"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-box">
                                                <h4 class="mt-0 mb-3 header-title">Cargas Retroactivas</h4>

                                                <div class="form-group row">
                                                    <label class="col col-form-label" for="tcargas">Total
                                                        Cargas:</label>
                                                    <div class="col">
                                                        <input type="number" id="tcargas" placeholder="0"
                                                            class="form-control" disabled>
                                                    </div>

                                                    <label class="col col-form-label" for="csimples">Cargas
                                                        Simples:</label>
                                                    <div class="col">
                                                        <input type="number" id="csimples" placeholder="0"
                                                            class="form-control">
                                                    </div>

                                                    <label class="col col-form-label" for="cinvalidez">Cargas
                                                        Invalidez:</label>
                                                    <div class="col">
                                                        <input type="number" id="cinvalidez" placeholder="0"
                                                            class="form-control">
                                                    </div>

                                                    <label class="col col-form-label" for="cmaternales">Cargas
                                                        Maternales:</label>
                                                    <div class="col">
                                                        <input type="number" id="cmaternales" placeholder="0"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="licenyperm">
                                    <p class="mb-0">Etsy mixtape wayfarers, ethical
                                        wes anderson tofu before they sold out mcsweeney's organic lomo
                                        retro fanny pack lo-fi farm-to-table readymade. Messenger bag
                                        gentrify pitchfork tattooed craft beer, iphone skateboard locavore
                                        carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy
                                        irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                        banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                        retro mlkshk vice blog. Scenester cred you probably haven't heard of
                                        them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu
                                        synth chambray yr.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="listado">
                                    <p class="mb-0">Trust fund seitan letterpress,
                                        keytar raw denim keffiyeh etsy art party before they sold out master
                                        cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                        pack portland seitan DIY, art party locavore wolf cliche high life
                                        echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before
                                        they sold out farm-to-table VHS viral locavore cosby sweater. Lomo
                                        wolf viral, mustache readymade thundercats keffiyeh craft beer marfa
                                        ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                        vegan.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="movimientos">
                                    <p class="mb-0">Trust fund seitan letterpress,
                                        keytar raw denim keffiyeh etsy art party before they sold out master
                                        cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                                        pack portland seitan DIY, art party locavore wolf cliche high life
                                        echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before
                                        they sold out farm-to-table VHS viral locavore cosby sweater. Lomo
                                        wolf viral, mustache readymade thundercats keffiyeh craft beer marfa
                                        ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                        vegan.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- end col -->

    </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>
