<html>

<head>

</head>
<title>autos</title>

<body>
    <h3> Descuentos de autos </h3>
    <div class="card-box col-md-5">
        <select id="vehiculo">
            <option id="peugue" value="peugueot">Peugueot 306</option>
            <option id="cher" value="chery">Chery IQ</option>
        </select>
        <button type="button" class="btn btn-secondary btn-sm waves-effect" placeholder="marca" onclick="marca()">enviar</button>

    </div>





    <script src="{{ asset('js/autoss.js') }}"></script>
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
</body>

</html>
