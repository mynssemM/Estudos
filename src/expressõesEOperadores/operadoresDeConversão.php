<?php

namespace Mucilon\Course\expressõesEOperadores;

//Operadores de conversão

$a = (int) "12";

var_dump($a);
echo "<br>";
echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";

if ($a === 12) {
    echo "A é identico a 12 <br>";
}

$b = (float) "3.1412312312";
var_dump($b);
echo "<br>";
if (is_float($b)) {
    echo "é float";
}

$c = (string) 32;
echo "<br>";
var_dump($c);
if (is_string($c)) {
    echo "<br>";
    echo "é uma string";
}
