<?php

namespace Mucilon\Course\avançandoEmStrings;

//Array para String


$arr = ["Maçã", "Pera", "Mamão", "banana"];

$arrString = implode(", ", $arr);

echo "$arrString <br>";

$arr2 = ["Maçã", "Pera", "Mamão", "banana"];

$arrString2 = implode("<-> ", $arr2);
echo "$arrString2 <br>";
