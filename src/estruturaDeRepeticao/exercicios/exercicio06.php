<?php

namespace Mucilon\Course\estruturaDeRepeticao\exercicios;

// exercicio 6

$arr = [];

for ($i = 10; $i < 20; $i++) {
    array_push($arr, $i);
}

print_r($arr);

for ($i = 0; $i < count($arr); $i++) {
    # code...

    if ($arr[$i] % 2 != 0) {
        echo "nuemero impar: $arr[$i] <br>";
    }
}
