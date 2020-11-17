<html>

<head>
    <title>hhh</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="container-fluid">

        <form action="">
            <div class="row">
                <div class="card-box col-md-12">
                    <div class="col-xl-3">
                        <form>
                            <input type="number" id="numero">
                            <button id="op" type="button" onclick=matii()>aqui</button><br>
                            <h4 id="mensaje"></h4>
                        </form>
                    </div>
                    <div class="col-xl-12">
                        <h2>vehiculos pana</h2>
                        <form id="compra">
                            <div class="col-xl-2">
                                <input type="checkbox" id="check1" onclick="paho()">nuevo
                                <input type="checkbox" id="check2" onclick="paha()">seminuevo
                            </div>

                            <div class="col-xl-3">
                                <h4 class="mt-0 mb-3 header-title">Tipo de vehiculo</h4>
                                <div class="form-group">
                                    <select id="tvehiculo" disabled>
                                        <option>moto</option>
                                        <option>auto</option>
                                        <option>helicopteroapache</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-xl-3">
                                <h4 class="mt-0 mb-3 header-title">Año</h4>
                                <div class="form-group">
                                    <input type="number" id="an" disabled>
                                </div>
                            </div>


                            <div class="col-xl-2">
                                <h4 class="mt-0 mb-3 header-title">Marca</h4>
                                <div class="form-group">
                                    <input type="text" id="marc" disabled>
                                </div>
                            </div>


                            <div class="col-xl-1">
                                <h4 class="mt-0 mb-3 header-title">Color</h4>
                                <div class="form-group">
                                    <input type="number" id="col" disabled>
                                </div>
                            </div>

                            <div class="card-box">
                                <button type="button" id="envia" class="btn btn-secondary btn-sm waves-effect"
                                    onclick="ejo();">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div style="background-color: yellow">
                        <h4>Listado de mierda</h4>
                        <ul id="listado">
                        </ul>
                    </div>
                </div>
            </div>
        </form>


    </div>


    <script src="{{ asset('js/hhh.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
</body>

</html>
