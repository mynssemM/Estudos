<?php

namespace Mucilon\Course\expressõesEOperadores;

// Operador de igualdade

if( 3 == 3) {
    echo "comparação veradadeira 1 <br>";
}
if( 3 == 4) {
    echo "comparação veradadeira 2 <br>";
}

$a = 12;
$b = 12;
$c = 100;


if($a == $b) {
    echo "comparação veradadeira 3 <br>";
}
if($a == $c) {
    echo "comparação veradadeira 4 <br>";
}

$nome  = "joão";
$systemName = "Gabriel";

/* aqui o nome está passando pois é um erro em nosso codigo
pois usamos o operador de atribuição que é o "=", caso queiramos
que isso seja resolvido devemos usar o operador de igualdade que é o
"==", tomar cuidado ao usar o operado "=" dentro do if
*/

if ($nome == $systemName) {
    echo "permissão concedida <br>";
}
//fez uma atribuição
if ($nome = $systemName) {
    echo "permissão concedida 2 <br>";
}