<?php

namespace Mucilon\Course\OrientaçãoAObjetos;

use Mucilon\course\tiposDeDados\Pessoa;

class Teste
{
    function falar()
    {
        echo "Olá, eu sou um objeto <br>";
    }

    function somar($x, $y)
    {
        echo $x + $y . "<br>";
    }
}

$matheus = new Teste;

$matheus->falar();
$matheus->falar();

$joao = new Teste;

$joao->falar();

$matheus->somar(2, 2);
$joao->somar(10, 20);
