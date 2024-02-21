<?php

namespace Mucilon\Course\estruturaDeRepeticao;

// loop aninhado

$i = 1;
$j = 1;
while ($i < 10) {
    echo "loop externo " . $i . "<br>";

    ++$i;
    while ($j < 5) {
        $j++;
        echo "loop interno " . $j . "<br>";
    }
    ++$i;
}

for ($i = 0; $i < 10; $i++) {
    echo "loop FOR externo $i <br>";
    for ($j = 0; $j < 10; $j++) {
        echo "loop FOR interno $i <br>";
    }
}
