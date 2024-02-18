<?php

namespace Mucilon\Course\variaveis;

// escopo local

$x = 10;

echo "$x local <br>";

function teste()
{
    $x = 5;

    echo "$x local <br>";
}

teste();

echo "$x local <br>";

teste();

function testando()
{
    $x = 12;

    echo "$x local 2 <br>";
}
$x = 99;

testando();

teste();

echo "$x global <br>";
