<?php

namespace Mucilon\Course\OrientaçãoAObjetos;

// this 
class Animal
{
    public $nome;
    function escolherNome($nome)
    {
        $this->nome = $nome;
    }
    function latir()
    {
        return "au, au <br>";
    }
    function latirForte()
    {
        return strtoupper($this->latir());
    }
}

$frida = new Animal;

echo "o nome do animal é: $frida->nome <br>";
$frida->escolherNome("frida");

echo "o nome do animal é: $frida->nome <br>";

echo $frida->latir();

echo $frida->latirForte();
