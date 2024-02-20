<?php

namespace Mucilon\Course\estruturaDeRepeticao\exercicios;

//exercicio 01 while

$arr = [10, "Gabriel", 90, "pedro", "raul", 29, false, "java é ruim"];

$x = count($arr);
$y = 0;
while ($y < $x) {
    if (is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }
    ++$y;
}
