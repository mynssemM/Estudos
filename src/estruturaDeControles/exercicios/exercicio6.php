<?php

namespace Mucilon\Course\estruturaDeControles\exercicios;

// if aninhado exercicio 6

$a = 10;
$b = "teste";
$c = 20;
$d = "exercicio6";

if (is_numeric($a)) {
    $a *= 2;
    $mult = $a;
    echo $mult;

    if ($mult > 100) {
        echo "maior que 100";
    } else {
        echo "menor que 100";
    }
}
