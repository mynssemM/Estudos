<?php

namespace Mucilon\Course\avançandoEmArrays;

// unindo arrays

$arr = [1, 2, 3, 4];
$arr2 = [5, 6, 7, 8];
$arr3 = [9, 10.23, 11.12, 12];
$arr4 = ["asad", "adas"];
$arrMerge = array_merge($arr, $arr2, $arr3, $arr4);

print_r($arrMerge);
echo "<br>";
