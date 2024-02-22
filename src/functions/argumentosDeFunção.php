<?php

namespace Mucilon\Course\functions;

// argumentos de função

function sum($a, $b): int
{

    print_r(func_get_args());
    echo ("<br>" . func_num_args() . "<br>");

    return $a + $b;
}

sum(2, 4);
