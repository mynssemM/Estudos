<?php

namespace Mucilon\Course\avançandoEmStrings;

// Decompor uma URL

$url = "https://www.google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);
echo "<br>";

echo $arrayUrl["host"];
echo "<br>";

$url2 = "http://www.horadecodar.com.br/?busca=php";

$arrayUrl1 = parse_url($url2);

print_r($arrayUrl1);
echo "<br>";
$url2 = "http://www.horadecodar.com.br/usuarios/matheusbattisti?ide=12&nome=Matheus";

$arrayUrl1 = parse_url($url2);

print_r($arrayUrl1);
