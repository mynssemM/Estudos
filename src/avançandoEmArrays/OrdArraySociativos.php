<?php

namespace Mucilon\Course\avançandoEmArrays;

// Ordenação de arrays associativos

$arr = [
    'gabriel' => 17,
    'pedro' => 18,
    'lucas' => 19,
    'luis' => 20
];

asort($arr);

print_r($arr);
echo "<br>";


$arr2 = [
    'gabriel' => 29,
    'pedro' => 17,
    'lucas' => 19,
    'luis' => 20
];

arsort($arr2);

print_r($arr2);
echo "<br>";

//ordem crescente pelas chaves

ksort($arr2);

print_r($arr2);
echo "<br>";

//ordem decrecente pelas chaves

krsort($arr2);

print_r($arr2);
echo "<br>";
