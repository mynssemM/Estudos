<?php

namespace Mucilon\Course\avançandoEmArrays;

// foreach

$pessoa = [
    'name' => 'gabriel',
    'age' => 29,
    'profissao' => 'Programador'
];

$alexia = [
    'name' => 'alexia',
    'age' => 25,
    'profissao' => 'Eng. civil'
];

foreach ($pessoa as $carac => $value) {

    echo "$carac => $value <br>";
}


foreach ($alexia as $carac => $value) {

    echo "$carac => $value <br>";
}
