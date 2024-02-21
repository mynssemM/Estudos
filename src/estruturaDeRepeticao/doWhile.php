<?php

namespace Mucilon\Course\estruturaDeRepeticao;

// do while

$j = 0;

$name = "gabriel";

do {
    echo "testando o $j <br>";
    if ($j == 2) {
        echo "$name <br>";
    }
    $j++;
} while ($j < 10);

$i = 10;

do {
    # code...
    echo "testando o $i <br>";
    if ($i == 2) {
        echo "$name <br>";
    }
    --$i;
} while ($i > 0);
