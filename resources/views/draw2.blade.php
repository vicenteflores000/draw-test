<!DOCTYPE html> <!-- Dat. Laborales -->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Mantención de Trabajadores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

        <!-- App css -->
            <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/checkpoint.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom" style="background-color: #355d8e">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
                                <img src="{{asset('images/logo_w.png')}}" alt="" height="30">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="{{asset('images/logo_w.png')}}" alt="" height="20">
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
                                <a href="#"> <i class="mdi mdi-invert-colors"></i>User Interface  <div class="arrow-down"></div></a>
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
                                <a href="#"> <i class="mdi mdi-chart-donut-variant"></i>Charts <div class="arrow-down"></div></a>
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
                                <a href="#"> <i class="mdi mdi-card-bulleted-settings-outline"></i>Layouts <div class="arrow-down"></div></a>
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
                            <h4 class="page-title"> <i class="mdi mdi-account"></i> Mantención de Trabajadores</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="col-xl-12">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a href="#d-personales" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Datos Personales</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#d-laborales" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Datos Laborales</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#d-previsional" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Dato Previsional</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#c-familiares" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">Cargas Familiares</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#observaciones" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">Observaciones</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content" style="background-color: white">
                        <div role="tabpanel" class="tab-pane fade show active" id="d-personales">
                            <p class="mb-0">Pestaña 1.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="d-laborales">
                            <div class="col-md-12">
                                <div class="card-box" style="background-color: #f1f5f7"> <!-- 1ra Fila: Datos Empleado -->
                                    <h4 class="mt-0 mb-3 header-title">Datos Empleado</h4>
        
                                    <form role="form">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="rutempleado">RUT Empleado</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="ej: 12345678-9">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-sm" id="botonimportar" style="background-color: #355d8e; border-color: #355d8e" >Importar</button>
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
                                <div class="row"> <!-- 2da Fila: Sueldo, Otros Antecedentes y Contratación -->
                                    <div class="col-md-3"> <!-- Sueldo y Semana -->
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Sueldo</h4>
                                            
                                            <div class="form-group">
                                                <label for="">Tipo:</label>
                                                <select name="select-tipo" id="" class="form-control select">
                                                    <option>Seleccione Opción</option>
                                                    <option value="">Mensual</option>
                                                    <option value="">Anual</option>
                                                    <option value="">Semestral</option>
                                                    <option value="">Semanal</option>
                                                    <option value="">Diario</option>
                                                </select>
                                            </div>
                                            

                                            

                                            <div class="form-group">
                                                <label for="">Moneda:</label>
                                                <select name="select-moneda" id="" class="form-control">
                                                    <option>Seleccione Opción</option>
                                                    <option value="">Peso</option>
                                                    <option value="">Dolares</option>
                                                    <option value="">Euros</option>
                                                    <option value="">Libras</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Día Cambio:</label>
                                                <input type="number" placeholder="Ingrese Día" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Monto:</label>
                                                <input type="number" placeholder="Ingrese Monto" class="form-control">
                                            </div>

                                            <input type="checkbox"> <label for="">No Calcula Ajuste Sueldo Base</label>
                                        </div>
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Semana</h4>
                
                                            <label for="">Cantidad de Horas:</label>
                                            <input type="number" placeholder="Ingrese Cantidad" class="form-control">

                                            <label for="">Cantidad de Días:</label>
                                            <input type="number" placeholder="Ingrese Cantidad" class="form-control">


                                        </div>
                                    </div>
                                    <div class="col-md-3"> <!-- Otros Antecedentes y Forma de Pago -->
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Otros Antecedentes</h4>
                
                                            <label for="">Locomoción:</label>
                                            <input type="number" placeholder="Ingrese Monto" class="form-control">

                                            <label for="">Colación:</label>
                                            <input type="number" placeholder="Ingrese Monto" class="form-control">


                                        </div>
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Forma de Pago</h4>
                                            
                                            <label for="">Tipo Pago:</label>
                                            <select name="select-tipo" id="" class="form-control">
                                                <option>Seleccione Opción</option>
                                                <option value="">Efectivo</option>
                                                <option value="">Deposito</option>
                                                <option value="">Combos</option>
                                                <option value="">Sentones</option>
                                                <option value="">Besos</option>
                                            </select>

                                            <label for="">Banco:</label>
                                            <select name="select-banco" id="" class="form-control">
                                                <option>Seleccione Opción</option>
                                                <option value="">Banco Estado</option>
                                                <option value="">Banco de Crédito e Inversiones</option>
                                                <option value="">Banco Carebeso</option>
                                            </select>

                                            <label for="">Cuenta Corriente:</label>
                                            <input type="number" placeholder="Ingrese Número de Cuenta" class="form-control">

                                            <label for="">Movimiento Banco:</label>
                                            <select name="select-banco" id="" class="form-control">
                                                <option>Seleccione Opción</option>
                                                <option value="">Opción 1</option>
                                                <option value="">Opción 2</option>
                                                <option value="">Opción 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> <!-- Contratación -->
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Contratación</h4>
                
                                            <label for="">Fecha Contrato:</label>
                                            <input type="date" placeholder="Ingrese Monto" class="form-control">

                                            <label for="select-cargo">Cargo:</label>
                                            <select name="" id="select-cargo" class="form-control">
                                                <option>Seleccione Opción</option>
                                                <option value="">OPERARIO</option>
                                                <option value="">FONTANERO</option>
                                            </select>

                                            <label for="labor">Labor:</label>
                                            <input type="text" name="" id="labor" class="form-control">

                                            <label for="profesion">Profesión:</label>
                                            <input type="text" name="" id="profesion" class="form-control">

                                            <label for="horario">Horario:</label>
                                            <input type="text" name="" id="horario" class="form-control">

                                            <label for="select-sucursal">Sucursal:</label>
                                            <select name="" id="select-sucursal" class="form-control">
                                                <option>Seleccione Opción</option>
                                                <option value="">PILLADO DE POLLOS</option>
                                                <option value="">PILLADO DE VACAS</option>
                                                <option value="">PILLADO DE MAMÁ DEL BENJA</option>
                                            </select>

                                            <label for="select-centro">Centro Costo:</label>
                                            <select name="" id="select-centro" class="form-control">
                                                <option>Seleccione Opción</option>
                                                <option value="">PILLADO DE POLLOS</option>
                                                <option value="">PILLADO DE VACAS</option>
                                                <option value="">PILLADO DE MAMÁ DEL BENJA</option>
                                            </select>

                                            <label for="zona">Asignar Zona (% Original):</label>
                                            <div class="input-group">
                                                <input type="number" name="" id="zona" class="form-control">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">%</span>
                                                </div>
                                            </div>

                                            <label for="">Incrementa Asignación de Zona Horaria</label> <input type="checkbox">
                                        </div>
                                    </div> 
                                </div> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Gratificación</h4>

                                            <label for="tipo" class="form-control">Tipo:</label>
                                            <select name="" id="tipo" class="form-control">
                                                <option>Seleccione Opción</option>
                                                <option value="">Calculada</option>
                                                <option value="">No Calculada</option>
                                            </select>

                                            <label for="monto">Monto:</label>
                                            <input type="number" name="" id="monto" class="form-control">

                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Caraterística Tributaria</h4>

                                            <input type="checkbox" name="" id="impagri"> <label for="impagri">Impuesto Agrícola</label> <br>
                                            <input type="checkbox" name="" id="arti"> <label for="arti">Artículo 61, Ley 18.768</label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-box" style="background-color: #f1f5f7">
                                            <h4 class="mt-0 mb-3 header-title">Seguro de Invalidez y Sobrevivencia</h4>

                                            <input type="checkbox" name="" id="leysis"> <label for="impagri">No aplíca Ley SIS</label> <br>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-success waves-effect width-md waves-light">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="d-previsional">
                            <p class="mb-0">Pestaña 3.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="c-familiares">
                            <p class="mb-0">Pestaña 4.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="observaciones">
                            <p class="mb-0">Pestaña 5.</p>
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
        <script src="{{asset('js/vendor.min.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('js/app.min.js')}}"></script>
        
    </body>
</html>