<?php

namespace Mucilon\Course\variaveis;

// Variavel Estatica

function teste()
{
    $a = 0;
    ++$a;

    echo "$a <br>";
}
teste();
teste();
teste();

function testeStatic()
{
    static $a = 0;
    ++$a;

    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();
