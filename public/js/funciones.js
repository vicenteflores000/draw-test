
//funcion con argumentos o parametros
function myFunction(a, b) {
    console.log(a * b);
}
var x = myFunction(4, 3);
//funcion basica

function mensaje(msj) {
    console.log(msj)
};
var msj = "variablemsj"
mensaje(msj);

//funcion return

function re() {
    return "funciono el return";
};

var aa = re();
console.log(aa)

//funciones recursivas

var fact = function (n) {
    if ((n == 1) || (n == 0))
        return 1;
    else
        return (n * fact(n - 1));
}
console.log(fact(5));

//arreglos

var nombre = ['gnabry', 'kimmich', 'muller', 'lewandowski'];
var dia = new Array('lunes', 'martes', 'miercoles', 'jueves');

console.log(nombre[2]);
console.log(dia[2]);

nombre[0] = 'sule';
dia[1] = 'domingo';

console.log(nombre[0]);
console.log(dia[1]);
console.log(nombre);
nombre.push('sane'); //agrega un nuevo elemento al array
console.log(nombre);
nombre.unshift('tolisso') //agrega un elemento al array
console.log(nombre);
nombre.splice(1, 2); //selecciona uno o varios de los elementos de el array
document.write(nombre);


nombre.forEach(function (elemento, indice) {
    console.log(elemento, indice); //muestra el listado junto con su numero o indice
})


var palabra = ["busca"];
var texto = "Los textos es un conjunto de signos y símbolos propios de un lenguaje propio, que, formando un código, transmiten un mensaje son sentido y significado, solamente entendible por quienes comprenden dicho código (es decir, dicho lenguaje). ... Ejemplos de textos narrativos son “Los papeles del agua” o “La sombra en busca viento”."
    ;
var resultado = "";
var pos = -1

palabra.forEach(function (element) {

    pos = texto.search(element.toString());

    if (pos != -1) {
        resultado += " Palabra " + element + " " + "encontrada en la posición " + pos;
    } if (pos === -1 && resultado === "") { resultado = false; }
    console.log(resultado);
});

//buscar un numero en texto
//como ocupar filter
let numeroarray = [1,2,3,4,5,6,7,8,9,10]
let newnumeroarray = numeroarray.filter(item => {
    return item > 5
})
console.log('numeroarray =>', numeroarray)
console.log('newnumeroarray =>', newnumeroarray)
// como ocupar bien join
var x=[1,2,3,4,5,6,7,8,9,10]
var y =x.join("+");
console.log(y);
//para que sirve split
var x="1,2,3,4,5,6,7,8,9,10"
console.log(typeof(x));
x=x.split(",");
console.log(x)
//como ocupar map
const myarray = [3,5,1];
const nuevoarray = myarray.map(function(current){
    return current * 2;
});
console.log('map', nuevoarray);

//inicio de buscador de numeros

var texto1 = "dk2ls3akd2";
var texto2 = "jdsajdsa4jdsasj";
var texto3 = "djaksdj3 dskj12 ad2";

function getNumbersInString(buscador) {
  var divtexto = buscador.split("");
  var arreglonuevo = divtexto.map(function(current) {
    if (!isNaN(parseInt(current))) {
      return current;
    }
  });

  var numeros = arreglonuevo.filter(function(value) {
    return value != undefined;
  });

  return numeros.join("");
};

console.log(getNumbersInString(texto1));
console.log(getNumbersInString(texto2)); 
console.log(getNumbersInString(texto3));
