
var Champions = {
    getEquipo: function (equipo) {
        return {
            nombre: document.getElementById("equipo" + equipo).value,
            minutosConBalon: document.getElementById("minutosconbalon" + equipo).value,
            minutos: document.getElementById("minutos").value,
            tiros: document.getElementById("tiros" + equipo).value,
            tirosArco: document.getElementById("tirosarco" + equipo).value,
            pasesCompletados: document.getElementById("pasescompletados" + equipo).value,
            pasesErrados: document.getElementById("paseserrados" + equipo).value,
            goles: document.getElementById("goles" + equipo).value,
        }
    },
    calcular: function (equipo) {
        //Posesion
        equipo.posesion = (equipo.minutosConBalon * 100) / equipo.minutos;
        //Tiros
        equipo.tirosytirosarco = (equipo.tiros / equipo.tirosArco);
        equipo.precisionTiros = (100 / equipo.tirosytirosarco);
        //Pases
        equipo.pasesCompletosYerrados = (equipo.pasesCompletados / equipo.pasesErrados);
        equipo.precisionPases = (100 / equipo.pasesCompletosYerrados);
    },
    presentar: function (equipoA, equipoB) {
        if (equipoA.goles < equipoB.goles) {
            partido = ("Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre);
            posesion = ("Posesion de " + equipoA.nombre + " es de un " + Math.trunc(equipoA.posesion) + "% " + " y la de " + equipoB.nombre + " es de " + Math.trunc(equipoB.posesion) + "%");
            tiros = ("El promedio de tiros errados de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + " fue el promedio tiros errados de " + equipoB.nombre);
            pases = ("El promedio de pases errados de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
            ganador = ("El ganador es " + equipoB.nombre + " marcando " + equipoB.goles + " goles " + "Y pierde " + equipoA.nombre + " marcando " + equipoA.goles + " goles ");
            res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            nombreaform = equipoA.nombre;
            nombrebform = equipoB.nombre;
        }
        if (equipoA.goles > equipoB.goles) {
            partido = ("Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre);
            posesion = ("Posesion de " + equipoA.nombre + " es de un " + Math.trunc(equipoA.posesion) + "% " + " y la de " + equipoB.nombre + " es de " + Math.trunc(equipoB.posesion) + "%");
            tiros = ("El promedio de tiros errados de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + " fue el promedio tiros errados de " + equipoB.nombre);
            pases = ("El promedio de pases errados de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
            ganador = ("El ganador es " + equipoA.nombre + " marcando " + equipoA.goles + " goles " + "Y pierde " + equipoB.nombre + " marcando " + equipoB.goles + " goles ");
            res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            nombreaform = equipoA.nombre;
            nombrebform = equipoB.nombre;
        } if (equipoA.goles === equipoB.goles) {
            partido = ("Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre);
            posesion = ("Posesion de " + equipoA.nombre + " es de un " + equipoA.posesion + "% " + " y la de " + equipoB.nombre + " es de " + equipoB.posesion + "%");
            tiros = ("El promedio de tiros errados de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + " fue el promedio tiros errados de " + equipoB.nombre);
            pases = ("El promedio de pases errados de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
            ganador = ("El partido termino en empate y cada equipo marco " + equipoA.goles + " goles ");
            res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            nombreaform = equipoA.nombre;
            nombrebform = equipoB.nombre;
        }
        return document.getElementById("eq").innerHTML = partido, document.getElementById("pos").innerHTML = posesion, document.getElementById("tir").innerHTML = tiros, document.getElementById("pas").innerHTML = pases, document.getElementById("Res").innerHTML = ganador,
            document.getElementById("equipoAlineacion1").value = nombreaform, document.getElementById("EquipoAlineacion2").value = nombrebform,
            document.getElementById("equipocancha1").value = nombreaform, document.getElementById("equipocancha2").value = nombrebform;
    },
    get: function () {
        var equipoA = this.getEquipo('a');
        var equipoB = this.getEquipo('b');
        this.calcular(equipoA);
        this.calcular(equipoB);
        this.presentar(equipoA, equipoB);
    }
};

document.getElementById("listo").onclick = function () {
    Champions.get();
};

var alineaciones = {
    obtenerAlineacion: function (Lado) {
        return {
            Arquero: document.getElementById("Arquero" + Lado).value,
            Central: document.getElementById("Central" + Lado).value,
            Centrals: document.getElementById("CentralSegundo" + Lado).value,
            Laterald: document.getElementById("LateralDerecho" + Lado).value,
            Laterali: document.getElementById("LateralIzquierdo" + Lado).value,
            Medioc: document.getElementById("MedioCentro" + Lado).value,
            Mediod: document.getElementById("MedioDerecho" + Lado).value,
            Medioi: document.getElementById("MedioIzquierdo" + Lado).value,
            Extremoi: document.getElementById("ExtremoIzquierdo" + Lado).value,
            Delanteroc: document.getElementById("DelanteroCentro" + Lado).value,
            Extremod: document.getElementById("ExtremoDerecho" + Lado).value,
        }
    },
    mostrar: function (Lado, Equipo) {
        document.getElementById("ArqueroV" + Equipo).value = Lado.Arquero;
        document.getElementById("CentralV" + Equipo).value = Lado.Central;
        document.getElementById("CentralSV" + Equipo).value = Lado.Centrals;
        document.getElementById("LateralDV" + Equipo).value = Lado.Laterald;
        document.getElementById("LateralIV" + Equipo).value = Lado.Laterali;
        document.getElementById("MedioCV" + Equipo).value = Lado.Medioc;
        document.getElementById("MedioDV" + Equipo).value = Lado.Mediod;
        document.getElementById("MedioIV" + Equipo).value = Lado.Medioi;
        document.getElementById("ExtremoIV" + Equipo).value = Lado.Extremoi;
        document.getElementById("DelanteroCV" + Equipo).value = Lado.Delanteroc;
        document.getElementById("ExtremoDV" + Equipo).value = Lado.Extremod;
    },
    obtener: function () {
        var Lado1 = this.obtenerAlineacion("1");
        var Lado2 = this.obtenerAlineacion("2");
        var LadoA = this.mostrar(Lado1, "1");
        var LadoB = this.mostrar(Lado2, "2");
        console.log(Lado1);
        console.log(Lado2);
    }
};
document.getElementById("Guardar").onclick = function () {
    alineaciones.obtener();
};

var Thebest = {
    tenerPersonales: function () {
        return {
            goleador: document.getElementById("goleador").value,
            asistidor: document.getElementById("asistidor").value,
            entrador: document.getElementById("entrador").value
        }
    },
    destacadosvisual: function () {
        var inputgoleador = document.getElementById("nombregoleador").value;
        var inputasistidor = document.getElementById("nombreasistidor").value;
        var inputquita = document.getElementById("nombrequita").value;

        document.getElementById("tablagoleador").value = "Realizando buenos remates al arco el jugador " + inputgoleador + " fue el maximo goleador del partido marcando " + goleador.value + " goles";
        document.getElementById("tablaasistidor").value = "Con una buena calidad de pases el jugador " + inputasistidor + " en este partido obtuvo una cantidad de " + asistidor.value + " asistencias quedando como maximo asistidor de esta jornada";
        document.getElementById("tablaentrador").value = "Obteniendo un gran desempeño defensivo el jugador " + inputquita + " logro robar el balon " + entrador.value + " veces siendo el jugador con mas entradas realizadas";

        document.getElementById("inputgoleador").value = inputgoleador;
        document.getElementById("inputasistidor").value = inputasistidor;
        document.getElementById("inputentradas").value = inputquita;
    },
};

document.getElementById("guardarpersonales").onclick = function () {
    Thebest.destacadosvisual();
};