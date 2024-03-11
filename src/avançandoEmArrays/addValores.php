<?php

namespace Mucilon\Course\avançandoEmArrays;

// adicionando valores

$arr = [];

// adicionando valores
print_r($arr);
echo "<br>";

$arr[0] = 10;

print_r($arr);
echo "<br>";

$arr[1] = 15;

print_r($arr);
echo "<br>";

$arr[5] = 35;

print_r($arr);
echo "<br>";

// modificar valores

$arr[1] += 55;

print_r($arr);
echo "<br>";

// adicionar valores array associativos
$arrAssoc = [];
print_r($arrAssoc);
echo "<br>";

$arrAssoc['Carro'] = 'bmw';

print_r($arrAssoc);
echo "<br>";

$arrAssoc['Avião'] = 'boing';

print_r($arrAssoc);
echo "<br>";

// modificar valores

$arrAssoc['Carro'] = 'ferrari';

print_r($arrAssoc);
echo "<br>";
