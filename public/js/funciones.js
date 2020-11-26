
var Champions = {
    getEquipo: function (equipo) {
        return {
            nombre: document.getElementById("equipo" + equipo).value,
            minutosConBalon: document.getElementById("minutosconbalon" + equipo).value,
            tiros: document.getElementById("tiros" + equipo).value,
            tirosArco: document.getElementById("tirosarco" + equipo).value,
            pasesCompletados: document.getElementById("pasescompletados" + equipo).value,
            pasesErrados: document.getElementById("paseserrados" + equipo).value,
            goles: document.getElementById("goles" + equipo).value,
        }
    },
    calcular: function (equipo) {
        //porcentajes resultados
        equipo.posesion = 90 - equipo.minutosConBalon;
        equipo.tirosytirosarco = (equipo.tiros / equipo.tirosArco);
        equipo.pasesCompletosYerrados = (equipo.pasesCompletados / equipo.pasesErrados);
        equipo.precisionTiros = (100 / equipo.tirosytirosarco);
        equipo.precisionPases = (100 / equipo.pasesCompletosYerrados);
    },
    presentar: function (equipoA, equipoB) {
        var partido = "Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre;
        var posesion = ("Posesion de " + equipoA.nombre + " es de un " + equipoA.posesion + "% " + " y la de " + equipoB.nombre + " es de " + equipoB.posesion + "%");
        var tiros = ("precision de tiros de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + "precision de tiros de " + equipoB.nombre);
        var pases = ("la precision de pases de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
        var ganador = ("El ganador es " + equipoA.nombre + " marcando " + equipoA.goles + " goles " + "Y pierde " + equipoB.nombre + " marcando " + equipoB.goles + " goles");
        var nombreaform = equipoA.nombre;
        var nombrebform = equipoB.nombre;
        res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);

        if (golesa < golesb) {
            partido = ("Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre);
            posesion = ("Posesion de " + equipoA.nombre + " es de un " + equipoA.posesion + "% " + " y la de " + equipoB.nombre + " es de " + equipoB.posesion + "%");
            tiros = ("precision de tiros de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + "precision de tiros de " + equipoB.nombre);
            pases = ("la precision de pases de " + equipoA.nombre + " fue " + Math.trunc(totalprecpasa) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
            ganador = ("El ganador es " + equipoB.nombre + " marcando " + equipoB.nombre + " goles " + "Y pierde " + equipoA.nombre + " marcando " + equipoA.goles + " goles ");
            res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            nombreaform = equipoA.nombre;
            nombrebform = equipoB.nombre;
        }
        return document.getElementById("eq").innerHTML = partido, document.getElementById("pos").innerHTML = posesion, document.getElementById("tir").innerHTML = tiros, document.getElementById("pas").innerHTML = pases, document.getElementById("Res").innerHTML = ganador,
            document.getElementById("equipoalineacion1").value = nombreaform, document.getElementById("equipoalineacion2").value = nombrebform,
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
    Alineacion: function () {
        return {
            //  formulario de alineación 1
            arquero1: document.getElementById("arquero1").value,
            central1: document.getElementById("central1").value,
            centrals1: document.getElementById("centrals1").value,
            laterald1: document.getElementById("laterald1").value,
            laterali1: document.getElementById("laterali1").value,
            medioc1: document.getElementById("medioc1").value,
            mediod1: document.getElementById("mediod1").value,
            medioi1: document.getElementById("medioi1").value,
            extremoi1: document.getElementById("extremoi1").value,
            delanteroc1: document.getElementById("delanteroc1").value,
            extremod1: document.getElementById("extremod1").value,
            //  formulario de alineación 2
            arquero2: document.getElementById("arquero2").value,
            central2: document.getElementById("central2").value,
            centrals2: document.getElementById("centrals2").value,
            laterald2: document.getElementById("laterald2").value,
            laterali2: document.getElementById("laterali2").value,
            medioc2: document.getElementById("medioc2").value,
            mediod2: document.getElementById("mediod2").value,
            medioi2: document.getElementById("medioi2").value,
            extremoi2: document.getElementById("extremoi2").value,
            delanteroc2: document.getElementById("delanteroc2").value,
            extremod2: document.getElementById("extremod2").value,
            //  botones enviar
            equipos: document.getElementById("Guardar").value,
            //  visual cancha equipo 1
            arquerov1: document.getElementById("arquerov1").value,
            centralv1: document.getElementById("centralv1").value,
            centralsv1: document.getElementById("centralsv1").value,
            lateraldv1: document.getElementById("lateraldv1").value,
            lateraliv1: document.getElementById("lateraliv1").value,
            mediocv1: document.getElementById("mediocv1").value,
            mediodv1: document.getElementById("mediodv1").value,
            medioiv1: document.getElementById("medioiv1").value,
            extremoiv1: document.getElementById("extremoiv1").value,
            delanterocv1: document.getElementById("delanterocv1").value,
            extremodv1: document.getElementById("extremodv1").value,
            //  visual cancha equipo 2
            arquerov2: document.getElementById("arquerov2").value,
            centralv2: document.getElementById("centralv2").value,
            centralsv2: document.getElementById("centralsv2").value,
            lateraldv2: document.getElementById("lateraldv2").value,
            lateraliv2: document.getElementById("lateraliv2").value,
            mediocv2: document.getElementById("mediocv2").value,
            mediodv2: document.getElementById("mediodv2").value,
            medioiv2: document.getElementById("medioiv2").value,
            extremoiv2: document.getElementById("extremoiv2").value,
            delanterocv2: document.getElementById("delanterocv2").value,
            extremodv2: document.getElementById("extremodv2").value,
        }
    },
    mostrar: function () {
        return document.getElementById("arquerov1").value = arquero1.value,
            document.getElementById("centralv1").value = central1.value, document.getElementById("centralsv1").value = centrals1.value, document.getElementById("lateraldv1").value = laterald1.value, document.getElementById("lateraliv1").value = laterali1.value,
            document.getElementById("mediocv1").value = medioc1.value, document.getElementById("mediodv1").value = mediod1.value, document.getElementById("medioiv1").value = medioi1.value,
            document.getElementById("extremoiv1").value = extremoi1.value, document.getElementById("delanterocv1").value = delanteroc1.value, document.getElementById("extremodv1").value = extremod1.value,
            //equipo2
            document.getElementById("arquerov2").value = arquero2.value,
            document.getElementById("centralv2").value = central2.value, document.getElementById("centralsv2").value = centrals2.value, document.getElementById("lateraldv2").value = laterald2.value, document.getElementById("lateraliv2").value = laterali2.value,
            document.getElementById("mediocv2").value = medioc2.value, document.getElementById("mediodv2").value = mediod2.value, document.getElementById("medioiv2").value = medioi2.value,
            document.getElementById("extremoiv2").value = extremoi2.value, document.getElementById("delanterocv2").value = delanteroc2.value, document.getElementById("extremodv2").value = extremod2.value;
    },
};
document.getElementById("guardar").onclick = function () {
    alineaciones.mostrar();
};


