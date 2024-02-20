<?php

namespace Mucilon\Course\estruturaDeControles\exercicios;

function comparararNumeros($number1, $number2)
{
    if ($number1 == $number2) {
        echo "Numero 1 é igual ao numero 2";
    } elseif ($number1 > $number2) {
        echo "O primeiro número é maior.";
    } elseif ($number2 > $number1) {
        echo "O segundo número é maior.";
    }
}

echo comparararNumeros(40, 20);
