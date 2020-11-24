<html>

<head>

    <title>funciones</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/checkpoint.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid">

        <div class="card-box">
            <div class="col-md-12">
                <h3> Datos de partido : </h3>
                <div class="row">

                    <div class="card-box col-md-2">
                        <h5> Equipos : </h5>
                        <label>Equipo A</label><br>
                        <input type="text" id="equipoa"><br>
                        <label>Equipo B</label><br>
                        <input type="text" id="equipob">
                    </div>


                    <div class="card-box col-md-2">
                        <h5> Posesion : </h5>
                        <label>Minutos con balon equipo "A" : </label><br>
                        <input type="number" id="minutosconbalona"><br>
                        <label>Minutos con balon equipo "B" : </label><br>
                        <input type="number" id="minutosconbalonb">
                    </div>


                    <div class="card-box col-md-2">
                        <h5> Precision de tiros : </h5>
                        <label>Tiros equipo "A" : </label><br>
                        <input type="number" id="tirosa"><br>
                        <label>Tiros equipo "B" : </label><br>
                        <input type="number" id="tirosb"><br>
                        <label>Tiros al arco equipo "A" : </label><br>
                        <input type="number" id="tirosarcoa"><br>
                        <label>Tiros al arco equipo "B" : </label><br>
                        <input type="number" id="tirosarcob">
                    </div>


                    <div class="card-box col-md-2">
                        <h5> Precision de pases : </h5>
                        <label>Pases completados equipo "A" : </label><br>
                        <input type="number" id="pasescompletadosa"><br>
                        <label>Pases completados equipo "B" : </label><br>
                        <input type="number" id="pasescompletadosb"><br>
                        <label>Pases errados equipo "A" : </label><br>
                        <input type="number" id="paseserradosa"><br>
                        <label>Pases errados equipo "B" : </label><br>
                        <input type="number" id="paseserradosb">
                    </div>


                    <div class="card-box col-md-2">
                        <h5> Goles : </h5>
                        <label>Goles equipo "A" : </label><br>
                        <input type="number" id="golesa"><br>
                        <label>Goles equipo "B" : </label><br>
                        <input type="number" id="golesb">
                    </div>

                    <div class="card-box col-md-1">
                        <h5> Enviar </h5>
                        <label> si todos los datos estan correctamente llenados por favor enviar para obtener de manera
                            detallada los datos del partido</label>
                        <button type="button" class="btn btn-success">Listo</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="card-box">
            <div class="col-md-12">
                <h3> Resultados del partido : </h3>
                <div class="row">

                    <div class="card-box col-md-12">
                        <h5> Resumen : </h5>
                        <textarea class="form-control" id="Res" rows="5"></textarea>
                       
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/funciones.js') }}"></script>
</body>
</html>
