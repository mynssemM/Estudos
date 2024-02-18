<?php

namespace Mucilon\course\tiposDeDados\exercicios;

$pessoa = [
'Nome' => 'Gabriel',
'Sobrenome' => 'Mynssem',
'idade' => 19,
];

if ($pessoa['idade'] < 18) {
    echo 'você é menor de 18 anos!';
} elseif ($pessoa['idade'] >= 18) {
    echo 'você é maior de 18';
}
