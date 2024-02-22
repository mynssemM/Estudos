<?php

namespace Mucilon\Course\functions\exercicios;

// exercicio 11
$list = ['Arroz', 'trigo', 'pão', 'queijo'];

function listaParaString($arr)
{
    $str = "você levou esee itens do mercado ";

    for ($i = 0; $i < count($arr); $i++) {

        if ($i + 1 == count($arr)) {
            $str .= "$arr[$i]. ";
        } else {
            $str .= "$arr[$i], ";
        }
    }

    return $str;
}

echo listaParaString($list);
