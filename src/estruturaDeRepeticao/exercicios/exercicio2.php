<?php

namespace Mucilon\Course\estruturaDeRepeticao\exercicios;

//exercicio 02 while

$x = 4;
while ($x < 30) {

    echo $x . "<br>";
    if ($x === 24) {
        echo "terminando o loop <br>";
        break;
    }
    $x += 2;
}
