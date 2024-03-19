<?php

namespace Mucilon\Course\OrientaçãoAObjetos\exercicios;

class Cachorro
{
    function latir()
    {
        echo "AU, AU, AU, AU, AU, AU <br>";
    }
    function andar($metros)
    {
        echo "andando $metros metros.....";
    }
}

$dogMal = new Cachorro;

$dogMal->latir();
$dogMal->andar(10);
