<?php

namespace Mucilon\Course\expressõesEOperadores;

//Operador não identico a

$a = 1;
$b = "1";

if ($a != $b) {
    echo "A é diferente de B 1";
}
if ($a !== $b) {
    echo "A é diferente de B 2 <br>";
}
if (1 !== 2) {
    echo "A é diferente de B 3 <br>";
}
if (1 !== "1") {
    echo "A é diferente de B 4 <br>";
}
if ([] !== "ABC") {
    echo "A é diferente de B 4 <br>";
}
