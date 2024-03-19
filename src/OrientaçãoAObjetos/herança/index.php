<?php

namespace Mucilon\Course\OrientaçãoAObjetos\herança;

class Humano
{
    public $idade = 29;
    public function falar()
    {
        echo "Olá, mundo! <br>";
    }

    private function gritar()
    {
        echo "PHP É MELHOR QUE JAVA <br>";
    }

    public function acessarGritar()
    {
        $this->gritar();
    }

    protected function falarBaixo()
    {
        echo "lala <br>";
    }
    public function acessarFalarBaixo()
    {
        $this->falarBaixo();
    }
}

class Programador extends Humano
{
    public function acessarFalarBaixoProgramador()
    {
        $this->falarBaixo();
    }
}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->acessarFalarBaixo();
$gabriel = new Programador;

echo $gabriel->idade . "<br>";

$gabriel->falar();
$gabriel->acessarGritar();
$gabriel->acessarFalarBaixoProgramador();
