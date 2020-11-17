/*var balon = {
    marca: 'nike',
    color: 'blanco',
    year: 2020
};


var myObj = new Object(),
    str = '122121',
    rand = Math.random(),
    obj = new Object();

myObj.type                 = 'Sintaxis de puntos';
myObj['fecha de creación'] 
myObj[str]                 = 'Valor de cadena';
myObj[rand]                = 'Número aleatorio';
myObj[obj]                 = 'Object';
myObj['']                  = 'Incluso una cadena vacía';

console.log(myObj);

//bucle for in
const object = { a: 1, b: 2, c: 3 };

for (const property in object) {
    console.log(`${property}: ${object[property]}`);
}

// resultado que se espera:
// "a: 1"
// "b: 2"
// "c: 3"
var objeto = {};
objeto['1'] = 'valor';
alert(objeto[1]);

var foo = { propiedad_unica: 1 }, bar = { propiedad_unica: 2 }, objeto = {};
objeto[foo] = 'valor';
alert(objeto[bar]);

const array1 = ['a', 'b', 'c'];

array1.forEach(element => console.log(element));

var triangle = { a: 1, b: 2, c: 3 };

function ColoredTriangle() {
    this.color = 'red';
}

ColoredTriangle.prototype = triangle;

var obj = new ColoredTriangle();

for (const prop in obj) {
    if (obj.hasOwnProperty(prop)) {
        console.log(`obj.${prop} = ${obj[prop]}`);
    }
}

*/
//lo hago yo


function zapatos() { }

zapatos1 = new zapatos();
zapatos2 = new zapatos();

zapatos.prototype.estado = 'nike';
console.log(zapatos1.estado);

zapatos1.estado = 'copias nike';
console.log(zapatos1.estado);

zapatos2.estado = 'copias nike';
console.log(zapatos2.estado);

console.log(Object.getPrototypeOf(zapatos1).estado);
console.log(Object.getPrototypeOf(zapatos2).estado);
console.log(zapatos1.estado);
console.log(zapatos2.estado);