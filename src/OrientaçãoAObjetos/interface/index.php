<?php

namespace Mucilon\Course\OrientaçãoAObjetos\interface;

interface Caracteristicas
{

    const nome = "matheus";
    public function falar();
}

class Humano implements Caracteristicas
{
    public $idade = 29;

    public function falar()
    {
        echo "Olá, mundo! <br>";
    }

    public function dizerNome()
    {
        echo "Meu nome é " . self::nome . "<br>";
    }
}

$gabriel = new Humano;

$gabriel->falar();
