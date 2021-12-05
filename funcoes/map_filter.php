<div class="titulo">MAP e FILTER</div>

<?php

$notas = [5.7, 8.5, 6.3, 4.2, 9.6, 7.7, 5.5];
$notasFinais = [];

foreach($notas as $nota) {
    $notasFinais[] = round($nota);
}
print_r($notasFinais);

echo "<br>";

$round = function ($value) { return round($value); };

/**
 * Cria um array novo, com o mesmo tamanho do original aplicando a função passada por parâmetro como regra.
 */
$notasFinais2 = array_map($round, $notas);

print_r($notasFinais2);

$apenasAprovados = [];

foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasAprovados[] = $nota;
    }
}

echo "<br>";
print_r($apenasAprovados);

$aprovacao = function($nota) { return $nota >= 7; };

echo "<br>";

/**
 * Cria um array novo filtrado pela função passada como parâmetro. O array criado será do mesmo tamanho ou menor que o original.
 */
$apenasAprovados2 = array_filter($notas, $aprovacao);

echo "<br>";
print_r($apenasAprovados2);

