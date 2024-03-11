<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;


function encontrarPares($arr)
{
    foreach ($arr as $valueArr => $value) {
        if ($valueArr % 2 == 0) {
            echo " $valueArr";
        }
    }
}

$z = encontrarPares([2, 3, 4, 5, 6, 7, 8]);

echo "$z <br>";
