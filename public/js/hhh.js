
function as(a, b) {
    if (a >= b) {
        var c = a;
        a = b;
        b = c;
    }
    console.log(a);
    console.log(b);
}

//as(3, 6);
//as(8, 9);

function letraa(texto) {
   var resultado = texto.search('a');
    console.log(resultado);
}

letraa("0123a5a78a")


