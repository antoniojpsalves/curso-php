<div class="titulo">Operador Ternário</div>

<?php

$idade = 24;

$status;

// IF normal

if ($idade >= 18) {
    $status = 'Maior de idade. <br>';
} else {
    $status = 'Menor de idade. <br>';
}

echo "$status";

//Com operador ternário

echo "<p class='divisao'> Usando o operador ternário </p><hr>";
$status = $idade >= 18 ? "Maior de idade." : "Menor de idade."; 
echo $status;
