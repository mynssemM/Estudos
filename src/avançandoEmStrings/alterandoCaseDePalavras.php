<?php

namespace Mucilon\course\avançandoEmStrings;

//Alterando o case de Palavras

// primeira letra em maiusculo
$str1 = "esta daqui a inicial é minuscula <br>";

echo ucfirst($str1);

// todas as inicias com as palavras maiusculas
$str2 = "esta daqui a inicial é tudo minusculo <br>";
echo ucwords($str2);
