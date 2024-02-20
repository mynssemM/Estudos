<?php

namespace Mucilon\Course\estruturaDeControles;

//if aninhado

if (10 > 2) {
    echo "entrou no primeiro if <br>";
    if ("Teste" == "Teste") {
        echo "entrou no segundo if <br>";
    }
}
if (10 > 2) {
    echo "entrou no primeiro if 2 <br>";
    if ("Teste" != "Teste") {
        echo "entrou no segundo if 2 <br>";
    } else {
        echo "entrou no else 2 <br>";
    }
}

if (10 < 2) {
    echo "entrou no primeiro if 3 <br>";
    if ("Teste" != "Teste") {
        echo "entrou no segundo if 3 <br>";
    } else {
        echo "entrou no else 3 <br>";
    }
} else {
    echo "entrou no primeiro else <br>";
}
$escopo = 10;
if (10 > 2) {
    echo "entrou no primeiro if 3 <br>";

    echo $escopo . "<br>";
    if ("Teste" != "Teste") {
        echo "entrou no segundo if 3 <br>";
    } else {
        echo "entrou no else 3 <br>";
    }
} else {
    echo "entrou no primeiro else";
}
