<?php

namespace Mucilon\Course\estruturaDeControles;

// else if

if (10 > 5) {
    echo "entrou no if <br>";
} elseif (10 > 6) {
    echo "entrou no elseif <br>";
}

if (10 < 5) {
    echo "entrou no if 2 <br>";
} elseif (10 > 6) {
    echo "entrou no elseif 2 <br>";
}

if (10 < 5) {
    echo "entrou no if 2 <br>";
} elseif (10 < 6) {
    echo "entrou no elseif 2 <br>";
} elseif (11 > 1) {
    echo "entrou no elseif 4 <br>";
} else {
    echo "entrou no else <br>";
}
