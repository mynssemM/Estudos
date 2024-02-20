<?php

namespace Mucilon\Course\estruturaDeControles;

//Switch 

$x = 0;

switch ($x) {

    case 0:
        echo "x é igual a zero <br>";
        break;
    case 1:
        echo "x é igual a 1 <br>";
        break;
    default:
        echo "X não é igaul a nenhum do valores mencionados <br>";
}

$name = "Gabriel";

switch ($name) {

    case "Gabriel":
        echo "name is gabriel<br>";
        break;
    case "Pedro":
        echo "names is pedro <br>";
        break;
    default:
        echo "name not found <br>";
}
