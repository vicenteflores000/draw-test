
function as(a, b) {
    if (a >= b) {
        var c = a;
        a = b;
        b = c;
    }
    console.log(a);
    console.log(b);
}

as(3, 6);
as(8, 9);

function letraa(texto) {
    var resultado = texto.search('a');
    console.log(resultado);
}

letraa("0123a5a78a")


var numero1 = 5;
var numero2 = 8;
if (5 >= 8) {
    console.log("numero1 no es mayor que numero2");
}
if (numero2 >= 0) {
    console.log("numero2 es positivo");
}
if (numero1 < 0 && numero1 != 0) {
    console.log("numero1 es negativo o distinto de cero");
}
if (numero1++) {
    console.log("Incrementar en 1 unidad el valor de numero1 no lo hace mayor o igual que numero2");
}

//Escribir el código de una función a la que se pasa como parámetro un número entero 
//y devuelve como resultado una cadena de texto que indica si el número es par o impar. Mostrar por pantalla el resultado devuelto por la función.

function xd(a, b) {
    if (a != b) {
        console.log("inpar");
    } else if (q) {
    }
}
xd(8, 5)
var nombres = ["juan", "tito", "pepe"];
nombres.forEach(element => {
    console.log(element)
});

function matii() {
    var numero = parseInt(document.getElementById('numero').value);
    console.log(numero);
    var mensaje = document.getElementById('mensaje');
    switch (numero) {
        case 1:
            mensaje.innerHTML = "pendiente";
            return;
            break;
        case 2:
            mensaje.innerHTML = "aprobado";
            return;
            break;
        case 3:
            mensaje.innerHTML = "rechazado";
            return;
            break;
        case 4:
            mensaje.innerHTML = "al dia";
            return;
            break;
        case 5:
            mensaje.innerHTML = "otro";
            return
            break;
        default:
    }
}


function paho() {
    var checkbox = document.getElementById('check1');
    if (checkbox.checked) {
        document.getElementById("tvehiculo").removeAttribute('disabled', true);
        document.getElementById("an").removeAttribute('disabled', true);
        document.getElementById("marc").removeAttribute('disabled', true);
        document.getElementById("col").removeAttribute('disabled', true);
    } else {
        document.getElementById('tvehiculo').setAttribute('disabled', true);
        document.getElementById('an').setAttribute('disabled', true);
        document.getElementById('marc').setAttribute('disabled', true);
        document.getElementById('col').setAttribute('disabled', true);
    }
}

function paha() {
    var checkbox = document.getElementById('check2');
    if (checkbox.checked) {
        document.getElementById("tvehiculo").removeAttribute('disabled', true);
        document.getElementById("marc").removeAttribute('disabled', true);
    } else {
        document.getElementById("tvehiculo").setAttribute('disabled', false);
        document.getElementById("marc").setAttribute('disabled', false);
    }
}

function ejo() {
    let obj = getData();
    obj = setData(obj);


}

function setData(obj) {
    if (obj != '') {
        mensaje.innerHTML = tipo;
        mensaje.innerHTML = year;
        mensaje.innerHTML = marca;
        mensaje.innerHTML = color;
    } else (obj = ''); {
        mensaje.innerHTML = "ta malo compa"
    }
}


function getData() {
    let obj = {
        "tipo": document.getElementById("tvehiculo").value,

        "year": document.getElementById("an").value,

        "marca": document.getElementById("marc").value,

        "color": document.getElementById("col").value

    }
    if (obj.color != '') {
        color = obj.color;
        color = noseQueMierdaEs(color);
        obj.color = color;
        console.log(obj);
        return false;

    }
    mensaje.innerHTML = obj;
    return obj;
}


function noseQueMierdaEs(color) {
    switch (color) {
        case "1":
            mensaje.innerHTML = "verde";
            return color;
            break;
        case "2":
            mensaje.innerHTML = "rojo";
            return color;
            break;
        case "3":
            mensaje.innerHTML = "azul";
            return color;
            break;
        case "4":
            mensaje.innerHTML = "amarillo";
            return color;
            break;
        case "5":
            mensaje.innerHTML = "negro";
            return color;
            break;
        default:
            mensaje.innerHTML = "personalizado";
            break;
    }
}

