<?php

namespace Mucilon\Course\estruturaDeRepeticao;

// foreach

$nomes = ["gabriel", "pedro", "matheus", "daniel"];

foreach ($nomes as $nome) {

    echo "O nome do indice atual é $nome <br>";
    if ($nome == "pedro") {
        echo "opa <br>";
    }
}
