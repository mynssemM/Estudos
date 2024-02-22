<?php

namespace Mucilon\Course\functions\exercicios;

// exercicio 10

function countVowels($vowels)
{
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $j = 0;

    for ($i = 0; $i < strlen($vowels); $i++) {
        if (in_array($vowels[$i], $vogais)) {
            $j++;
        }
    }
    return "numero de vogais são $j";
}

echo countVowels("gAbriel");
