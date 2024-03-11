<?php

namespace Mucilon\Course\avançandoEmArrays;

// extract

$arr = [
    'cor' => 'vermelho',
    'lapis' => 'azul',
    'quantityLapis' => 2
];

extract($arr);

echo "$cor <br>";
echo "$lapis <br>";
echo "$quantityLapis <br>";
