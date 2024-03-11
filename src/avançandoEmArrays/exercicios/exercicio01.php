<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;


// exercicio 01

$arr = range(10, 45);
for ($i = 0; $i < count($arr); $i++) {
    $sum = $arr[$i] + 6;

    if ($sum > 30) {
        echo "Este numero $sum está muito grande! <br>";
    } else {
        echo "$sum <br>";
    }
}
