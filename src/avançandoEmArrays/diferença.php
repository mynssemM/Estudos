<?php

namespace Mucilon\Course\avançandoEmArrays;

// Diferença entre arrays

$arr = [1, 2, 3, 4];
$arr2 = [2, 4, 6];

$diff = array_diff($arr, $arr2);

print_r($diff);
echo "<br>";

$diff2 = array_diff($arr2, $arr);

print_r($diff2);
echo "<br>";

$arr3 = [8];
$diff3 = array_diff($arr2, $arr, $arr3);

print_r($diff3);
echo "<br>";
