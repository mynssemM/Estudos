<?php

namespace Mucilon\course\tiposDeDados;

// checando floats
$a = 'teste';
$b = 12.8;
if (is_float($a)) {
    echo 'Esse numero é float 1 <br>';
}
if (is_float($b)) {
    echo 'Esse numero é float 2 <br>';
}
if (is_float(777.777)) {
    echo 'Esse numero é float 3 <br>';
}
if (is_float('true')) {
    echo 'Esse numero é float 4! <br>';
}
