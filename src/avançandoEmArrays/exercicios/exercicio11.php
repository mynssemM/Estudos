<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

function ordenarNumeros($arr)
{
    $crescente = sort($arr);
    foreach ($arr as $crescente => $val) {
        echo "numeros[" . $crescente . "] = " . $val . "\n";
    }
}

echo ordenarNumeros([2193381823, 2838, 221, 11, 1, 2, 3]);
