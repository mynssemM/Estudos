<?php

namespace Mucilon\Course\functions;

//parametros de função

function velocityMax($vel)
{
    if (is_int($vel)) {
        echo "O carro atinge a velocidade maxima de $vel km/h <br>";
    } else {
        echo "escreva a velocidade de forma correta <br>";
    }
}

velocityMax(200);
velocityMax(300);
velocityMax(400);

// não pode
//velocityMax();

echo "teste continuando <br>";

$velocidade = 125;

velocityMax($velocidade);

//php ignora parametro desnecessario

velocityMax(250, "teste");

velocityMax("teste");

function descreverAnimal($name, $raca)
{
    echo "O $name é da raça $raca <br>";
}

descreverAnimal("pedro", "viralata");
descreverAnimal("Leitão", "vira-lata");
