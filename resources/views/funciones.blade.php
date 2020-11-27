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

                    <div class="card-box border-dark col-md-2">
                        <h5> Equipos : </h5>
                        <label> Ingrese los nombres los equipos.<label><br><br>
                                <label>Equipo A :</label><br>
                                <input type="text" id="equipoa"><br>
                                <label>Equipo B :</label><br>
                                <input type="text" id="equipob">
                    </div>


                    <div class="card-box border-dark col-md-2">
                        <h5> Posesion : </h5>
                        <label> Ingrese el numero de minutos que el equipo tuvo el balon.<label><br>
                                <label>Minutos jugados : </label><br>
                                <input type="number" id="minutos">
                                <label>Minutos con balon equipo "A" : </label><br>
                                <input type="number" id="minutosconbalona"><br>
                                <label>Minutos con balon equipo "B" : </label><br>
                                <input type="number" id="minutosconbalonb">
                    </div>


                    <div class="card-box border-dark col-md-2">
                        <h5> Precision de tiros : </h5>
                        <label> El numero de "tiros al arco" no puede ser mayor que el de "tiros".<label><br>
                                <label>Tiros equipo "A" : </label><br>
                                <input type="number" id="tirosa"><br>
                                <label>Tiros equipo "B" : </label><br>
                                <input type="number" id="tirosb"><br>
                                <label>Tiros al arco equipo "A" : </label><br>
                                <input type="number" id="tirosarcoa"><br>
                                <label>Tiros al arco equipo "B" : </label><br>
                                <input type="number" id="tirosarcob">
                    </div>


                    <div class="card-box border-dark col-md-2">
                        <h5> Precision de pases : </h5>
                        <label> El numero de "Pases errados" no puede ser mayor que el de "Pases".<label><br>
                                <label>Pases equipo "A" : </label><br>
                                <input type="number" id="pasescompletadosa"><br>
                                <label>Pases equipo "B" : </label><br>
                                <input type="number" id="pasescompletadosb"><br>
                                <label>Pases errados equipo "A" : </label><br>
                                <input type="number" id="paseserradosa"><br>
                                <label>Pases errados equipo "B" : </label><br>
                                <input type="number" id="paseserradosb">
                    </div>


                    <div class="card-box border-dark col-md-2">
                        <h5> Goles : </h5>
                        <label> Ingrese los goles marcados.<label><br><br>
                                <label>Goles equipo "A" : </label><br>
                                <input type="number" id="golesa"><br>
                                <label>Goles equipo "B" : </label><br>
                                <input type="number" id="golesb">
                    </div>

                    <div class="card-box border-dark col-md-1">
                        <h5> Enviar </h5>
                        <label> si todos los datos estan correctamente llenados por favor enviar para obtener de manera
                            detallada los datos del partido</label>
                        <button type="button" class="btn btn-success" id="listo">Listo</button>
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

                    <div class="card-box border-dark col-md-2">
                        <h5> Equipos : </h5>
                        <textarea class="form-control" id="eq" rows="5" disabled></textarea>

                    </div>
                    <div class="card-box border-dark col-md-2">
                        <h5> Posesion : </h5>
                        <textarea class="form-control" id="pos" rows="5" disabled></textarea>

                    </div>
                    <div class="card-box border-dark col-md-2">
                        <h5> Precision de tiros : </h5>
                        <textarea class="form-control" id="tir" rows="5" disabled></textarea>

                    </div>
                    <div class="card-box border-dark col-md-2">
                        <h5> Precision de pases : </h5>
                        <textarea class="form-control" id="pas" rows="5" disabled></textarea>

                    </div>
                    <div class="card-box border-dark col-md-3">
                        <h5> GANADOR : </h5>
                        <textarea class="form-control" id="Res" rows="5" disabled></textarea>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="card-box ">
                <div class="col-md-12">
                    <h3> Alineaciones : </h3>
                    <div class="row">
                        <div class="card-box border-dark col-md-2">
                            <h5> Alineaciones de equipo : </h5>
                            <input type="text" id="equipoalineacion1" placeholder="Equipo 1" disabled><br>
                            <h5> Porteria : </h5>

                            <label> Arquero : </label><br>
                            <input type="text" id="arquero1"><br>

                            <h5> Defensa : </h5>

                            <label> Defensa Central: </label><br>
                            <input type="text" id="central1">
                            <label> Defensa Central: </label><br>
                            <input type="text" id="centrals1">
                            <label> Lateral Derecho: </label><br>
                            <input type="text" id="laterald1">
                            <label> Lateral Izquierdo: </label><br>
                            <input type="text" id="laterali1">

                            <h5> Medio Campo : </h5>

                            <label> Medio Centro: </label><br>
                            <input type="text" id="medioc1">
                            <label> Medio Derecho: </label><br>
                            <input type="text" id="mediod1">
                            <label> Medio Izquierdo: </label><br>
                            <input type="text" id="medioi1">

                            <h5> Delantera : </h5>

                            <label> Extremo Izquierdo: </label><br>
                            <input type="text" id="extremoi1">
                            <label> Delantero Centro: </label><br>
                            <input type="text" id="delanteroc1">
                            <label> Extremo Derecho: </label><br>
                            <input type="text" id="extremod1"><br>
                        </div>
                        <div class="card-box border-dark col-md-2">
                            <h5> Alineaciones de equipo : </h5>
                            <input type="text" id="equipoalineacion2" placeholder="equipo 2" disabled><br>
                            <h5> Porteria : </h5>

                            <label> Arquero : </label><br>
                            <input type="text" id="arquero2"><br>

                            <h5> Defensa : </h5>

                            <label> Defensa Central: </label><br>
                            <input type="text" id="central2">
                            <label> Defensa Central: </label><br>
                            <input type="text" id="centrals2">
                            <label> Lateral Derecho: </label><br>
                            <input type="text" id="laterald2">
                            <label> Lateral Izquierdo: </label><br>
                            <input type="text" id="laterali2">

                            <h5> Medio Campo : </h5>

                            <label> Medio Centro: </label><br>
                            <input type="text" id="medioc2">
                            <label> Medio Derecho: </label><br>
                            <input type="text" id="mediod2">
                            <label> Medio Izquierdo: </label><br>
                            <input type="text" id="medioi2">

                            <h5> Delantera : </h5>

                            <label> Extremo Izquierdo: </label><br>
                            <input type="text" id="extremoi2">
                            <label> Delantero Centro: </label><br>
                            <input type="text" id="delanteroc2">
                            <label> Extremo Derecho: </label><br>
                            <input type="text" id="extremod2"><br>
                            <button type="button" class="btn btn-success" id="guardar">Guardar Equipos</button>
                        </div>
                        <div class="card-box bg-success border-dark col-md-7">
                            <div class="row justify-content-start">
                                <input type="text" placeholder="Equipo 1" class="card-box border-dark col-md-2"
                                    id="equipocancha1" disabled>
                            </div>
                            <div class="card-box  bg-success border-light col-sm-12">
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-2" placeholder="Arquero"
                                        id="arquerov1" disabled>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="row justify-content-start">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Lateral Derecho" id="lateraldv1" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Defensa Central" id="centralv1" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Defensa Central" id="centralsv1" disabled>
                                    </div>
                                    <div class="row justify-content-end">
                                        <input type="text" class="card-box border-dark col-md-8 align-items-end"
                                            placeholder="Lateral Izquierdo" id="lateraliv1" disabled>
                                    </div>
                                </div><br>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="row justify-content-start">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Medio Derecho" id="mediodv1" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Medio Centro" id="mediocv1" disabled>
                                    </div>
                                    <div class="row justify-content-end">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Medio Izquierdo" id="medioiv1" disabled>
                                    </div>
                                </div><br>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="row justify-content-start">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Extremo Derecho" id="extremodv1" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Delantero Centro" id="delanterocv1" disabled>
                                    </div>
                                    <div class="row justify-content-end">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Extremo Izquierdo" id="extremoiv1" disabled>
                                    </div>
                                </div><br>
                            </div>
                            <div class="row justify-content-start">
                                <input type="text" placeholder="Equipo 2" class="card-box border-dark col-md-2"
                                    id="equipocancha2" disabled>
                            </div>
                            <div class="card-box  bg-success border-light col-sm-12">
                                <br>
                                <div class="row justify-content-center">
                                    <div class="row justify-content-start">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Extremo Izquierdo" id="extremoiv2" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Delantero Centro" id="delanterocv2" disabled>
                                    </div>
                                    <div class="row justify-content-end">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Extremo Derecho" id="extremodv2" disabled>
                                    </div>
                                </div><br>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="row justify-content-start">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Medio Izquierdo" id="medioiv2" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Medio Centro" id="mediocv2" disabled>
                                    </div>
                                    <div class="row justify-content-end">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Medio Derecho" id="mediodv2" disabled>
                                    </div>
                                </div><br>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="row justify-content-start">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Lateral Izquierdo" id="lateraliv2" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Defensa Central" id="centralv2" disabled>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="text" class="card-box border-dark col-md-8"
                                            placeholder="Defensa Central" id="centralsv2" disabled>
                                    </div>
                                    <div class="row justify-content-end">
                                        <input type="text" class="card-box border-dark col-md-8 align-items-end"
                                            placeholder="Lateral Derecho" id="lateraldv2" disabled>
                                    </div>
                                </div><br>
                                <br>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-2" placeholder="Arquero"
                                        id="arquerov2" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/funciones.js') }}"></script>
</body>

</html>
