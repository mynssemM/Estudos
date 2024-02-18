<?php

namespace Mucilon\Course\variaveis;

// Variavel por referência

$x = 10;

$y = &$x;

echo $x;
echo '<br>';
echo $y;

$y = 15;

echo '<br>';
echo $x;
echo '<br>';
echo $y;

$x = 20;

echo '<br>';
echo $x;
echo '<br>';
echo $y;

$nome = 'Gabriel';

$nome2 = &$nome;

echo '<br>';
echo $nome;
echo '<br>';
echo $nome2;

$nome = 'Pedro';

$nome2 = &$nome;

echo '<br>';
echo $nome;
echo '<br>';
echo $nome2;
