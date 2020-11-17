<html>

<head>


</head>

<body>
    <h3> Recuentos de goles </h3>
    <div>
        <h3> Bayern vs Barcelona </h3>
        <script>
            var goles = new Array();
            goles[0] = "muller 4'";
            goles[1] = "perisic 21'";
            goles[2] = "Gnabry 27'";
            goles[3] = "Muller 31'";
            goles[4] = "Kimmich 63'";
            goles[5] = "lewandowski 82'";
            goles[6] = "Coutinho 85'";
            goles[7] = "Coutinho 89'";

            goles.forEach(function(elemento) {
                document.write(elemento + "<br>");
            });

        </script>
    </div>
    <div>
        <h3> Bayern vs Lyon </h3>
        <script>
            var goles = new Array();
            goles[1] = "Gnabry 18'";
            goles[2] = "Gnabry 33'";
            goles[3] = "Lewandowski 82'";

            goles.forEach(function(elemento) {
                document.write(elemento + "<br>");
            });

        </script>
    </div>
    <div>
        <h3> Bayern vs Psg </h3>
        <script>
            var goles = new Array();
            goles[0] = "Coman 59'";

            goles.forEach(function(elemento) {
                document.write(elemento + "<br>");
            });

        </script>
    </div>
    <div>
        <script>
            var perro = {
                nombre: "rex",
                edad: 5,
                vivo: true
            };
            var perro2 = {
                nombre: "rocky",
                edad: 10,
                vivo: false
            };
            console.log(perro2);

        </script>
    </div>
    <div>
        <script>
            function perro(nombre, edad, vivo) {
                this.nombre = nombre;
                this.edad = edad;
                this.vivo = vivo;
            };
            var perro1 = new perro("rex", 5, true);
            console.log(perro1);
            var perro2 = new perro("tomy", 3, false)
            console.log(perro2);
        </script>
    </div>
    <div>

    </div>
    <script src="{{ asset('js/objetos.js') }}"></script>
</body>

</html>
