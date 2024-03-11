<?php

namespace Mucilon\Course\avançandoEmArrays;


// reduce em arrays

$arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

function sla($a, $b)
{
    return $a - $b;
}

$result = array_reduce($arr, "sla");

echo "$result <br>";
