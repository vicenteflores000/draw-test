<html>

<head>

    <title>funciones</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/checkpoint.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h3 class="col-md-12">Salzburg vs Bayern</h3><br>
                            <label>Datos del partido:</label><br>
                            <label>alineación Bayern Munich:</label>
                            <script>
                                var arquero = ["Neuer"];
                                var defensas = ["Saar", "Sule", "Boateng", "Davies"];
                                var mediocampo = ["Kimmich", "Goretzka", "Muller"];
                                var delanteros = ["Gnabry", "Lewandowski", "Sane"];

                            </script>
                            <h3 class="col-md-12">Salzburg vs Bayern</h3><br>
                            <h3> Posesion </h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                    style="width: 37%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">37%</div>
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                    style="width: 1%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                    style="width: 63%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">63%</div>
                            </div>
                            <h3> Duelos ganados </h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                    style="width: 47,6%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">47,6%</div>
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                    style="width: 1%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                    style="width: 52,4%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">52,4%</div>
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
