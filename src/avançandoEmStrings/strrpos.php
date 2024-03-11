<?php

namespace Mucilon\Course\avançandoEmStrings;

$str = "estaremos usando essa frase para usar o metodo strrpos, e assim iniciaremos os estudos";

$testeString = strrpos($str, "essa");

echo "$testeString <br>";

$testeString2 = strpos($str, "assim");

echo "$testeString2 <br>";

if (strrpos($str, "java") === false) {
    echo "A palavra Java não foi encontrada! <br>";
}

$p = substr($str, strpos($str, "teste"), 5);

echo "$p <br>";
