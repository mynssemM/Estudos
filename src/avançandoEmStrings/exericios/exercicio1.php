<?php

namespace Mucilon\Course\avançandoEmStrings\exericios;

function carrinho($object = ['Café' => 11, 'leite' => 4, 'Pizza' => 20])
{

    foreach ($object as &$carrinho) {
        if ($carrinho > 10) {
            echo "$carrinho esse é o preço do seu produto! <br>";
        }
    }
}

$z = carrinho();

echo $z;
