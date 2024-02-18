<?php

namespace Mucilon\Course\expressõesEOperadores;

// Operador OR

if (5 > 2 || 3 < 4) {
    echo "op1 <br>";
}
if (5 > 2 || 30 < 4) { // true e true
    echo "op2 <br>";
}
if (5 > 20 || 3 < 4) { // false e true
    echo "op3 <br>";
}
if (5 > 20 || 30 < 4) { // false e false
    echo "op4 <br>";
}

//variaveis

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if ($a > $b || $d > $c) { // false e true
    echo "op5 <br>";
}
if (($a > $b || $d > $c) && $c < $d) {
    echo "op6 <br>";
}
if (($a > $b && $d < $c) || $c < $d) {
    echo "op7 <br>";
}
