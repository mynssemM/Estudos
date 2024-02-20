<?php

namespace Mucilon\Course\estruturaDeControles\exercicios;

function calcularDesconto($value, $category)
{
    if ($category == "eletronicos") {
        $porcentagem = $value - ($value / 100 * 10);
        echo "valor de desconto: " . $porcentagem;
    }
    if ($category == "vestuario") {
        $porcentagem = $value - ($value / 100 * 20);
        echo "valor de desconto: " . $porcentagem;
    } elseif ($category == "alimentos") {
        $porcentagem = $value - ($value / 100 * 5);
        echo "valor de desconto: " . $porcentagem;
    }
}

echo calcularDesconto(100, "alimentos");
