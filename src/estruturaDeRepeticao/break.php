<?php

namespace Mucilon\Course\estruturaDeRepeticao;

//break
$x = 0;

while ($x <= 10) {

    echo "O X é $x <br>";
    if ($x === 5) {
        echo "terminando o loop <br>";
        break;
    }
    $x++;
}

echo "saiu do loop <br>";
