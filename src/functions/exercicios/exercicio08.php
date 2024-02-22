<?php

namespace Mucilon\Course\functions\exercicios;


function sumEvenNumbers(int $number1 = 20)
{
    $sum = 0;
    for ($i = 0; $i <= $number1; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
            echo "A soma dos pares é $sum <br>";
        }
    }
}

sumEvenNumbers();
