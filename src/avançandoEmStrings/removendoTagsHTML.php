<?php

namespace Mucilon\Course\avançandoEmStrings;

//removendo tags HTML

$textoHTML = "
<p> testando paragrafo. </p>
<div>uma div</div>
<p>outro paragrafo</p>";

echo $textoHTML;

$salvarTextoBanco = strip_tags($textoHTML);

echo $salvarTextoBanco;
