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
        <div class="card-box ">
            <div class="col-md-12">
                <h3> Alineaciones : </h3>
                <div class="row">
                    <div class="card-box border-dark col-md-2">
                        <h5> Alineaciones de equipo : </h5>
                        <input type="text" id="equipoAlineacion1" placeholder="Equipo 1" disabled><br>
                        <h5> Porteria : </h5>

                        <label> Arquero : </label><br>
                        <input type="text" id="Arquero1"><br>

                        <h5> Defensa : </h5>

                        <label> Defensa Central: </label><br>
                        <input type="text" id="Central1">
                        <label> Defensa Central: </label><br>
                        <input type="text" id="CentralSegundo1">
                        <label> Lateral Derecho: </label><br>
                        <input type="text" id="LateralDerecho1">
                        <label> Lateral Izquierdo: </label><br>
                        <input type="text" id="LateralIzquierdo1">

                        <h5> Medio Campo : </h5>

                        <label> Medio Centro: </label><br>
                        <input type="text" id="MedioCentro1">
                        <label> Medio Derecho: </label><br>
                        <input type="text" id="MedioDerecho1">
                        <label> Medio Izquierdo: </label><br>
                        <input type="text" id="MedioIzquierdo1">

                        <h5> Delantera : </h5>

                        <label> Extremo Izquierdo: </label><br>
                        <input type="text" id="ExtremoIzquierdo1">
                        <label> Delantero Centro: </label><br>
                        <input type="text" id="DelanteroCentro1">
                        <label> Extremo Derecho: </label><br>
                        <input type="text" id="ExtremoDerecho1"><br>
                    </div>
                    <div class="card-box border-dark col-md-2">
                        <h5> Alineaciones de equipo : </h5>
                        <input type="text" id="EquipoAlineacion2" placeholder="equipo 2" disabled><br>
                        <h5> Porteria : </h5>

                        <label> Arquero : </label><br>
                        <input type="text" id="Arquero2"><br>

                        <h5> Defensa : </h5>

                        <label> Defensa Central: </label><br>
                        <input type="text" id="Central2">
                        <label> Defensa Central: </label><br>
                        <input type="text" id="CentralSegundo2">
                        <label> Lateral Derecho: </label><br>
                        <input type="text" id="LateralDerecho2">
                        <label> Lateral Izquierdo: </label><br>
                        <input type="text" id="LateralIzquierdo2">

                        <h5> Medio Campo : </h5>

                        <label> Medio Centro: </label><br>
                        <input type="text" id="MedioCentro2">
                        <label> Medio Derecho: </label><br>
                        <input type="text" id="MedioDerecho2">
                        <label> Medio Izquierdo: </label><br>
                        <input type="text" id="MedioIzquierdo2">

                        <h5> Delantera : </h5>

                        <label> Extremo Izquierdo: </label><br>
                        <input type="text" id="ExtremoIzquierdo2">
                        <label> Delantero Centro: </label><br>
                        <input type="text" id="DelanteroCentro2">
                        <label> Extremo Derecho: </label><br>
                        <input type="text" id="ExtremoDerecho2"><br>
                        <div class="card-box col-md-6">
                            <button type="button" class="btn btn-success" id="Guardar">Guardar Equipos</button>
                        </div>
                    </div>

                    <div class="card-box bg-success border-dark col-md-7">
                        <div class="row justify-content-start">
                            <input type="text" placeholder="Equipo 1" class="card-box border-dark col-md-2"
                                id="equipocancha1" disabled>
                        </div>
                        <div class="card-box bg-success border-light col-sm-12">
                            <div class="row justify-content-center">
                                <input type="text" class="card-box border-dark col-md-2" placeholder="Arquero"
                                    id="ArqueroV1" disabled>
                            </div><br>
                            <div class="row justify-content-center">
                                <div class="row justify-content-start">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Lateral Derecho" id="LateralDV1" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Defensa Central" id="CentralV1" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Defensa Central" id="CentralSV1" disabled>
                                </div>
                                <div class="row justify-content-end">
                                    <input type="text" class="card-box border-dark col-md-8 align-items-end"
                                        placeholder="Lateral Izquierdo" id="LateralIV1" disabled>
                                </div>
                            </div><br>
                            <br>
                            <div class="row justify-content-center">
                                <div class="row justify-content-start">
                                    <input type="text" class="card-box border-dark col-md-8" placeholder="Medio Derecho"
                                        id="MedioDV1" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8" placeholder="Medio Centro"
                                        id="MedioCV1" disabled>
                                </div>
                                <div class="row justify-content-end">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Medio Izquierdo" id="MedioIV1" disabled>
                                </div>
                            </div><br>
                            <br>
                            <div class="row justify-content-center">
                                <div class="row justify-content-start">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Extremo Derecho" id="ExtremoDV1" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Delantero Centro" id="DelanteroCV1" disabled>
                                </div>
                                <div class="row justify-content-end">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Extremo Izquierdo" id="ExtremoIV1" disabled>
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
                                        placeholder="Extremo Izquierdo" id="ExtremoIV2" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Delantero Centro" id="DelanteroCV2" disabled>
                                </div>
                                <div class="row justify-content-end">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Extremo Derecho" id="ExtremoDV2" disabled>
                                </div>
                            </div><br>
                            <br>
                            <div class="row justify-content-center">
                                <div class="row justify-content-start">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Medio Izquierdo" id="MedioIV2" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8" placeholder="Medio Centro"
                                        id="MedioCV2" disabled>
                                </div>
                                <div class="row justify-content-end">
                                    <input type="text" class="card-box border-dark col-md-8" placeholder="Medio Derecho"
                                        id="MedioDV2" disabled>
                                </div>
                            </div><br>
                            <br>
                            <div class="row justify-content-center">
                                <div class="row justify-content-start">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Lateral Izquierdo" id="LateralIV2" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Defensa Central" id="CentralV2" disabled>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="text" class="card-box border-dark col-md-8"
                                        placeholder="Defensa Central" id="CentralSV2" disabled>
                                </div>
                                <div class="row justify-content-end">
                                    <input type="text" class="card-box border-dark col-md-8 align-items-end"
                                        placeholder="Lateral Derecho" id="LateralDV2" disabled>
                                </div>
                            </div><br>
                            <br>
                            <div class="row justify-content-center">
                                <input type="text" class="card-box border-dark col-md-2" placeholder="Arquero"
                                    id="ArqueroV2" disabled>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <div class="col-md-12">
                <h3> Logros Personales : </h3>
                <div class="row">
                    <div class="card-box row justify-content-center border-dark col-md-3">
                        <div class="card">
                            <img class="card-img-top" 
                                src=https://1.bp.blogspot.com/_jUT7adYllcU/TCj_vjWkouI/AAAAAAAAAWU/sPdgjWcJqfY/s1600/holanda_vs_eslovaquia_02_28062010.jpg
                                alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Goleador del partido :</h4>
                                <div class="row justify-content-center">
                                    <input type="text" id="inputgoleador" class="border-dark" style="background-color: #58d68d" disabled><br>
                                </div>
                                <textarea class="form-control" id="tablagoleador" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-box row justify-content-center border-dark col-md-4">
                        <div class="card" style=" max-width: 66%">
                            <img class="card-img-top" 
                                src=https://www.elcolombiano.com/documents/10157/0/580x400/0c17/580d365/none/11101/IKBJ/image_content_36353501_20200913115836.jpg
                                alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Mayor asistidor del partido :</h4>
                                <div class="row justify-content-center">
                                    <input type="text" id="inputasistidor" class="border-dark" style="background-color: #58d68d" disabled><br>
                                </div>
                                <textarea class="form-control" id="tablaasistidor" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-box row justify-content-center center border-dark col-md-4">
                        <div class="card" style=" max-width: 66%">
                            <img class="card-img-top"
                                src=https://www.elcolombiano.com/documents/10157/0/580x387/0c11/580d365/none/11101/EKLJ/image_content_36353879_20200913122513.jpg
                                alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Mayor numero de entradas :</h4>
                                <div class="row justify-content-center">
                                    <input type="text" id="inputentradas" class="border-dark" style="background-color: #58d68d" disabled><br>
                                </div>
                                <textarea class="form-control" id="tablaentrador" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card-box border-dark col-md-3">
                        <h5> Goleador : </h5>
                        <label>Nombre de jugador : </label><br>
                        <input type="text" id="nombregoleador"><br>
                        <label>Numero de goles del jugador : </label><br>
                        <input type="number" id="goleador"><br>
                    </div>
                    <div class="card-box border-dark col-md-4">
                        <h5> Asistidor : </h5>
                        <label>Nombre de jugador : </label><br>
                        <input type="text" id="nombreasistidor"><br>
                        <label>Numero de asistencias del jugador : </label><br>
                        <input type="number" id="asistidor"><br>
                        <div class="row justify-content-center">
                            <div class="card-box col-md-11">
                                <button type="button" class="btn btn-success btn-block"
                                    id="guardarpersonales">Guardar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-box border-dark col-md-4">
                        <h5> Entradas : </h5>
                        <label>Nombre de jugador : </label><br>
                        <input type="text" id="nombrequita"><br>
                        <label>Numero de entradas del jugador : </label><br>
                        <input type="number" id="entrador"><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/funciones.js') }}"></script>
</body>

</html>
