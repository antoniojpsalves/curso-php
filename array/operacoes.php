<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Antonio",
    "idade" => 24
];

$dados2 = array(
    "naturalidade" => "Crateús-CE"
);

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';

$indice = array_rand($dadosCompletos);

echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

echo "{$dadosCompletos['idade']}";

$impares = [1, 3, 5, 7 , 9];
$pares = [0, 2, 4, 6, 8];

$decimais = array_merge($pares, $impares);

sort($decimais);
echo "Números:";
print_r($decimais);