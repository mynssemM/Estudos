<?php

namespace Mucilon\Course\OrientaçãoAObjetos;

use Mucilon\Course\OrientaçãoAObjetos\exercicios\Carro;

class Index
{
}
class Animal
{
}
class Professor extends Index
{
}
$marcos = new Index;

$turca = new Animal;

if ($marcos instanceof Index) {
    echo "Marcos é um Humano <br>";
} else {
    echo "Marcos não é um Humano <br>";
}
if ($turca instanceof Index) {
    echo "A turca é um Humano <br>";
} else {
    echo "A turca não é um Humano <br>";
}

$pedro = new Professor;

if ($pedro instanceof Professor) {
    echo "Pedro é um Professor <br>";
} else {
    echo "Pedro não é um Humano <br>";
}
if ($pedro instanceof Index) {
    echo "Pedro é um Humano <br>";
} else {
    echo "Pedro não é um Humano <br>";
}

if ($turca instanceof Professor) {
    echo "A turca é um Humano <br>";
} else {
    echo "A turca não é um Professor <br>";
}
