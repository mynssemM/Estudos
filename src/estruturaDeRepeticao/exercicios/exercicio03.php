<?php

namespace Mucilon\Course\estruturaDeRepeticao\exercicios;

//exercicio 03

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = count($arr);

while ($i < 100) {
    $i += 10;
    if ($i == 30) {
        echo "pulando execução do numero $i <br>";
        continue;
    }
    if ($i == 40) {
        echo "pulando execução do numero $i <br>";
        continue;
    }
    echo "$i <br>";
}
