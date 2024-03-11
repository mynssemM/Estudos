<?php

namespace Mucilon\Course\avançandoEmStrings\exericios;

//exercicio 2

$str = "O rato roeu a roupa do rei de roma";

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == "a") {
        echo "$str[$i] <br>";
    }
}
