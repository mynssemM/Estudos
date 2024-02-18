<?php

namespace Mucilon\course\tiposDeDados;

// Checando booleanos

$a = true;

if (is_bool($a)) {
    echo 'isto é um boolean <br>';
}
if (is_bool(0)) {
    echo 'isto é um boolean <br>';
}
if (is_bool(false)) {
    echo 'isto é um boolean <br>';
}
