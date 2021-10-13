<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p class='divisao'>Negação Lógica</p><hr>";

var_dump(true);
//echo "<br>";
var_dump(!true);

echo "<p class='divisao'> Tabela verdade 'AND' -> (E).</p> <hr>";

var_dump(true && true); // Verdadeiro
var_dump(true && false); // Falso
var_dump(false && true); // Falso
var_dump(false && false); // Falso

echo "<p class='divisao'> Tabela verdade 'OR' -> (OU).</p> <hr>";

var_dump(true || true); // Verdadeiro
var_dump(true || false); // Verdadeiro
var_dump(false || true); // Verdadeiro
var_dump(false || false); // Falso


echo "<p class='divisao'> Tabela verdade 'XOR' -> (OU exclusivo).</p> <hr>";

var_dump(true xor true); // Falso
var_dump(true xor false); // Verdadeiro
var_dump(false xor true); // Verdadeiro
var_dump(false xor false); // Falso


echo "<p class='divisao'>Exemplo</p><hr>";

$idade = 65;
$sexo = 'F';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar.";
} else if ($idade >= 65 && $sexo === 'M') {
    echo "Também pode se aposentar.";
} else {
    echo "Vai ter que trabalhar mais um pouco.";
}

