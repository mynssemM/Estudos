<?php

namespace Mucilon\course\tiposDeDados;

// Tipos de dados Null

echo null;

$nome = null;

if (is_null($nome)) {
    echo 'Este valor é nulo';
}

$nome = 'Matheus';

if (is_null($nome)) {
    echo 'Este valor é nulo 2';
}
