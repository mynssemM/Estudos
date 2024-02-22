<?php

namespace Mucilon\Course\functions;

// retorno de multiplos dados

function alteraDados($nome, $idade)
{
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
}

$dados = alteraDados("Gabriel", 29);

echo "Olá $dados[0], você tem $dados[1]";
