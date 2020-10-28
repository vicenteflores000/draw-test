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
    <script src="{{ asset('js/prueba.js') }}"></script>
</head>


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
</header>
<!-- end navbar-custom -->
<!-- End Navigation Bar-->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title"> <i class="mdi mdi-account"></i> Datos Previsionales</h4>
                    </div>
                </div>
            </div>
            <form action="">
                <div class="col-xl-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <label for="nombre">Nombre:</label><br>
                                    <input type="text" class="form-control" name="nombre" id='txtNombre' placeholder="robert lewandowski">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-box">
                                    <label for="rut">Rut:</label><br>
                                    <input type="text" id="rut" class="form-control" name="rut" id='txtRut'
                                        placeholder="ej:222222-2">
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Regimen Previsional</h4>
                                        <div class="form-group">
                                            <select name="afp" id="afp" class="form-control" id="regimen">
                                                <option>A.F.P</option>
                                                <option>Capital</option>
                                                <option>Cuprum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="proporcional" id="proporcional">
                                            <label for="proporcional">Proporcional</label>
                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Tipo de trabajador</h4>
                                        <form>
                                            <div class="form-group">
                                                <input class="form-group-input" type="radio" name="tipotrabajador"
                                                    id="tipotrabajador" value="option1">
                                                <label class="form-check-label" for="tipotrabajador">Activo (no
                                                    pensionado)</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-group-input" type="radio" name="pension" id="pension"
                                                    value="option2">
                                                <label class="form-check-label" for="pension">Pension y
                                                    cotiza</label>
                                            </div>
                                            <div class="form-group">

                                                <input class="form-group-input" type="radio" name="pension" id="pension"
                                                    value="option1">
                                                <label class="form-check-label" for="pension">Pension y no
                                                    cotiza</label>
                                            </div>
                                            <div class="form-group">

                                                <input class="form-group-input" type="radio" name="activo" id="activo"
                                                    value="option1">
                                                <label class="form-check-label" for="activo">Activo >60 o 65
                                                    años</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Mes y año de vigencia</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="00/00/0000" placeholder="Día/Mes/Año">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <input class="form_group" type="checkbox" id="ley" name="ley"
                                                    value="ley">
                                                <label for="proporcional">Beneficios ley 19.966</label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Trabajo Pesado</h4>
                                        <form>
                                            <div class="form-group">
                                                <label>Monto</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="trabajo">Descr. Trabajo Pesado</label>
                                                <textarea class="form-control" id="trabajo" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Ahorro Previsional Voluntario</h4>
                                        <div class="form-group">
                                            <label for="Archivo"></label>
                                            <input type="file" class="form-control-file" id="Archivo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Cotización Pactada</h4>
                                        <form>
                                            <div class="form-group">
                                                <input type="checkbox" name="Cotización-Pactada"
                                                    id="Cotización-Pactada">
                                                <label for="Cotización-Pactada">No Cotiza Salud</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Monto</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Monto U.F</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Cta. Ahorro</h4>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <input class="form-group-input" type="radio" name="ufactual"
                                                            id="ufactual" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">P$</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-group-input" type="radio" name="ufactual"
                                                            id="ufactual" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">%</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-group-input" type="radio" name="ufactual"
                                                            id="ufactual" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">UF.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Cotización voluntaria</h4>
                                        <form>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <input class="form-group-input" type="radio" name="ufactual"
                                                        id="ufactual" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">P$</label>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-group-input" type="radio" name="ufactual"
                                                        id="ufactual" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">%</label>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-group-input" type="radio" name="ufactual"
                                                        id="ufactual" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">UF.</label>
                                                </div>
                                                <input class="form-group" type="checkbox" id="proporcional"
                                                    name="proporcional" value="proporcional">
                                                <label for="proporcional">Rebaja trib. Art.42 Bis.N°1</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Monto</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Regimen de salud</h4>
                                        <div class="form-group">
                                            <label for="rem">Isapre</label>
                                            <select type="select" class="form-control" id="rem">
                                                <option>Fonasa</option>
                                                <option>Capital</option>
                                                <option>Cuprum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rem">Modalidad</label>
                                            <input type="number" class="form-control" id="Modalidad" placeholder="7">
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="Modalidad" id="Modalidad" value="option1">
                                            <label for="Modalidad">U.F actual</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="Modalidad" id="Modalidad" value="option2">
                                            <label for="Modalidad">U.F antigua</label>
                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Adm. Cotización Voluntaria</h4>
                                        <div class="form-group">
                                            <input type="radio" name="Modalidad" id="Modalidad" value="option1">
                                            <label for="Modalidad">Otra Institución</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="Modalidad" id="Modalidad" value="option2">
                                            <label for="Modalidad">A.F.P</label>
                                        </div>
                                        <div class="form-group">
                                            <select type="select" class="form-control" id="Voluntaria" disabled>
                                                <option>Fonasa</option>
                                                <option>Capital</option>
                                                <option>Cuprum</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Detalle
                                                Del
                                                Cónyuge
                                                Cotización
                                                Voluntaria Adicional</button>
                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Ley 19.010</h4>
                                        <form>
                                            <div class="form-group">
                                                <input class="form-group" type="checkbox" id="Ley 19.010"
                                                    name="Ley 19.010" value="Ley 19.010">
                                                <label for="proporcional">Beneficiado</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="rem"> Tasa% </label>
                                                <input type="number" class="form-control" id="rem" placeholder="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha Pacto</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="00/00/0000" placeholder="Día/Mes/Año">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <label>A.F.P</label>
                                            <select name="afp" id="afp" class="form-control">
                                                <option>A.F.P</option>
                                                <option>Capital</option>
                                                <option>Cuprum</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Servicio médico. C.CH.C</h4>
                                        <form>
                                            <div class="form-group">
                                                <input class="form-group" type="checkbox" id="medico" name="medico"
                                                    value="medico">
                                                <label for="medico">Servicio Médico</label>

                                                <input class="form_group" type="checkbox" id="Socio" name="Socio"
                                                    value="Socio">
                                                <label for="Socio">Socio</label>
                                            </div>
                                            <div class="form-group">
                                                <label>C.Norm</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                            </div>
                                            <div class="form-group">
                                                <label>C.Esp.</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Remuneración. Cargas Esp.</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                                    placeholder="111.111.111">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-box">
                                        <h4 class="mt-0 mb-3 header-title">Seguro De Cesantía</h4>
                                        <form>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <input class="form-group" type="checkbox" id="Cesantía"
                                                        name="Cesantía" value="Cesantía">
                                                    <label for="Cesantía">Seg. cesantía</label>

                                                    <input class="form_group" type="checkbox" id="Contrat"
                                                        name="Contrat" value="Contrat">
                                                    <label for="Contrat">Contrat.Plazo/Obra</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Ingreso</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="00/00/0000" placeholder="Día/Mes/Año">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Ultima Cotización</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="00/00/0000" placeholder="Día/Mes/Año">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Termino De Contrato</label>
                                                <input type="text" class="form-control" data-toggle="input-mask"
                                                    data-mask-format="00/00/0000" placeholder="Día/Mes/Año">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="rem">AFP. Seguro De Cesantía</label>
                                                <select type="select" class="form-control" id="Cesantia">
                                                    <option>Capital</option>
                                                    <option>Fonasa</option>
                                                    <option>Cuprum</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <form>
                                        <select id="elpepe">
                                            <option>ete sech</option>
                                            <option>pinochet</option>
                                            <option>el papa del benja</option>
                                            <option>weito rey</option>
                                        </select>
                                        <br><br>
                                        <input type="button" onclick="disable()" value="desactiva">
                                        <input type="button" onclick="enable()" value="activa de pana">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="prueba.js"></script>
</body>
