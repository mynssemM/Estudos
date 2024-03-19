<?php

namespace Mucilon\Course\OrientaçãoAObjetos;

// visibilidade

class Table
{
    public $rodas = 4;
    private $vidro = "sem pelicula";
    protected $portas = 4;

    public function peliculaDeFabrica($pelicula)
    {
        $this->vidro = $pelicula;
    }

    public function getVidro()
    {
        return $this->vidro;
    }
    public function getPortas()
    {
        return $this->portas;
    }
}

class Mecanico
{

    public function alterarRodas($obj)
    {
        $obj->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }
}
$carro = new Table;

echo $carro->rodas . "<br>";

$matheus = new Mecanico;

$matheus->alterarRodas($carro);

echo $carro->rodas . "<br>";

#$matheus->colocarPelicula($carro, "G20");


$carro->peliculaDeFabrica("G20");

echo $carro->getVidro() . "<br>";

echo $carro->getPortas() . "<br>";
