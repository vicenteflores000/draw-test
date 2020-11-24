
//funcion con argumentos o parametros
function myFunction(a, b) {
    //console.log(a * b);
}
var x = myFunction(4, 3);
//funcion basica

function mensaje(msj) {
    // console.log(msj)
};
var msj = "variablemsj"
mensaje(msj);

//funcion return

function re() {
    return "funciono el return";
};

var aa = re();
//console.log(aa)

//funciones recursivas

var fact = function (n) {
    if ((n == 1) || (n == 0))
        return 1;
    else
        return (n * fact(n - 1));
}
//console.log(fact(5));

//arreglos

//var nombre = ['gnabry', 'kimmich', 'muller', 'lewandowski'];
//var dia = new Array('lunes', 'martes', 'miercoles', 'jueves');

//console.log(nombre[2]);
//console.log(dia[2]);

//nombre[0] = 'sule';
//dia[1] = 'domingo';

//console.log(nombre[0]);
//console.log(dia[1]);
//console.log(nombre);
//nombre.push('sane'); //agrega un nuevo elemento al array
//console.log(nombre);
//nombre.unshift('tolisso') //agrega un elemento al array
//console.log(nombre);
//nombre.splice(1, 2); //selecciona uno o varios de los elementos de el array
//document.write(nombre);

//nombre.forEach(function (elemento, indice) {
    // console.log(elemento, indice); //muestra el listado junto con su numero o indice
//})



//texto.search(palabra.toString());

//buscar un numero en texto
//como ocupar filter
let numeroarray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
let newnumeroarray = numeroarray.filter(item => {
    return item > 5
})
//console.log('numeroarray =>', numeroarray)
//console.log('newnumeroarray =>', newnumeroarray)
// como ocupar bien join
var x = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
var y = x.join("+");
//console.log(y);
//para que sirve split
var x = "1,2,3,4,5,6,7,8,9,10"
//console.log(typeof (x));
x = x.split(",");
//console.log(x)
//como ocupar map
const myarray = [3, 5, 1];
const nuevoarray = myarray.map(function (current) {
    return current * 2;
});
//console.log('map', nuevoarray);

//inicio de buscador de numeros


function getNumbersInString(buscador) {
    var divtexto = buscador.split("");
    var arreglonuevo = divtexto.map(function (current) {
        if (!isNaN(parseInt(current))) {
            return current;
        }
    });

    var numeros = arreglonuevo.filter(function (value) {
        return value != undefined;
    });

    return numeros.join("");
};
//current es el nombre de la funcion no se te olvide

var texto1 = "dk2ls3akd2";
var texto2 = "jdsajdsa4jdsasj";
var texto3 = "djaksdj3 dskj12 ad2";
//console.log(getNumbersInString(texto1));
//console.log(getNumbersInString(texto2));
//console.log(getNumbersInString(texto3));

/*

let cadena = "Este era un gato con los pies de trapo";

let termino = "gato";*/
/*
let posicion = cadena.indexOf(termino);
if (posicion !== -1)
    console.log("La palabra está en la posición " + posicion);
else
    console.log("No encontré lo que estás buscando");*/


var objeto = {
    calculadora: function (num, signo, num2) {
        let resultado = 0;
        switch (signo) {
            case "+":
                resultado = num + num2;
            case "-":
                resultado = num - num2;
            case "*":
                resultado = num * num2;
            case "/":
                resultado = num / num2;
        }
        return resultado;
    },

    contarvocales: function (texto) {
        var contadorvocales = 0;
        var vocales = ['a', 'e', 'i', 'o', 'u'];
        for (var i = 0; i < texto.length; ++i) {
            if (vocales.indexOf(texto[i]) >= 0) {
                ++contadorvocales;
            }
        }
        return contadorvocales;
    },

    buscadorPalabra: function (texto, cadena) {
        var posicion = cadena.indexOf(texto);
        var contador = 0;
        while (posicion >= 0) {
            contador++;
            cadena = cadena.slice(0, posicion) + "&%&/#$" + cadena.slice(posicion + texto.length);
            posicion = cadena.indexOf(texto);
        }
        return contador;
    }
};

var operacion = objeto.calculadora(7, "-", 4);
var operacion2 = objeto.calculadora(5, "*", 5);
var operacion3 = objeto.calculadora(100, "+", 100);
var operacion4 = objeto.calculadora(100, "/", 2);

var voc = (objeto.contarvocales('aaaaaaaaeeaa'));
var voc2 = (objeto.contarvocales('aa'));
var voc3 = (objeto.contarvocales('sssasssaass'));
var voc4 = (objeto.contarvocales('aaaaaaaaaaaaaaaaaaaaaaaaaaaa'));

var retorno = objeto.buscadorPalabra("palabra", "fsdsfd palabra asldldsa palabra");
var retorno2 = objeto.buscadorPalabra("aleman", "aleman asjksajsaka aleman sajjsaajs aleman");
var retorno3 = objeto.buscadorPalabra("bayern", "bayern sajjdsajd bayern adsjasjd bayern asjdjasd bayern");
var retorno4 = objeto.buscadorPalabra("sule", "sule sule sule sjjsjsjs sule sjsjjs sule sule sule");

console.log(objeto);


function obje(calculadora, contarvocales, buscadorPalabra) {
    this.calculadora = calculadora;
    this.contarvocales = contarvocales;
    this.buscadorPalabra = buscadorPalabra;
};

var operacion1 = new obje((operacion), (voc), (retorno));
console.log(operacion1);

var operacion2 = new obje((operacion2), (voc2), (retorno2));
console.log(operacion2);

var operacion3 = new obje((operacion3), (voc3), (retorno3));
console.log(operacion3);

var operacion4 = new obje((operacion4), (voc4), (retorno4));
console.log(operacion4);

function preciototal(precio, impuestos, cobroenvio) {
    var costoimpuestos = (1 + impuestos / 100) * precio;
    var total = costoimpuestos + cobroenvio;
    return total;
}

var preciot = preciototal(23.34, 16, 5);
var otropreciot = preciototal(15.20, 4, 5);
console.log(preciot);
console.log(otropreciot);

var partido = {
    datospartido: function datospartido(minutosconbalona, tirosarcoa, tirosarcob, tirosa, tirosb, pasescompletadosa, pasescompletadosb, paseserradosa, paseserradosb, equipo1, equipo2, golesa, golesb) {
        var posesiona = 90 - minutosconbalona;
        var precisiontirosa = tirosarcoa / tirosa;
        var totalprectira = 100 / precisiontirosa;
        var precisiontirosb = tirosarcob / tirosb;
        var totalprectirb = 100 / precisiontirosb;
        var precisionpasesa = pasescompletadosa / paseserradosa;
        var totalprecpasa = 100 / precisionpasesa;
        var precisionpasesb = pasescompletadosb / paseserradosb;
        var totalprecpasb = 100 / precisionpasesb;
        var minutosjugados = 90
        var partido = "";
        var posesion = "";
        var tiros = "";
        var pases = "";
       

        if (minutosjugados == 90 && golesa > golesb) {
            partido = ("| Partido de Champions " + equipo1 + " VS " + equipo2+ " | ")
            posesion = ("Posesion de " + equipo1 + " " + posesiona + "% " + " / " + minutosconbalona + "% " + "Posesion de " + equipo2 + " | ");
            tiros = ("precision de tiros de " + equipo1 + " " + Math.trunc(totalprectira) + "%" + " / " + Math.trunc(totalprectirb) + "% " + "precision de tiros de " + equipo2 + " | ");
            pases = ("la precision de pases de " + equipo1 + " fue " + Math.trunc(totalprecpasa) + "%" + " / " + Math.trunc(totalprecpasb) + "% " + " | ");
            var ganador = ("El ganador es " + equipo1 + " marcando " + golesa + " goles " + "Y pierde " + equipo2 + " marcando " + golesb + " goles|");
            var res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            return res;
        } else (golesa < golesb); {
            partido = ("| Partido de Champions " + equipo1 + " VS " + equipo2 + " | ")
            posesion = ("Posesion de " + equipo1 + " " + posesiona + "% " + " / " + minutosconbalona + "% " + "Posesion de " + equipo2);
            tiros = ("precision de tiros de " + equipo1 + " " + Math.trunc(totalprectira) + "%" + " / " + Math.trunc(totalprectirb) + "% " + "precision de tiros de " + equipo2);
            pases = ("la precision de pases de " + equipo1 + " fue " + Math.trunc(totalprecpasa) + "%" + " / " + Math.trunc(totalprecpasb) + "% ");
            var ganador = ("El ganador es " + equipo2 + " marcando " + golesa + " goles " + "Y pierde " + equipo1 + " marcando " + golesb + " goles|");
            var res = (partido + " " + posesion + " " + tiros + " " + pases + " " + ganador);
            return res;
        }
    }
};
function partidos(datospartido) {
    this.datospartido = datospartido;
};

var bayernvsbarca = partido.datospartido(60, 10, 5, 5, 3, 50, 25, 8, 14, "Bayern Munich", "Barca", 8, 2);

var bayernvspsg = partido.datospartido(55, 7, 4, 3, 2, 44, 35, 12, 14, "Bayern Munich", "PSG", 1, 0);

var partido1 = new partidos(bayernvsbarca);
console.log(partido1);
var partido2 = new partidos(bayernvspsg);
console.log(partido2);


