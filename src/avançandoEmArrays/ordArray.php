<?php

namespace Mucilon\Course\avançandoEmArrays;

// Ordenação de arrays

$arr = [2, 1, 334, 32, 123, 65, 38, 999999999, 1921];

sort($arr);

print_r($arr);
echo "<br>";

$arr2 = [2, 1, 334, 32, 123, 65, 38, 999999999, 1921];

rsort($arr2);

print_r($arr2);
echo "<br>";

$nomes = ['gabriel', 'pedro', 'lucas', 'daniel', 'luis', 'alberto'];

sort($nomes);

print_r($nomes);
echo "<br>";
