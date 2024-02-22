<?php

namespace Mucilon\Course\functions\exercicios;

// exercicio 05

function parOrImpar($number)
{
    if ($number % 2 == 0) {
        echo "este numero é par";
    } else {
        echo "este numero é impar";
    }
}

parOrImpar(1);
