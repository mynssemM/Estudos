<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

//Exercicio 03

//crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, automatico;
// chame este array de carro;
//crie variaveis com base neste array;

$carro = ["Jaguar", 3.0, "azul", 18, "Teto solar", "automatico"];

list($modelo, $motor, $cor, $numero, $teto, $tipoDeCambio) = $carro;

echo "$modelo <br>";
echo "$motor <br>";
echo "$cor <br>";
echo "$numero <br>";
echo "$teto <br>";
echo "$tipoDeCambio <br>";
