<?php

namespace Mucilon\Course\avançandoEmArrays;

// invertendo Arrays

$arr = [1, 2, 3, 4, 5];

$arrRev = array_reverse($arr);

print_r($arr);
echo "<br>";
print_r($arrRev);
echo "<br>";

$arr2 = ["matheus", 12, true, [1, 2, 3]];

$arrRev2 = array_reverse($arr2);

print_r($arrRev2);
echo "<br>";
