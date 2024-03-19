<?php

namespace Mucilon\Course\OrientaçãoAObjetos\exercicios;

class Pessoa
{
    public $name = "gabriel";
    public $age = 18;

    function andar($metros)
    {
        echo "acabou a corrida nos $metros kms";
    }
}

$tes = new Pessoa;

echo $tes->name . ", ";
echo $tes->age . ", ";
$tes->andar(50);
