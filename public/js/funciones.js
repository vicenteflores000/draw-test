
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
        var partido = "Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre;
        var posesion = ("Posesion de " + equipoA.nombre + " es de un " + Math.trunc(equipoA.posesion) + "% " + " y la de " + equipoB.nombre + " es de " + Math.trunc(equipoB.posesion) + "%");
        var tiros = ("precision de tiros de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + "precision de tiros de " + equipoB.nombre);
        var pases = ("la precision de pases de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
        var ganador = ("El ganador es " + equipoA.nombre + " marcando " + equipoA.goles + " goles " + "Y pierde " + equipoB.nombre + " marcando " + equipoB.goles + " goles");
        var nombreaform = equipoA.nombre;
        var nombrebform = equipoB.nombre;
        res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);

        if (golesa < golesb) {
            partido = ("Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre);
            posesion = ("Posesion de " + equipoA.nombre + " es de un " + Math.trunc(equipoA.posesion) + "% " + " y la de " + equipoB.nombre + " es de " + Math.trunc(equipoB.posesion) + "%");
            tiros = ("precision de tiros de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + "precision de tiros de " + equipoB.nombre);
            pases = ("la precision de pases de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
            ganador = ("El ganador es " + equipoB.nombre + " marcando " + equipoB.goles + " goles " + "Y pierde " + equipoA.nombre + " marcando " + equipoA.goles + " goles ");
            res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            nombreaform = equipoA.nombre;
            nombrebform = equipoB.nombre;
        }
        if (golesa > golesb) {
            partido = ("Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre);
            posesion = ("Posesion de " + equipoA.nombre + " es de un " + Math.trunc(equipoA.posesion) + "% " + " y la de " + equipoB.nombre + " es de " + Math.trunc(equipoB.posesion) + "%");
            tiros = ("precision de tiros de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + "precision de tiros de " + equipoB.nombre);
            pases = ("la precision de pases de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
            ganador = ("El ganador es " + equipoA.nombre + " marcando " + equipoA.goles + " goles " + "Y pierde " + equipoB.nombre + " marcando " + equipoB.goles + " goles ");
            res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            nombreaform = equipoA.nombre;
            nombrebform = equipoB.nombre;
        } if (golesa === golesb) {
            partido = ("Partido de Champions " + equipoA.nombre + " VS " + equipoB.nombre);
            posesion = ("Posesion de " + equipoA.nombre + " es de un " + equipoA.posesion + "% " + " y la de " + equipoB.nombre + " es de " + equipoB.posesion + "%");
            tiros = ("precision de tiros de " + equipoA.nombre + " " + Math.trunc(equipoA.precisionTiros) + "%" + " / " + Math.trunc(equipoB.precisionTiros) + "% " + "precision de tiros de " + equipoB.nombre);
            pases = ("la precision de pases de " + equipoA.nombre + " fue " + Math.trunc(equipoA.precisionPases) + "%" + " / " + "Y la de " + equipoB.nombre + " fue de " + Math.trunc(equipoB.precisionPases) + "% ");
            ganador = ("El partido termino en empate y cada equipo marco " + equipoA.goles + " goles ");
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
    obtenerAlineacion: function (lado) {
        return {
            arquero: document.getElementById("arquero" + lado).value,
            central: document.getElementById("central" + lado).value,
            centrals: document.getElementById("centrals" + lado).value,
            laterald: document.getElementById("laterald" + lado).value,
            laterali: document.getElementById("laterali" + lado).value,
            medioc: document.getElementById("medioc" + lado).value,
            mediod: document.getElementById("mediod" + lado).value,
            medioi: document.getElementById("medioi" + lado).value,
            extremoi: document.getElementById("extremoi" + lado).value,
            delanteroc: document.getElementById("delanteroc" + lado).value,
            extremod: document.getElementById("extremod" + lado).value,
            equipos: document.getElementById("Guardar")
        }
    },
    mostrar: function (lado1,lado2) {
        document.getElementById("arquerov1").value = lado1.arquero;
        document.getElementById("centralv1").value = lado1.central;
        document.getElementById("centralsv1").value = lado1.centrals;
        document.getElementById("lateraldv1").value = lado1.laterald;
        document.getElementById("lateraliv1").value = lado1.laterali;
        document.getElementById("mediocv1").value = lado1.medioc;
        document.getElementById("mediodv1").value = lado1.mediod;
        document.getElementById("medioiv1").value = lado1.medioi;
        document.getElementById("extremoiv1").value = lado1.extremoi;
        document.getElementById("delanterocv1").value = lado1.delanteroc;
        document.getElementById("extremodv1").value = lado1.extremod;
        document.getElementById("arquerov2").value = lado2.arquero;
        document.getElementById("centralv2").value = lado2.central;
        document.getElementById("centralsv2").value = lado2.centrals;
        document.getElementById("lateraldv2").value = lado2.laterald;
        document.getElementById("lateraliv2").value = lado2.laterali;
        document.getElementById("mediocv2").value = lado2.medioc;
        document.getElementById("mediodv2").value = lado2.mediod;
        document.getElementById("medioiv2").value = lado2.medioi;
        document.getElementById("extremoiv2").value = lado2.extremoi;
        document.getElementById("delanterocv2").value = lado2.delanteroc;
        document.getElementById("extremodv2").value = lado2.extremod;
    },
    obtener: function () {
        var lado1 = this.obtenerAlineacion("1");
        var lado2 = this.obtenerAlineacion("2");
        this.mostrar(lado1, lado2);
    }
};
document.getElementById("guardar").onclick = function () {
    alineaciones.obtener();
};


