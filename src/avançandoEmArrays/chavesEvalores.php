<?php

namespace Mucilon\Course\avançandoEmArrays;

// chaves e valores
$carro = [
    'marca' => 'Ferrari',
    'motor' => 'V12',
    'veloMax' => 300
];

$chaves = array_keys($carro);

print_r($chaves);
echo "<br>";

$valores = array_values($carro);

print_r($valores);
echo "<br>";
