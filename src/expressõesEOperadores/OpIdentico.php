<?php

namespace Mucilon\Course\expressõesEOperadores;

// operador identico a

if (5 == "5") {
    echo "5 é igual a 5, 1 <br>";
}

//Op ,de identico
if (5 === "5") {
    echo "5 é igual a 5, 2 <br>";
}

if (5 === 5) {
    echo "5 é igual a 5, 3 <br>";
}

$a = 4;
$b = 4;

if ($a === $b) {
    echo "identico";
}
