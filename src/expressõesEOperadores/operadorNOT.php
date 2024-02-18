<?php

namespace Mucilon\Course\expressõesEOperadores;

// Operador Logico NOT

if (!(5 > 2)) { // true virou false
    echo "op1";
}
if (!(5 < 2)) { // false virou true
    echo "op2";
}

$a = 10;
$b = 20;

if (!($a < $b)) {
    echo "op3";
}
