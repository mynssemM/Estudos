<?php

namespace Mucilon\Course\estruturaDeControles\exercicios;

function verificarCategoria($category)
{
    switch ($category) {
        case "eletronicos":
            echo "Essa categoria é de produtos eletrônicos";
            break;
        case "vestuario":
            echo "essa categoria é de produtos de vestuario";
            break;
        case "alimentos":
            echo "Essa categoria é de produtos alimenticios";
            break;
        default:
            echo "categoria desconhecida.";
    }
}

echo verificarCategoria("vestuario");
