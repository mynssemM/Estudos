<?php

namespace Mucilon\Course\OrientaçãoAObjetos\exercicios;

class Carro
{
    public string $cor;
    public $motor;
    public $velocidadeMaxima;

    function setVelociadeMaxima($vel)
    {
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima()
    {
        echo "a velocidade maxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }
}

$bmw = new Carro;

$bmw->cor = "Blue";
$bmw->motor = 3.0;
$bmw->setVelociadeMaxima(200);
$bmw->getVelocidadeMaxima();
