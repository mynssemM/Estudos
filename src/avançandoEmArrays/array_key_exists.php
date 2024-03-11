<?php

namespace Mucilon\Course\avançandoEmArrays;


// Verificando se valor existe com a função array_key_exists e isset

$arr = [
    'name' => 'Gabriel',
    'age' =>  17,
    'alt' => 1.74
];

if (array_key_exists('name', $arr)) {

    echo "chave existe! <br>";
} else {
    echo "chave não existe! <br>";
}

if (array_key_exists('profissao', $arr)) {

    echo "chave existe! <br>";
} else {
    echo "chave não existe! <br>";
}

//isset

if (isset($arr['name'])) {
    echo "chave existe! ISSET <br>";
} else {
    echo "chave não existe! ISSET <br>";
}

if (isset($arr['profissao'])) {
    echo "chave existe! ISSET <br>";
} else {
    echo "chave não existe! ISSET <br>";
}

// variavel ISSET
if (isset($x)) {
    echo "variavel existe! ISSET <br>";
} else {
    echo "variavel não existe! ISSET <br>";
}
