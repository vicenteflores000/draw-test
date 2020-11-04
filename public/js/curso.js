console.log('sentao de pana');
console.log(5 + 5);

//variables

var nombre = 'ete sech';
console.log(nombre);
console.log(typeof (nombre));

var edad = 34;
console.log(edad);
console.log(typeof (edad));

edad = 'cinco';
console.log(edad);
console.log(typeof (edad));

var sueldo = 1900.99;
console.log(sueldo);
console.log(typeof (sueldo));

var tienetrabajo = false;
console.log(tienetrabajo);
console.log(typeof (tienetrabajo))

var puestodetrabajo;
console.log(puestodetrabajo);
puestodetrabajo = null;
console.log(puestodetrabajo);

//operadores matematicos

var edadana, edadmaria, diferenciaedad;
var sumaedades, yearana, yearmaria, yearactual;

edadana = 34;
edadmaria = 28;
yearactual = 2020

diferenciaedad = edadana - edadmaria;
sumaedades = edadana + edadmaria;

yearana = yearactual - edadana;
yearmaria = yearactual - edadmaria;

console.log(diferenciaedad);
console.log(sumaedades);
console.log('año en que nacio ana' + yearana);
console.log('año en que nacio maria' + yearmaria);
console.log(yearactual * 5);
console.log(yearactual / 2);

//operadores logicos

var edadana, edadmaria, diferenciaedad;

edadana = 34;
edadmaria = 28;

var mayorana = !(edadana == edadmaria);
console.log(mayorana);

//operadores unarios ++incremento --decremento

console.log(++edadana);
console.log(edadana);

//asignación, +=, -=, *=, /=, %=
// %=, devuelve lo que sobro
var a = 12;
var b = 5;

var c = a % 5;
console.log(c);
a += b;
console.log(a);

//if else

var nombre = 'elpepe';
var escasado = false;

if (escasado == true) {
    console.log(nombre + ' es casado');
} else {
    console.log(nombre + ' es soltebrio');
}

if (edad < 12) {
    console.log(nombre + 'es un niño');
} else if ((edad > 11) && (edad < 18)) {
    console.log(nombre + 'es un adolecente');
} else if ((edad > 17) && (edad < 60)) {
    console.log(nombre + 'es un adulto');
} else {
    console.log(nombre + ' es un anciano');
}
//switch

var mes = 1;
switch (mes) {
    case 1:
        console.log('enero');
        break;
    case 2:
        console.log('febrero');
        break;
    case 3:
        console.log('marzo');
        break;
    case 4:
        console.log('abril');
        break;
    default:
        console.log('mes no encontrado');
}
//estructura for
for (var i = 1; i <= 10; i++) {
    console.log(i);
}

//estructura while y do while

var i = 10;
while (i >= 1) {
    console.log(i);
    i--;
}
//do while

var i = 11;
do {
    console.log(i);
} while (i <= 10);
console.log(i);

//arreglos
var a = 7; 
var b = 1;
if (a >= b) {
    var a = b; 
    var b = a;
    console.log(a);
    console.log(b);
}
