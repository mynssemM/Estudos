<?php

namespace Mucilon\course\tiposDeDados;

// Checando Strings

$a = 'String';
$num = 12;
if (is_string($a)) {
    echo 'é uma string <br>';
}
if (is_string($num)) {
    echo "$num é uma string";
}
if (is_string('IAISIA')) {
    echo 'é uma string';
}
