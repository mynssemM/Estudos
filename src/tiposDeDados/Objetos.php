<?php

namespace Mucilon\course\tiposDeDados;

// Objetos

class Pessoa
{
    public function falar()
    {
        echo 'Olá pessoal!';
    }
}

$matheus = new Pessoa();

$matheus->$nome = 'Matheus';

echo $matheus->$nome;

echo '<br>';

$matheus->falar();
