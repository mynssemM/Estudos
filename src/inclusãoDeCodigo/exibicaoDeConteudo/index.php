<?php

namespace Mucilon\Course\inclusãoDeCodigo\exibicaoDeConteudo;

$nome = "Gabriel";
$sobrenome = "mynssem";
?>

<?= "teste" ?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="text" value="<?= $sobrenome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>