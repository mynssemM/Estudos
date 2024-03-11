<?php

namespace Mucilon\Course\avançandoEmArrays;

//Numero de elementos COUNT

$arr = [1, 2, 3];


echo count($arr) . "<br>";

$arr2 = range(1, 10);
echo count($arr2) . "<br>";

$arr3 = [
    'Nome' => 'Gabriel',
    'Idade' => 18,
    'profissão' => 'Software enginner'
];

echo count($arr3) . "<br>";
