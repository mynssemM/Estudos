<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

// exercicio 02

$arr = [
    [2, 3, 4, 5],
    [5, 6, 7, 8],
    [8, 9, 10, 11]
];

for ($i = 0; $i < count($arr); $i++) {
    echo "imprimindo array externo: " . ($i + 1) . "<br>";

    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "<br>";
    }
}
