<?php

namespace Mucilon\Course\avançandoEmArrays\exercicios;

/*

    crie um array associativo com nomes e idades
    imprima este dados em uma tabela de HTML
    dica utilize as tags do elemento table

*/

$cadastro = [
    'cadastro_1' => 'gabriel',
    'cadastro_2' => 'pedro',
    'cadastro_3' => 'daniel',
    'cadastro_4' => 'lucas',
];
?>
<table border="a">
    <tr>
        <th>nomes</th>
        <th>cadastro</th>
    </tr>
    <?php foreach ($cadastro as $names => $value) { ?>
        <tr>
            <td><?= $value ?></td>
            <td><?= $names ?></td>
        </tr>
    <?php } ?>
</table>