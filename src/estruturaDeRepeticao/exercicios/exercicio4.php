<?php

namespace Mucilon\Course\estruturaDeRepeticao\exercicios;

// exercicio 4

$arr = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
    13, 14, 15, 16, 17, 18, 19, 20
];

$count = count($arr);
for ($i = 0; $i < $count; $i++) {

    if ($i % 2 == 0) {
        echo "numeros pares $i <br>";
    }
}
