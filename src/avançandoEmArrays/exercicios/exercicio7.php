<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

$arr = [
    'pedro' => 30,
    'matheus' => 35,
    'gabriel' => 60,
    'joão' => 50
];

$arr2 = [1, 2, 3, 4];

arsort($arr);

?>

<table border="a">
    <tr>
        <th>Nomes</th>
        <th>pontuação</th>
    </tr>
    <?php foreach ($arr as $podio => $value) { ?>
        <tr>
            <td> <?= $podio ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>
</table>