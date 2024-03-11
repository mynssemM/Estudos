<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

function somaElementos($arr = [1, 2, 3, 4, 5, 6])
{
    $sum = array_sum($arr);

    echo "$sum";
}

$t = somaElementos();

echo $t;
