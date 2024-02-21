<?php

namespace Mucilon\Course\estruturaDeRepeticao;

// continue

$a = 10;

while ($a > 0) {
    echo "executando o lopp $a <br>";

    if ($a == 5 || $a == 7) {
        echo "Pulou a execução do numero $a <br>";
        $a--;
        continue;
    }
    if ($a == 2) {
        echo "termiando o loop";
        break;
    }
    --$a;
}
