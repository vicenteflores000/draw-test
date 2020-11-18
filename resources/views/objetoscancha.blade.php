<html>

<head>
    <title>obj canchas</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div>
        <div class="col-xl-12">
            <div class="card-box">
                <div class="row">
                    <div class="card-box col-md-4 border">
                        <h3> usuario </h3>
                        <label for="nombre">Nombre del equipo:</label><br>
                        <input type="text" class="form-control" id='nombre' placeholder="FC Bayern">
                        <label for="Integrantes"> Integrantes:</label><br>
                        <input type="number" class="form-control" id='Integrantes' placeholder="3">
                        <label for="Cambios">Cambios:</label><br>
                        <input type="number" class="form-control" id='Cambios' placeholder="6">
                        <label for="color">Color de equipación</label>
                        <select class="form-control" id="color">
                            <option>rojo</option>
                            <option>verde</option>
                            <option>azul</option>
                            <option>amarillo</option>
                            <option>blanco</option>
                            <option>negro</option>
                        </select>
                    </div>

                    <div class="card-box col-md-4 border">
                        <h2>Equipo</h2>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="card-box col-md-4 border">
                        <h2>Cambios</h2>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Joshua</td>
                                    <td>Kimmich</td>
                                    <td>joshua@hotmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <script>
                        var reserva_canchas_sistema_usuario = {
                            nombre: "lewandowski",
                            author: 5,
                            status: 2,
                            created_at: "12-11-2020 11:49"
                        };

                        function usuario(nombre, author, status, created_at) {
                            this.nombre = nombre;
                            this.author = author;
                            this.status = status;
                            this.created_at = created_at;
                        };
                        var joshua = new usuario('joshua', 7, 3, "12-11-2020 12:28");
                        console.log(joshua);

                    </script>
                    <div>
                        <script>
                            var reserva_canchas_oficina = {
                                id: 9,
                                nombre: "lewandowski",
                                author_id: 5,
                                status: 3,
                                created_at: "12-11-2020 11:49",
                                updated_at: "12-11-2020 11:49"
                            };

                            function oficina(id, nombre, author_id, status, created_at, updated_at) {
                                this.id = id;
                                this.nombre = nombre;
                                this.author_id = author_id;
                                this.status = status;
                                this.created_at = created_at;
                                this.updated_at = updated_at;
                            };
                            var muller = new oficina(9, 'muller', 2, 9, "12-11-2020 12:28", "12-11-2020 12:28");
                            console.log(muller);

                        </script>
                    </div>
                    <div>
                        <script>
                            var reserva_canchas_agenda = {
                                id: 9,
                                cliente: 78,
                                recurso_id: 123,
                                responsable_id: 124,
                                fecha: "12-11-2020",
                                hora_inicio: "11:49",
                                valor: 22.000,
                                estado: "disponible, reservado, confirmado, cancelado",
                                author_id: 5,
                                status: 6,
                                created_at: "12-11-2020 11:49",
                                updated_at: "12-11-2020 11:49"
                            };

                            function agenda(id, nombre, author_id, status, created_at, updated_at) {
                                this.nombre = nombre;
                                this.author_id = author_id;
                                this.status = status;
                                this.created_at = created_at;
                                this.updated_at = updated_at;
                            };
                            var gnabry = new agenda('gnabry', 2, 9, "12-11-2020 12:28", "12-11-2020 12:28");
                            console.log(gnabry);

                        </script>
                    </div>
                    <div>
                        <script>
                            var reserva_canchas_empresa_externo = {
                                id: 9,
                                empresa: 55,
                                rut: "11.111.111-4",
                                nombre: "lewandowski",
                                correo: "lewandowski@gmail.com",
                                celular: "+56 9 9999 9999",
                                es_cliente: 2,
                                es_proveedor: 3,
                                author_id: 65,
                                status: 6,
                                created_at: "12-11-2020 11:49",
                                updated_at: "12-11-2020 11:49"
                            };

                            function externo(id, empresa, rut, nombre, correo, celular, es_cliente, es_proveedor,
                                author_id, status,
                                created_at, updated_at) {
                                this.id = id;
                                this.empresa = empresa;
                                this.rut = rut;
                                this.nombre = nombre;
                                this.correo = correo;
                                this.celular = celular;
                                this.es_cliente = es_cliente;
                                this.es_proveedor = es_proveedor;
                                this.author_id = author_id;
                                this.status = status;
                                this.created_at = created_at;
                                this.updated_at = updated_at;
                            };
                            var sane = new externo(2, 53, "77.999.000-7", "sane", "sane@gmail.cl", "+56 9 8888 8888", 2,
                                4, 88, 1,
                                "12-11-2020 11:49", "12-11-2020 11:49");
                            console.log(sane);

                        </script>
                    </div>
                    <div>
                        <script>
                            var reserva_canchas_empresa_externo_datos_extra = {
                                id: 9,
                                key: "injs",
                                value: "asjcdsajd",
                                externo_id: 66,
                                author_id: 56,
                                status: 3,
                                created_at: "12-11-2020 11:49",
                                updated_at: "12-11-2020 11:49"
                            };

                            function extra(id, key, value, externo_id, author_id, status, created_at, updated_at) {
                                this.id = id;
                                this.key = key;
                                this.value = value;
                                this.externo_id = externo_id;
                                this.author_id = author_id;
                                this.status = status;
                                this.created_at = created_at;
                                this.updated_at = updated_at;
                            };
                            var sule = new extra(7, "sadas", "dsadsa", 88, 34, 2, "12-11-2020 11:49",
                                "12-11-2020 11:49");
                            console.log(sule);

                        </script>
                    </div>

                    <div>
                        <script>
                            const todos = {
                                reserva_canchas_sistema_usuario: function(nombre, author, status, created_at) {},
                                oficina: function(id, nombre, author_id, status, created_at, updated_at) {},
                                agenda: function(id, nombre, author_id, status, created_at, updated_at) {},
                                externo: function(id, empresa, rut, nombre, correo, celular, es_cliente,
                                    es_proveedor,
                                    author_id, status, created_at, updated_at) {},
                                extra: function(id, key, value, externo_id, author_id, status, created_at,
                                    updated_at) {}
                            };
                            console.log(todos);

                        </script>
                    </div>
                </div>

                <div class="card-box col-md-4 border">
                    <div class="col-md-12">
                        <h3>Calculadora</h3>
                    </div>
                    <div class="input-group mb-3 col-md-12">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">numero1</button>
                        </div>
                        <input type="text" class="form-control" placeholder="numero" aria-label=""
                            aria-describedby="basic-addon1" id="numero1">
                    </div>

                    <div class="input-group mb-3 col-md-12">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">numero2</button>
                        </div>
                        <input type="text" class="form-control" placeholder="numero" aria-label=""
                            aria-describedby="basic-addon1" id="numero2">
                    </div>


                    <div class="input-group mb-3 col-md-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                        </div>
                        <select class="custom-select" id="tipo">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-success" id="calcular2">Calcular</button>
                        <output id="resultado"></output>
                    </div>
                </div>
            </div>


            <div class="card-box">
                <div class="row">
                    <div class="card-box col-md-4 border">
                        <div class="calculadora">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">


                                    <span class="input-group-text" id="numeross">numeros</span>


                                </div>
                                <input type="text" class="form-control" aria-label="Small"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div>
                                <td><span id="resultado"></span></td>
                            </div>
                            <div>
                                <div>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary" id="cero" value="0">0</button>
                                        <button type="button" class="btn btn-secondary" id="uno" value="1">1</button>
                                        <button type="button" class="btn btn-secondary" id="dos" value="2">2</button>
                                        <button type="button" class="btn btn-secondary" id="tres" value="3">3</button>
                                        <button type="button" class="btn btn-secondary" id="cuatro" value="4">4</button>
                                        <button type="button" class="btn btn-secondary" id="cinco" value="5">5</button>
                                        <button type="button" class="btn btn-secondary" id="seis" value="6">6</button>
                                        <button type="button" class="btn btn-secondary" id="siete" value="7">7</button>
                                        <button type="button" class="btn btn-secondary" id="ocho" value="8">8</button>
                                        <button type="button" class="btn btn-secondary" id="nueve"
                                            value="9">9</button><br>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary" id="multiplicacion">*</button>
                                        <button type="button" class="btn btn-secondary" id="resta">-</button>
                                        <button type="button" class="btn btn-secondary" id="division">/</button>
                                        <button type="button" class="btn btn-secondary" id="igual">=</button>
                                        <button type="button" class="btn btn-secondary" id="suma">+</button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                Hacer un formulario html que represente una calculadora, y agrega funcionalidad JS para generar los
                calculos.
                Restricción: debe usar objetos de Javascript


                <div class="card-box">
                    <div class="row">
                        <div class="card-box col-md-2 border border-dark p-3 mb-2 bg-primary text-white">
                            <form name="calculator">
                                <h3>Calculadora</h3>
                                <div>
                                    <div>
                                        <input type="textfield" name="ans" value="" id="resultadoo">
                                    </div><br>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary" id="0" value="0">0</button>
                                        <button type="button" class="btn btn-secondary" id="1" value="1">1</button>
                                        <button type="button" class="btn btn-secondary" id="2" value="2">2</button>
                                        <button type="button" class="btn btn-secondary" id="3" value="3">3</button>
                                        <button type="button" class="btn btn-secondary" id="4" value="4">4</button>
                                    </div><br>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary" id="5" value="5">5</button>
                                        <button type="button" class="btn btn-secondary" id="6" value="6">6</button>
                                        <button type="button" class="btn btn-secondary" id="7" value="7">7</button>
                                        <button type="button" class="btn btn-secondary" id="8" value="8">8</button>
                                        <button type="button" class="btn btn-secondary" id="9" value="9">9</button>
                                    </div>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary" id="*">*</button>
                                    <button type="button" class="btn btn-secondary" id="-">-</button>
                                    <button type="button" class="btn btn-secondary" id="/">/</button>
                                    <button type="button" class="btn btn-secondary" id="=">=</button>
                                    <button type="button" class="btn btn-secondary" id="+">+</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script src="{{ asset('js/calculadora.js') }}"></script>
                <script src="{{ asset('js/funcionesmat.js') }}"></script>
                <script src="{{ asset('js/canchafunciones.js') }}"></script>
</body>

</html>
