<?php

namespace Mucilon\Course\functions\exercicios;

// exercicio 13

function sumDigits($number)
{
    $sum = 0;

    while ($number != 0) {
        if ($number < 10) {
            $sum += $number;
            $number = 0;
        } else {
            $lastDigit = ($number % 10);
            $sum += $lastDigit;
            $number = intdiv($number, 10);
        }
    }

    return $sum;
}



echo sumDigits(23);
