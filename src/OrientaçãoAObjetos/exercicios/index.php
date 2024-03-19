<?php

namespace Mucilon\Course\OrientaçãoAObjetos\exercicios;

// exercicio 5

class Humano
{
    public $olhos = 2;
    public $pernas = 2;

    public function falar()
    {
        return "Iae, meu parceiro! <br>";
    }
}

class Professor extends Humano
{
    private $oculos = "haiban";
    private $bota = "couro";
    private $caneta = "azul";

    private function comprimentar()
    {
        echo "Bom dia, turma";
    }

    public function getComprimentar()
    {
        $this->comprimentar();
    }

    public function getOculos()
    {
        return $this->oculos;
    }
    public function getBota()
    {
        return $this->bota;
    }
    public function getCaneta()
    {
        return $this->caneta;
    }
}
//Classe pai
$marcos = new Humano;
echo "Olhos de marcos: " . $marcos->olhos . "<br>";
echo "pernas de marcos: " . $marcos->pernas . "<br>";
echo $marcos->falar();

//classe filho
$gabriel = new Professor;

echo "Olhos: " . $gabriel->olhos . "<br>";
echo "pernas: " . $gabriel->pernas . "<br>";
echo $gabriel->falar();
echo $gabriel->getComprimentar() . "<br>";
echo $gabriel->getOculos() . "<br>";
echo $gabriel->getBota() . "<br>";
