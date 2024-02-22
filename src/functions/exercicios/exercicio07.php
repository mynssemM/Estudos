<?php

namespace Mucilon\Course\functions\exercicios;

//exercicio 07
$arr = [];


for ($i = 0; $i <= 30; $i++) {
    array_push($arr, $i);
}


//print_r($arr);

function arrayMaiorQue7($array)
{
    $arrayRetorno = [];
    for ($j = 0; $j < count($array); $j++) {

        if ($array[$j] > 7) {
            # code...
            array_push($arrayRetorno, $array[$j]);
        }
    }
    return $arrayRetorno;
}

$novoArray = arrayMaiorQue7($arr);

print_r($novoArray);
