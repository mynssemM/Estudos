<?php

namespace Mucilon\Course\variaveis;

// escopo global

$teste = 'asdf';

echo "$teste global 1 <br>";
if (5 > 2) {
    $teste = 'dsa';
    echo "$teste if  <br>";
}

echo "$teste global 2 <br>";

function fuc()
{
    $teste = 1;
    echo "$teste local <br>";
}

fuc();

function testandoglobal()
{
    global $teste;
    $teste = 2;
    echo "$teste global função <br>";
}

testandoglobal();

echo "$teste global 3 <br>";
