<?php

namespace Mucilon\Course\avançandoEmStrings;

//String para array

$frase = "testando o explode";

$fraseArr = explode(" ", $frase);

print_r($fraseArr);

echo "<br>";

$fraseArr2 = explode(",", $frase);
print_r($fraseArr2);
echo "<br>";

$fraseB = "Carro, aviao, pizza";
$fraseBArr = explode(",", $fraseB);

print_r($fraseBArr);
echo "<br>";

for ($i = 0; $i < count($fraseBArr); $i++) {
    echo "$fraseBArr[$i] <br>";
}
