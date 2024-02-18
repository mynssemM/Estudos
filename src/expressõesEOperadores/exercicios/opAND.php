<?php

namespace Mucilon\Course\expressõesEOperadores\exercicios;

//Exercicio operador AND

$a = 15;
$b = 5;

$name1 = "João";
$systemName = "João";

$c = "teste";
$d = 1;

$e = 2;
$f = 3;

if ($a > $b && $name1 === $systemName) {
    echo "true 1 <br>";
}

if ($c > $b && $d) {
    echo "true 2 <br>";
}
if ($e == $f && $b >= $f) {
    echo "true 3 <br>";
}
