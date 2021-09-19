<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuição por valor

$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo "<br> $variavelValor";

//Atribuição por referência

$variavelReferencia = &$variavel;
//echo "<br> $variavelReferencia";
$variavelReferecencia = "mesma referência!";

echo "<br> $variavel $variavelReferencia";