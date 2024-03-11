<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

/* 
Crie um array com valores: batata, maçã, pera, feijão, arroz
remova pera e feijão
*/

$arr = [
    'batata',
    'maçã',
    'pera',
    'feijão',
    'arroz'
];


$remove = array_splice($arr, 2, 2);

print_r($remove);
