<?php

namespace Mucilon\Course\estruturaDeControles\exercicios;

//exercicio 7 ELSE IF

$velocityCar = 120;

if ($velocityCar < 40) {
    echo "está na velocidade correta! <br>";
} elseif ($velocityCar == 40) {
    echo "tome cuidado, velocidade no limite da via";
} else {
    echo "multado deixa de ser corno anda direito";
}
