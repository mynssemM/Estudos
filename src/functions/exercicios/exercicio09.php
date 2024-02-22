<?php

namespace Mucilon\Course\functions\exercicios;

function defineCorCarro($model, $color = "vermelha"): string
{
    return "Seu modelo é $model e sua cor é $color <br>";
}

$z = defineCorCarro("Fiat uno");
$y = defineCorCarro("Fiat uno", "preta");
echo $z;
echo $y;
