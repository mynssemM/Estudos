<?php

namespace Mucilon\Course\avançandoEmStrings;


// Tamanho da string

$st1 = "esta string é muito grande";

$st2 = "esta não";

echo strlen($st1) . "<br>";
echo strlen($st2) . "<br>";

$len = strlen($st1);
$len2 = strlen($st2);

if ($len > $len2) {
    echo "A string 1 é maior que a string 2";
} else {
    echo "A string 2 é maior que a string 1";
}
