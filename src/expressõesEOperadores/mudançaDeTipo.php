<?php

namespace Mucilon\Course\expressõesEOperadores;

// Mudança tipo implicita

echo 5 / 2;
echo '<br>';

if(is_float(5/2)) {
    echo "é float <br>";
}

echo 2 . 3;

if(is_string(2 . 3)) { // não faça pois é um erro e isto é um string
    echo '<br>';
    echo "é string <br>";

}

$nome = "Gabriel";
$sobrenome = "Mynssem";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;