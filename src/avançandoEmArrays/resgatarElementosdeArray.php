<?php

namespace Mucilon\Course\avançandoEmArrays;

//resgatar elementos de array
// removendo elementos de array array_splice

$arr = [1, 2, 3, 4, 5, 6];

$remover = array_splice($arr, 1, 2);

print_r($arr);
echo "<br>";

print_r($remover);
echo "<br>";

$arr2 = [1, 2, 3, 4, 5, 6];

$remover2 = array_splice($arr, 3);

print_r($arr2);
echo "<br>";

print_r($remover2);
echo "<br>";

$arr3 = [1, 2, 3, 4, 5, 6];

$remover3 = array_splice($arr, 1, -1);

print_r($arr3);
echo "<br>";

print_r($remover3);
echo "<br>";
