<?php

namespace Mucilon\Course\estruturaDeControles\exercicios;

function verificarAcesso($age, $autorization)
{
    if ($age >= 18 && $autorization === true) {
        echo "Acesso autorizado!";
    } elseif ($age >= 18 && $autorization === false) {
        echo "Acesso negado. Autorização necessária";
    } elseif ($age < 18) {
        echo "Acesso negado. Idade mínima requerida: 18 anos";
    }
}

verificarAcesso(18, true);
