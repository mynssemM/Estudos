<?php

namespace Mucilon\Course\estruturaDeRepeticao;

// estrutura while 

// definição do contador
$x = 0;

//inicio / definição da estrutura
while ($x < 10) {

    //incremento do contador
    ++$x;
    //corpo do loop
    echo $x . "<br>";
}


// definição do contador
$y = 0;

//inicio / definição da estrutura
while ($y < 10) {

    //incremento do contador
    $y += 2;
    //corpo do loop
    echo $y . "<br>";
}

// definição do contador
$z = 10;

//inicio / definição da estrutura
while ($z > 0) {

    //incremento do contador
    --$z;
    //corpo do loop
    echo $z . "<br>";
}

$a = 10;

//inicio / definição da estrutura
while ($a > 0) {

    //incremento do contador
    --$a;
    //corpo do loop
    if ($a % 2 != 0) {
        echo $a . "<br>";
    }
}
