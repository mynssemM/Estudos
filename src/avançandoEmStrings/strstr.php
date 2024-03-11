<?php

namespace Mucilon\Course\avançandoEmStrings;


$str = "testando o resto da string, para ver se da certo";

$rest = strstr($str, "resto");

echo "$rest <br>";

$s = "string";

$rest = strstr($str, $s);

echo "$rest <br>";

if (strstr($str, ".net") === false) {
    echo "não encontramos a string";
}
