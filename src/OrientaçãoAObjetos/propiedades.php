<?php

namespace Mucilon\Course\OrientaçãoAObjetos;

class Carro
{
    public $rodas = 4;
    public $aro = 20;
    public $cor = "vermelha";

    function ligar()
    {
        echo "vrum, vruuum";
    }
}

$ferrari = new Carro;

echo $ferrari->rodas . "<br>";
echo $ferrari->aro . "<br>";

$ferrari->cor = "azul <br>";

echo $ferrari->cor;

$ferrari->ligar();
