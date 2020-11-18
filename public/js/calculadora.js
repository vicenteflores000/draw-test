/*
function suma(a, b) {
    var result = a + b;
    return result;
}

function resta(q, l) {
    var rest = q - l;
    return rest;
}

function multiplicar(e, r) {
    var mult = e * r;
    return mult;
}

function dividir(g, m) {
    var div = g / m;
    return div;
}

var calculadora = {
    suma: function (a, b) {
        var sum = a + b;
        return sum;
    },
    resta: function (q, l) {
        var rest = q - l;
        return rest;
    },
    multiplicar: function (e, r) {
        var mult = e * r;
        return mult;
    },
    dividir: function (g, m) {
        var div = g / m;
        return div;
    }

}

function cal(suma, resta, multiplicar, dividir) {
    this.suma = suma;
    this.resta = resta;
    this.multiplicar = multiplicar;
    this.dividir = dividir;
}






var sumaa = new suma(2 , 5);
console.log(sumaa);

var restt = new resta(2 , 5);
console.log(restt);

var multt = new multiplicar(2 , 5);
console.log(multt);

var divv = new dividir(2 , 5);
console.log(divv);




/*
document.querySelector('#calcular2').addEventListener('click', () => {
    const a = parseInt(document.querySelector('#numero1').value);
    const b = parseInt(document.querySelector('#numero2').value);
    const tip = document.querySelector('#tipo').value;
    let r;
    if (tip == '+') {
        r = a + b;
    } else if (tip == '-') {
        r = a - b;
    } else if (tip == '*') {
        r = a * b;
    } else if (tip == '/') {
        r = a / b;
    }
    document.querySelector('#resultado').innerHTML = r;
});

//la otra calculadora
var resultado = document.getElementById('resultado');
var suma = document.getElementById('suma');
var resta = document.getElementById('resta');
var multiplicacion = document.getElementById('multiplicacion');
var division = document.getElementById('division');
var igual = document.getElementById('igual');
var uno = document.getElementById('uno');
var dos = document.getElementById('dos');
var tres = document.getElementById('tres');
var cuatro = document.getElementById('cuatro');
var cinco = document.getElementById('cinco');
var seis = document.getElementById('seis');
var siete = document.getElementById('siete');
var ocho = document.getElementById('ocho');
var nueve = document.getElementById('nueve');
var cero = document.getElementById('cero');


//Eventos del onclick
uno.onclick = function (e) {
    resultado.textContent = resultado.textContent + "1";
}
dos.onclick = function (e) {
    resultado.textContent = resultado.textContent + "2";
}
tres.onclick = function (e) {
    resultado.textContent = resultado.textContent + "3";
}
cuatro.onclick = function (e) {
    resultado.textContent = resultado.textContent + "4";
}
cinco.onclick = function (e) {
    resultado.textContent = resultado.textContent + "5";
}
seis.onclick = function (e) {
    resultado.textContent = resultado.textContent + "6";
}
siete.onclick = function (e) {
    resultado.textContent = resultado.textContent + "7";
}
ocho.onclick = function (e) {
    resultado.textContent = resultado.textContent + "8";
}
nueve.onclick = function (e) {
    resultado.textContent = resultado.textContent + "9";
}
cero.onclick = function (e) {
    resultado.textContent = resultado.textContent + "0";
}

suma.onclick = function (e) {
    a = resultado.textContent;
    operacion = "+";
    limpiar();
}
resta.onclick = function (e) {
   a = resultado.textContent;
    operacion = "-";
    limpiar();
}
multiplicacion.onclick = function (e) {
   a = resultado.textContent;
    operacion = "*";
    limpiar();
}
division.onclick = function (e) {
    a = resultado.textContent;
    operacion = "/";
    limpiar();
}
igual.onclick = function (e) {
   b = resultado.textContent;
    resolver();
}
function limpiar() {
    resultado.textContent = "";
}
function resolver() {
    var res = 0;
    switch (operacion) {
        case "+":
            res = parseFloat(a) + parseFloat(b);
            alert(res);
            break;
        case "-":
            res = parseFloat(a) - parseFloat(b);
            document.write(res)
            break;
        case "*":
            res = parseFloat(a) * parseFloat(b);
            alert(res)
            break;
        case "/":
            res = parseFloat(a) / parseFloat(b);
            alert(res)
            break;
    }
}
*/

/*Hacer un formulario html que represente una calculadora, y agrega funcionalidad JS para generar los calculos.
Restricción: debe usar objetos de Javascript


function calculadora() {
    var numeros = document.getElementById('numeross');
    var cero = parseInt(document.querySelector('cero').value)
    var uno = parseInt(document.querySelector('uno').value)
    var dos = parseInt(document.querySelector('dos').value)
    var tres = parseInt(document.querySelector('tres').value)
    var cuatro = parseInt(document.querySelector('cuatro').value)
    var cinco = parseInt(document.querySelector('cinco').value)
    var seis = parseInt(document.querySelector('seis').value)
    var siete = parseInt(document.querySelector('siete').value)
    var ocho = parseInt(document.querySelector('ocho').value)
    var nueve = parseInt(document.querySelector('nueve').value)
    //operaciones signos
    var multiplicacion = document.getElementById('multiplicacion');
    var resta = document.getElementById('resta');
    var division = document.getElementById('division');
    var igual = document.getElementById('igual');
    var suma = document.getElementById('suma');

}*/


//la otra calculadora
/*
var resultado = document.getElementById('resultado');
var suma = document.getElementById('suma');
var resta = document.getElementById('resta');
var multiplicacion = document.getElementById('multiplicacion');
var division = document.getElementById('division');
var igual = document.getElementById('igual');
var uno = document.getElementById('uno');
var dos = document.getElementById('dos');
var tres = document.getElementById('tres');
var cuatro = document.getElementById('cuatro');
var cinco = document.getElementById('cinco');
var seis = document.getElementById('seis');
var siete = document.getElementById('siete');
var ocho = document.getElementById('ocho');
var nueve = document.getElementById('nueve');
var cero = document.getElementById('cero');

//objetos




//Eventos del onclick
uno.onclick = function (e) {
    resultado.textContent = resultado.textContent + "1";
}
dos.onclick = function (e) {
    resultado.textContent = resultado.textContent + "2";
}
tres.onclick = function (e) {
    resultado.textContent = resultado.textContent + "3";
}
cuatro.onclick = function (e) {
    resultado.textContent = resultado.textContent + "4";
}
cinco.onclick = function (e) {
    resultado.textContent = resultado.textContent + "5";
}
seis.onclick = function (e) {
    resultado.textContent = resultado.textContent + "6";
}
siete.onclick = function (e) {
    resultado.textContent = resultado.textContent + "7";
}
ocho.onclick = function (e) {
    resultado.textContent = resultado.textContent + "8";
}
nueve.onclick = function (e) {
    resultado.textContent = resultado.textContent + "9";
}
cero.onclick = function (e) {
    resultado.textContent = resultado.textContent + "0";
}

suma.onclick = function (e) {
    a = resultado.textContent;
    operacion = "+";
    limpiar();
}
resta.onclick = function (e) {
    a = resultado.textContent;
    operacion = "-";
    limpiar();
}
multiplicacion.onclick = function (e) {
    a = resultado.textContent;
    operacion = "*";
    limpiar();
}
division.onclick = function (e) {
    a = resultado.textContent;
    operacion = "/";
    limpiar();
}
igual.onclick = function (e) {
    b = resultado.textContent;
    resolver();
}
function limpiar() {
    resultado.textContent = "";
}
function resolver() {
    var res = 0;
    switch (operacion) {
        case "+":
            res = parseFloat(a) + parseFloat(b);
            alert(res);
            break;
        case "-":
            res = parseFloat(a) - parseFloat(b);
            document.write(res)
            break;
        case "*":
            res = parseFloat(a) * parseFloat(b);
            alert(res)
            break;
        case "/":
            res = parseFloat(a) / parseFloat(b);
            alert(res)
            break;
    }
}*/
/*
var calculadora = {
    numeros: '',
    cero: 0,
    uno: 1,
    dos: 2,
    tres: 3,
    cuatro: 4,
    cinco: 5,
    seis: 6,
    siete: 7,
    ocho: 8,
    nueve: 9,
    multiplicar: '*',
    dividir: '/',
    sumar: '+',
    restar: '-'
};

var matt = {
    init: function () {
        onClick = "document.calculadora.ans.value+='1'"
    },
    function: {
        onClick="document.calculadora.ans.value+='2'"
    },
    function: {
        multiplicar: function () {
            onClick = "document.calculadora.ans.value+='3'"
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='4'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='5'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='6'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='7'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='8'"
                
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='9'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='+'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='-'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='*'"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value=eval(document.calculadora.ans.value)"
            }
        },
        function: {
            dividir: function () {
                onClick = "document.calculadora.ans.value+='0'"
            }
        },
    }

}
*/


var calculadora = {
    variables: function () {
        var uno = document.getElementById('1');
        var dos = document.getElementById('2');
        var tres = document.getElementById('3');
        var cuatro = document.getElementById('4');
        var cinco = document.getElementById('5');
        var seis = document.getElementById('6');
        var siete = document.getElementById('7');
        var ocho = document.getElementById('8');
        var nueve = document.getElementById('9');
        var cero = document.getElementById('0');
        var resultado = document.getElementById('resultadoo');
        var suma = document.getElementById('+');
        var resta = document.getElementById('-');
        var multiplicacion = document.getElementById('*');
        var division = document.getElementById('/');
        var igual = document.getElementById('=');

        uno.onclick = function (e) {
            resultado.textContent = resultado.textContent + "1";
        }
        dos.onclick = function (e) {
            resultado.textContent = resultado.textContent + "2";
        }
        tres.onclick = function (e) {
            resultado.textContent = resultado.textContent + "3";
        }
        cuatro.onclick = function (e) {
            resultado.textContent = resultado.textContent + "4";
        }
        cinco.onclick = function (e) {
            resultado.textContent = resultado.textContent + "5";
        }
        seis.onclick = function (e) {
            resultado.textContent = resultado.textContent + "6";
        }
        siete.onclick = function (e) {
            resultado.textContent = resultado.textContent + "7";
        }
        ocho.onclick = function (e) {
            resultado.textContent = resultado.textContent + "8";
        }
        nueve.onclick = function (e) {
            resultado.textContent = resultado.textContent + "9";
        }
        cero.onclick = function (e) {
            resultado.textContent = resultado.textContent + "0";
        };

        suma.onclick = function (e) {
            a = resultado.textContent;
            operacion = "+";
            limpiar();
        }
        resta.onclick = function (e) {
            a = resultado.textContent;
            operacion = "-";
            limpiar();
        }
        multiplicacion.onclick = function (e) {
            a = resultado.textContent;
            operacion = "*";
            limpiar();
        }
        division.onclick = function (e) {
            a = resultado.textContent;
            operacion = "/";
            limpiar();
        }
        igual.onclick = function (e) {
            b = resultado.textContent;
            resolver();
        }
        function limpiar() {
            resultado.textContent = "";
        }
        function resultado() {
            var res = 0;
            switch (operacion) {
                case "+":
                    res = parseFloat(a) + parseFloat(b);
                    alert(res);
                    break;
                case "-":
                    res = parseFloat(a) - parseFloat(b);
                    document.write(res)
                    break;
                case "*":
                    res = parseFloat(a) * parseFloat(b);
                    alert(res)
                    break;
                case "/":
                    res = parseFloat(a) / parseFloat(b);
                    alert(res)
                    break;
            }
        }
    }
};


