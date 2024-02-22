<?php

namespace Mucilon\Course\functions;

// escopo

$a = 10;

$b = 15;

function testeEscopo()
{

    global $b;

    static $c = 0;

    $a = 5;

    $b++;

    $c++;
    echo "escopo local de A: $a . <br>";
    echo "escopo local de B: $b . <br>";
    echo "escopo static de c: $c . <br>";
}

echo "ESCOPO GLOBAL DE A: $a . <br>";
echo "ESCOPO GLOBAL DE B: $b . <br>";

$z = testeEscopo();
echo $z;

echo "ESCOPO GLOBAL DE b: $b . <br>";
