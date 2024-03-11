<?php

namespace Mucilon\Course\avançandoEmArrays;

//buscando em arrays

$arr = ['banana', 'maçã', 'batata', 'pera', 'mamão'];

if (in_array("batata", $arr)) {
    echo "Há batata na lista <br>";
} else {
    echo "Não há batata na lista <br>";
}
$b = "banana";
if (in_array($b, $arr)) {
    echo "Há banana na lista <br>";
} else {
    echo "Não há banana na lista <br>";
}

if (in_array("teste", $arr)) {
    echo "Há teste na lista <br>";
} else {
    echo "Não há teste na lista <br>";
}
