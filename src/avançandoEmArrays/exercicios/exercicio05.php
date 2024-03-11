<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

$cor = "azul";
$tipo = "planta";
$habitat = "floresta";
$existentes = 20;

$especie = compact("cor", "tipo", "habitat", "existentes");

foreach ($especie as $i => $value) {
    echo "$especie[$i] <br>";
}
